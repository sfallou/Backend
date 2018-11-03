<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Form\Type\CategoryType;
use AppBundle\Entity\Category;


class CategoryController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"category"})
     * @Rest\Get("/categories")
     */
    public function getCategoriesAction(Request $request)
    {
        $categories = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->findAll();
        return $categories;
    }

    /**
     * @Rest\View(serializerGroups={"category"})
     * @Rest\Get("/categories/{category_id}")
     */
    public function getCategoryAction(Request $request)
    {
        $category = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->find($request->get('category_id'));
       
        if (empty($category)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }

        return $category;
    }

    

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"category"})
     * @Rest\Post("/categories")
     */
    public function postCategoriesAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($category);
            $em->flush();
            return $category;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"category"})
     * @Rest\Delete("/categories/{id}")
     */
    /*
    public function removeCategoryAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $category = $em->getRepository('AppBundle:Category')
                    ->find($request->get('id'));
       
        if ($category) {
            $em->remove($category);
            $em->flush();
        }
    }
    */

    /**
     * @Rest\View(serializerGroups={"category"})
     * @Rest\Put("/categories/{id}")
     */
    public function updateCategoryAction(Request $request)
    {
        $category = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        if (empty($category)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CategoryType::class, $category);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($category);
            $em->flush();
            return $category;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(serializerGroups={"category"})
     * @Rest\Patch("/categories/{id}")
     */
    public function patchCategoryAction(Request $request)
    {
        return $this->updateCategory($request, false);
    }

    private function updateCategory(Request $request, $clearMissing)
    {
        $category = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
      
        if (empty($category)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CategoryType::class, $category);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($category);
            $em->flush();
            return $category;
        } else {
            return $form;
        }
    }

}