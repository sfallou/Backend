<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\User;
use AppBundle\Form\Type\PanierType;
use AppBundle\Entity\Panier;
use AppBundle\Entity\Article;


class PanierController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"panier"})
     * @Rest\Get("/paniers")
     */
    public function getPaniersAction(Request $request)
    {
        $paniers = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Panier')
                ->findAll();
        return $paniers;
    }

    /**
     * @Rest\View(serializerGroups={"panier"})
     * @Rest\Get("/paniers/{panier_id}")
     */
    public function getPanierAction(Request $request)
    {
        $panier = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Panier')
                ->find($request->get('panier_id'));
       
        if (empty($panier)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Panier not found'], Response::HTTP_NOT_FOUND);
        }

        return $panier;
    }
    
    /**
     * @Rest\View(serializerGroups={"panier"})
     * @Rest\Get("/paniers/actif/user/{idUser}")
     */
    public function getPanierActifAction(Request $request)
    {
        $paniers = $this->get('doctrine.orm.entity_manager')
        ->getRepository('AppBundle:Panier')
        ->findBy(array('user' => $request->get('idUser'), 'etat' => 'actif'));
        
        if (empty($paniers)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Panier not found'], Response::HTTP_NOT_FOUND);
        }
        
        return $paniers;
    }

    /**
     * @Rest\View(serializerGroups={"panier"})
     * @Rest\Get("/user/{id}/paniers")
     */
    public function getUserPaniersAction(Request $request)
    {
        $paniers = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Panier')
                ->findAll();

        $new_array = [];

        foreach ($paniers as $panier) {
                    if ($panier->getUser()->getId()==$request->get('id')){
                    $this->setTheArticles($panier->getCommandes());
                    $new_array[] = $panier;
                    } 
                }
        return $new_array;
    }

    

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"panier"})
     * @Rest\Post("/paniers/user/{id_user}")
     */
    public function postPaniersAction(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:User')
                ->find($request->get('id_user'));
        

        if (empty($user)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $panier = new Panier();
        $panier->setUser($user);
        $panier->setDateCreation(new \DateTime("now"));
        $form = $this->createForm(PanierType::class, $panier);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($panier);
            $em->flush();
            return $panier;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"panier"})
     * @Rest\Delete("/paniers/{id}")
     */
    public function removePanierAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $panier= $em->getRepository('AppBundle:Panier')
                    ->find($request->get('id'));
       
        if ($panier) {
            $commandes = $panier->getCommandes();
            foreach ($commandes as $commande) {
                $em->remove($commande);
                $em->flush();
            }
            $em->remove($panier);
            $em->flush();
        }
    }

     /**
     * @Rest\View(serializerGroups={"panier"})
     * @Rest\Put("/paniers/{id}")
     */
    public function updatePanierAction(Request $request)
    {
        $panier = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Panier')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
   
        if (empty($panier)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Panier not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(PanierType::class, $panier);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($panier);
            $em->flush();
            return $panier;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(serializerGroups={"panier"})
     * @Rest\Patch("/paniers/{id}")
     */
    public function patchPanierAction(Request $request)
    {
        return $this->updatePanier($request, false);
    }

    private function updatePanier(Request $request, $clearMissing)
    {
        $panier = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Panier')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
       

        if (empty($panier)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Panier not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(PanierType::class, $panier);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($panier);
            $em->flush();
            return $panier;
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

    private function setTheArticles($commandes)
    {
        //$new_array = [];

        foreach ($commandes as $commande) {
                $commande->setArticle($this->setTheArticle($commande->getIdArticle()));
                $new_array[] = $commande;
                    
                }
        //return $new_array;
    }


}
