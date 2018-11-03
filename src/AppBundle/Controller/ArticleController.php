<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
//use AppBundle\Form\Type\UserType;
//use AppBundle\Entity\User;
use AppBundle\Form\Type\ArticleType;
use AppBundle\Entity\Article;
use AppBundle\Entity\Category;


class ArticleController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"article"})
     * @Rest\Get("/articles")
     */
    public function getArticlesAction(Request $request)
    {
        $articles = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Article')
                ->findAll();
        return $articles;
    }

    /**
     * @Rest\View(serializerGroups={"article"})
     * @Rest\Get("/articles/{article_id}")
     */
    public function getArticleAction(Request $request)
    {
        $article = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Article')
                ->find($request->get('article_id'));
       
        if (empty($article)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Article not found'], Response::HTTP_NOT_FOUND);
        }

        return $article;
    }

    

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"article"})
     * @Rest\Post("/articles/category/{id_category}")
     */
    public function postArticlesAction(Request $request)
    {
        $category = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->find($request->get('id_category'));
        
        //var_dump($category);
        if (empty($category)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }

        $article = new Article();
        $article->setCategory($category);
        $form = $this->createForm(ArticleType::class, $article);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($article);
            $em->flush();
            return $article;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"article"})
     * @Rest\Delete("/articles/{id}")
     */
    public function removeArticleAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $article = $em->getRepository('AppBundle:Article')
                    ->find($request->get('id'));
       
        if ($article) {
            $em->remove($article);
            $em->flush();
        }
    }

     /**
     * @Rest\View(serializerGroups={"article"})
     * @Rest\Put("/articles/{id}")
     */
    public function updateArticleAction(Request $request)
    {
        $article = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Article')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
   
        if (empty($article)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Article not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(ArticleType::class, $article);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($article);
            $em->flush();
            return $article;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(serializerGroups={"article"})
     * @Rest\Patch("/articles/{id}")
     */
    public function patchArticleAction(Request $request)
    {
        return $this->updateArticle($request, false);
    }

    private function updateArticle(Request $request, $clearMissing)
    {
        $article = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Article')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
       

        if (empty($article)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Article not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(ArticleType::class, $article);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($article);
            $em->flush();
            return $article;
        } else {
            return $form;
        }
    }
}