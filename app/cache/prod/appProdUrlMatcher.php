<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // sil12_vitrine_accueil
        if (0 === strpos($pathinfo, '/accueil') && preg_match('#^/accueil(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil12_vitrine_accueil')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\DefaultController::indexAction',  'name' => 'visiteur',));
        }

        // sil12_vitrine_mentions
        if ($pathinfo === '/mentions') {
            return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\DefaultController::mentionsAction',  '_route' => 'sil12_vitrine_mentions',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cat')) {
                // sil12_vitrine_catalogue
                if ($pathinfo === '/catalogue') {
                    return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\DefaultController::catalogueAction',  '_route' => 'sil12_vitrine_catalogue',);
                }

                // sil12_vitrine_articlesParCategorie
                if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil12_vitrine_articlesParCategorie')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\DefaultController::articlesParCategorieAction',));
                }

            }

            // sil12_vitrine_chapeau
            if (0 === strpos($pathinfo, '/chapeau') && preg_match('#^/chapeau/(?P<id>[^/]++)(?:/(?P<nb>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil12_vitrine_chapeau')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\DefaultController::chapeauAction',  'nb' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/panier')) {
            // sil12_vitrine_contenuPanier
            if ($pathinfo === '/panier') {
                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\PanierController::contenuPanierAction',  '_route' => 'sil12_vitrine_contenuPanier',);
            }

            // sil12_vitrine_addProduct
            if (preg_match('#^/panier(?:/(?P<id>[^/]++)(?:/(?P<qte>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil12_vitrine_addProduct')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\PanierController::addProductAction',  'id' => NULL,  'qte' => 1,));
            }

            // sil12_vitrine_deleteProduct
            if (preg_match('#^/panier(?:/(?P<id>[^/]++)(?:/(?P<qte>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil12_vitrine_deleteProduct')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\PanierController::deleteProductAction',  'id' => NULL,  'qte' => 1,));
            }

            // sil12_vitrine_removeProduct
            if (preg_match('#^/panier(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil12_vitrine_removeProduct')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\PanierController::removeProductAction',  'id' => NULL,));
            }

        }

        // sil12_vitrine_validationPanier
        if ($pathinfo === '/validationPanier') {
            return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\PanierController::validationPanierAction',  '_route' => 'sil12_vitrine_validationPanier',);
        }

        // sil12_vitrine_backoffice
        if ($pathinfo === '/backoffice') {
            return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\BackOfficeController::indexAction',  'id' => NULL,  'type' => NULL,  'nb' => 1,  '_route' => 'sil12_vitrine_backoffice',);
        }

        if (0 === strpos($pathinfo, '/product')) {
            // product
            if (rtrim($pathinfo, '/') === '/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product');
                }

                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ProductController::indexAction',  '_route' => 'product',);
            }

            // product_show
            if (preg_match('#^/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ProductController::showAction',));
            }

            // product_new
            if ($pathinfo === '/product/new') {
                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
            }

            // product_create
            if ($pathinfo === '/product/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_product_create;
                }

                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
            }
            not_product_create:

            // product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ProductController::editAction',));
            }

            // product_update
            if (preg_match('#^/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_product_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ProductController::updateAction',));
            }
            not_product_update:

            // product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ProductController::deleteAction',));
            }
            not_product_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/category')) {
                // category
                if (rtrim($pathinfo, '/') === '/category') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category');
                    }

                    return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }

                // category_show
                if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\CategoryController::showAction',));
                }

                // category_new
                if ($pathinfo === '/category/new') {
                    return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }

                // category_create
                if ($pathinfo === '/category/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_category_create;
                    }

                    return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                }
                not_category_create:

                // category_edit
                if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\CategoryController::editAction',));
                }

                // category_update
                if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\CategoryController::updateAction',));
                }
                not_category_update:

                // category_delete
                if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            if (0 === strpos($pathinfo, '/client')) {
                // client
                if (rtrim($pathinfo, '/') === '/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }

                    return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
                }

                // client_show
                if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::showAction',));
                }

                // client_new
                if ($pathinfo === '/client/new') {
                    return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }

                // client_create
                if ($pathinfo === '/client/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_create;
                    }

                    return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
                }
                not_client_create:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::editAction',));
                }

                // client_update
                if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_client_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::updateAction',));
                }
                not_client_update:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::deleteAction',));
                }
                not_client_delete:

            }

        }

        if (0 === strpos($pathinfo, '/orderhat')) {
            // orderhat
            if (rtrim($pathinfo, '/') === '/orderhat') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orderhat');
                }

                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\OrderhatController::indexAction',  '_route' => 'orderhat',);
            }

            // orderhat_show
            if (preg_match('#^/orderhat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderhat_show')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\OrderhatController::showAction',));
            }

            // orderhat_new
            if ($pathinfo === '/orderhat/new') {
                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\OrderhatController::newAction',  '_route' => 'orderhat_new',);
            }

            // orderhat_create
            if ($pathinfo === '/orderhat/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orderhat_create;
                }

                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\OrderhatController::createAction',  '_route' => 'orderhat_create',);
            }
            not_orderhat_create:

            // orderhat_edit
            if (preg_match('#^/orderhat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderhat_edit')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\OrderhatController::editAction',));
            }

            // orderhat_update
            if (preg_match('#^/orderhat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_orderhat_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderhat_update')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\OrderhatController::updateAction',));
            }
            not_orderhat_update:

            // orderhat_delete
            if (preg_match('#^/orderhat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_orderhat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderhat_delete')), array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\OrderhatController::deleteAction',));
            }
            not_orderhat_delete:

        }

        if (0 === strpos($pathinfo, '/auth')) {
            // sil12_vitrine_auth
            if ($pathinfo === '/auth') {
                return array (  '_controller' => 'sil12\\VitrineBundle\\Controller\\ClientController::authAction',  '_route' => 'sil12_vitrine_auth',);
            }

            // auth_check
            if ($pathinfo === '/auth_check') {
                return array('_route' => 'auth_check');
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
