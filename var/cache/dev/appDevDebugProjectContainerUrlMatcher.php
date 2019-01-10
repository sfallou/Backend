<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/users')) {
            // remove_user
            if (preg_match('#^/users/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:removeUserAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_remove_user;
                }

                return $ret;
            }
            not_remove_user:

            // update_user
            if (preg_match('#^/users/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'update_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:updateUserAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_update_user;
                }

                return $ret;
            }
            not_update_user:

            // get_users
            if ('/users' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\UserController:getUsersAction',  '_format' => NULL,  '_route' => 'get_users',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_users;
                }

                return $ret;
            }
            not_get_users:

            // get_user
            if (preg_match('#^/users/(?P<user_id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:getUserAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_user;
                }

                return $ret;
            }
            not_get_user:

            // get_user_by_email
            if (0 === strpos($pathinfo, '/users/email') && preg_match('#^/users/email/(?P<user_email>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_by_email')), array (  '_controller' => 'AppBundle\\Controller\\UserController:getUserByEmailAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_user_by_email;
                }

                return $ret;
            }
            not_get_user_by_email:

            // post_users
            if ('/users' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\UserController:postUsersAction',  '_format' => NULL,  '_route' => 'post_users',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_post_users;
                }

                return $ret;
            }
            not_post_users:

            // patch_user
            if (preg_match('#^/users/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:patchUserAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PATCH'))) {
                    $allow = array_merge($allow, array('PATCH'));
                    goto not_patch_user;
                }

                return $ret;
            }
            not_patch_user:

        }

        // get_user_paniers
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)/paniers$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_paniers')), array (  '_controller' => 'AppBundle\\Controller\\PanierController:getUserPaniersAction',  '_format' => NULL,));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_get_user_paniers;
            }

            return $ret;
        }
        not_get_user_paniers:

        if (0 === strpos($pathinfo, '/articles')) {
            // remove_article
            if (preg_match('#^/articles/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController:removeArticleAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_remove_article;
                }

                return $ret;
            }
            not_remove_article:

            // update_article
            if (preg_match('#^/articles/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'update_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController:updateArticleAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_update_article;
                }

                return $ret;
            }
            not_update_article:

            // get_articles
            if ('/articles' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ArticleController:getArticlesAction',  '_format' => NULL,  '_route' => 'get_articles',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_articles;
                }

                return $ret;
            }
            not_get_articles:

            // get_article
            if (preg_match('#^/articles/(?P<article_id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController:getArticleAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_article;
                }

                return $ret;
            }
            not_get_article:

            // post_articles
            if (0 === strpos($pathinfo, '/articles/category') && preg_match('#^/articles/category/(?P<id_category>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_articles')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController:postArticlesAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_post_articles;
                }

                return $ret;
            }
            not_post_articles:

            // patch_article
            if (preg_match('#^/articles/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController:patchArticleAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PATCH'))) {
                    $allow = array_merge($allow, array('PATCH'));
                    goto not_patch_article;
                }

                return $ret;
            }
            not_patch_article:

        }

        elseif (0 === strpos($pathinfo, '/categories')) {
            // update_category
            if (preg_match('#^/categories/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'update_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController:updateCategoryAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_update_category;
                }

                return $ret;
            }
            not_update_category:

            // get_categories
            if ('/categories' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoryController:getCategoriesAction',  '_format' => NULL,  '_route' => 'get_categories',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_categories;
                }

                return $ret;
            }
            not_get_categories:

            // get_category
            if (preg_match('#^/categories/(?P<category_id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController:getCategoryAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_category;
                }

                return $ret;
            }
            not_get_category:

            // post_categories
            if ('/categories' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoryController:postCategoriesAction',  '_format' => NULL,  '_route' => 'post_categories',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_post_categories;
                }

                return $ret;
            }
            not_post_categories:

            // patch_category
            if (preg_match('#^/categories/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController:patchCategoryAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PATCH'))) {
                    $allow = array_merge($allow, array('PATCH'));
                    goto not_patch_category;
                }

                return $ret;
            }
            not_patch_category:

        }

        elseif (0 === strpos($pathinfo, '/commandes')) {
            // remove_commande
            if (preg_match('#^/commandes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_commande')), array (  '_controller' => 'AppBundle\\Controller\\CommandeController:removeCommandeAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_remove_commande;
                }

                return $ret;
            }
            not_remove_commande:

            // update_commandes
            if (preg_match('#^/commandes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'update_commandes')), array (  '_controller' => 'AppBundle\\Controller\\CommandeController:updateCommandesAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_update_commandes;
                }

                return $ret;
            }
            not_update_commandes:

            // get_commandes
            if ('/commandes' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\CommandeController:getCommandesAction',  '_format' => NULL,  '_route' => 'get_commandes',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_commandes;
                }

                return $ret;
            }
            not_get_commandes:

            // get_commande
            if (preg_match('#^/commandes/(?P<commande_id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_commande')), array (  '_controller' => 'AppBundle\\Controller\\CommandeController:getCommandeAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_commande;
                }

                return $ret;
            }
            not_get_commande:

            // post_commande
            if (0 === strpos($pathinfo, '/commandes/panier') && preg_match('#^/commandes/panier/(?P<id_panier>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_commande')), array (  '_controller' => 'AppBundle\\Controller\\CommandeController:postCommandeAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_post_commande;
                }

                return $ret;
            }
            not_post_commande:

            // patch_commande
            if (preg_match('#^/commandes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_commande')), array (  '_controller' => 'AppBundle\\Controller\\CommandeController:patchCommandeAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PATCH'))) {
                    $allow = array_merge($allow, array('PATCH'));
                    goto not_patch_commande;
                }

                return $ret;
            }
            not_patch_commande:

        }

        elseif (0 === strpos($pathinfo, '/paniers')) {
            // remove_panier
            if (preg_match('#^/paniers/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController:removePanierAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_remove_panier;
                }

                return $ret;
            }
            not_remove_panier:

            // update_panier
            if (preg_match('#^/paniers/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'update_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController:updatePanierAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_update_panier;
                }

                return $ret;
            }
            not_update_panier:

            // get_paniers
            if ('/paniers' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PanierController:getPaniersAction',  '_format' => NULL,  '_route' => 'get_paniers',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_paniers;
                }

                return $ret;
            }
            not_get_paniers:

            // get_panier
            if (preg_match('#^/paniers/(?P<panier_id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController:getPanierAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_panier;
                }

                return $ret;
            }
            not_get_panier:

            // get_panier_actif
            if (0 === strpos($pathinfo, '/paniers/actif/user') && preg_match('#^/paniers/actif/user/(?P<idUser>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_panier_actif')), array (  '_controller' => 'AppBundle\\Controller\\PanierController:getPanierActifAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_panier_actif;
                }

                return $ret;
            }
            not_get_panier_actif:

            // post_paniers
            if (0 === strpos($pathinfo, '/paniers/user') && preg_match('#^/paniers/user/(?P<id_user>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_paniers')), array (  '_controller' => 'AppBundle\\Controller\\PanierController:postPaniersAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_post_paniers;
                }

                return $ret;
            }
            not_post_paniers:

            // patch_panier
            if (preg_match('#^/paniers/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController:patchPanierAction',  '_format' => NULL,));
                if (!in_array($requestMethod, array('PATCH'))) {
                    $allow = array_merge($allow, array('PATCH'));
                    goto not_patch_panier;
                }

                return $ret;
            }
            not_patch_panier:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
