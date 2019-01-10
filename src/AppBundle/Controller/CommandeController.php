<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Panier;
use AppBundle\Form\Type\CommandeType;
use AppBundle\Entity\Commande;
use AppBundle\Entity\Article;



class CommandeController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"commande"})
     * @Rest\Get("/commandes")
     */
    public function getCommandesAction(Request $request)
    {
        $commandes = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Commande')
                ->findAll();

        $new_array = [];

        foreach ($commandes as $commande) {
                $commande->setArticle($this->setTheArticle($commande->getIdArticle()));
                $new_array[] = $commande;
                    
                }
        return $new_array;

        //return $commandes;
    }

    /**
     * @Rest\View(serializerGroups={"commande"})
     * @Rest\Get("/commandes/{commande_id}")
     */
    public function getCommandeAction(Request $request)
    {
        $commande = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Commande')
                ->find($request->get('commande_id'));
       
        if (empty($commande)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Commande not found'], Response::HTTP_NOT_FOUND);
        }
        
        //var_dump($article);
        $commande->setArticle($this->setTheArticle($commande->getIdArticle()));

        return $commande;
    }

    

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"commande"})
     * @Rest\Post("/commandes/panier/{id_panier}")
     */
    public function postCommandeAction(Request $request)
    {
        $panier = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Panier')
                ->find($request->get('id_panier'));
        

        if (empty($panier)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Panier not found'], Response::HTTP_NOT_FOUND);
        }

        $commande = new Commande();
        $commande->setPanier($panier);
        $commande->setDateCreation(new \DateTime("now"));
        $form = $this->createForm(CommandeType::class, $commande);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($commande);
            $em->flush();
            $somme = $commande->getMontantF1()+$commande->getMontantF2()+$panier->getMontant();
            $panier->setMontant($somme);
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($panier);
            $em->flush();
            return $commande;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"commande"})
     * @Rest\Delete("/commandes/{id}")
     */
    public function removeCommandeAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $commande= $em->getRepository('AppBundle:Commande')
                    ->find($request->get('id'));
       
        if ($commande) {
            $em->remove($commande);
            $em->flush();
        }
    }

     /**
     * @Rest\View(serializerGroups={"commande"})
     * @Rest\Put("/commandes/{id}")
     */
    public function updateCommandesAction(Request $request)
    {
        $commande = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Commande')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
   
        if (empty($commande)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Commande not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CommandeType::class, $commande);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($commande);
            $em->flush();
            return $commande;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(serializerGroups={"commande"})
     * @Rest\Patch("/commandes/{id}")
     */
    public function patchCommandeAction(Request $request)
    {
        return $this->updateCommande($request, false);
    }

    private function updateCommande(Request $request, $clearMissing)
    {
        $commande = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Commande')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
       

        if (empty($commande)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Commande not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CommandeType::class, $commande);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($commande);
            $em->flush();
            return $commande;
        } else {
            return $form;
        }
    }

    private function setTheArticle($id)
    {
        $article = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Article')
                ->find($id);
        return $article;
    }
}
