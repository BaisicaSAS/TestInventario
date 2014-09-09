<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/in')) {
            // inventario_front_homepage
            if ($pathinfo === '/inventario') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'inventario_front_homepage',);
            }

            if (0 === strpos($pathinfo, '/informes')) {
                // informes
                if (rtrim($pathinfo, '/') === '/informes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'informes');
                    }

                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::indexAction',  '_route' => 'informes',);
                }

                // informes_kardex
                if ($pathinfo === '/informes/kardex') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::kardexAction',  '_route' => 'informes_kardex',);
                }

                // informes_mvtoterceros
                if ($pathinfo === '/informes/mvtoterceros') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::mvtotercerosAction',  '_route' => 'informes_mvtoterceros',);
                }

                // informes_histprecios
                if ($pathinfo === '/informes/histprecios') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::histpreciosAction',  '_route' => 'informes_histprecios',);
                }

                if (0 === strpos($pathinfo, '/informes/kardex')) {
                    // informes_kardexData
                    if ($pathinfo === '/informes/kardexData') {
                        return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::kardexDataAction',  '_route' => 'informes_kardexData',);
                    }

                    // informes_kardexResumen
                    if ($pathinfo === '/informes/kardexResumen') {
                        return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::kardexResumenAction',  '_route' => 'informes_kardexResumen',);
                    }

                }

                // informes_mvtotercerosData
                if ($pathinfo === '/informes/mvtotercerosData') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::mvtotercerosDataAction',  '_route' => 'informes_mvtotercerosData',);
                }

                // informes_histpreciosData
                if (0 === strpos($pathinfo, '/informes/histpreciosData') && preg_match('#^/informes/histpreciosData/(?P<prod>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'informes_histpreciosData')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::histpreciosDataAction',));
                }

                if (0 === strpos($pathinfo, '/informes/mvto')) {
                    // informes_mvtomeses
                    if ($pathinfo === '/informes/mvtomeses') {
                        return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::mvtomesesAction',  '_route' => 'informes_mvtomeses',);
                    }

                    // informes_mvtoproductos
                    if ($pathinfo === '/informes/mvtoproductos') {
                        return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::mvtoproductosAction',  '_route' => 'informes_mvtoproductos',);
                    }

                }

                // informes_rotacion
                if ($pathinfo === '/informes/rotacion') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\InformesController::rotacionAction',  '_route' => 'informes_rotacion',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/clasifproductos')) {
            // clasifproductos
            if (rtrim($pathinfo, '/') === '/clasifproductos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'clasifproductos');
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::indexAction',  '_route' => 'clasifproductos',);
            }

            if (0 === strpos($pathinfo, '/clasifproductos/list')) {
                // clasifproductos_listGrid
                if ($pathinfo === '/clasifproductos/listGrid') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::listGridAction',  '_route' => 'clasifproductos_listGrid',);
                }

                // clasifproductos_listPadre
                if (0 === strpos($pathinfo, '/clasifproductos/listPadre') && preg_match('#^/clasifproductos/listPadre/(?P<intipo>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasifproductos_listPadre')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::listPadreAction',));
                }

            }

            // clasifproductos_guardaGrid
            if ($pathinfo === '/clasifproductos/guardaGrid') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::guardaGridAction',  '_route' => 'clasifproductos_guardaGrid',);
            }

            // clasifproductos_show
            if (preg_match('#^/clasifproductos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasifproductos_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::showAction',));
            }

            // clasifproductos_new
            if ($pathinfo === '/clasifproductos/new') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::newAction',  '_route' => 'clasifproductos_new',);
            }

            // clasifproductos_create
            if ($pathinfo === '/clasifproductos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_clasifproductos_create;
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::createAction',  '_route' => 'clasifproductos_create',);
            }
            not_clasifproductos_create:

            // clasifproductos_edit
            if (preg_match('#^/clasifproductos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasifproductos_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::editAction',));
            }

            // clasifproductos_update
            if (preg_match('#^/clasifproductos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_clasifproductos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasifproductos_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::updateAction',));
            }
            not_clasifproductos_update:

            // clasifproductos_delete
            if (preg_match('#^/clasifproductos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_clasifproductos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasifproductos_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ClasifproductosController::deleteAction',));
            }
            not_clasifproductos_delete:

        }

        if (0 === strpos($pathinfo, '/productos')) {
            // productos
            if (rtrim($pathinfo, '/') === '/productos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'productos');
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::indexAction',  '_route' => 'productos',);
            }

            // productos_listProGrid
            if (0 === strpos($pathinfo, '/productos/listProGrid') && preg_match('#^/productos/listProGrid/(?P<pidter>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productos_listProGrid')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::listProGridAction',));
            }

            // productos_show
            if (preg_match('#^/productos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productos_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::showAction',));
            }

            // productos_new
            if ($pathinfo === '/productos/new') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::newAction',  '_route' => 'productos_new',);
            }

            // productos_create
            if ($pathinfo === '/productos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_productos_create;
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::createAction',  '_route' => 'productos_create',);
            }
            not_productos_create:

            // productos_edit
            if (preg_match('#^/productos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productos_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::editAction',));
            }

            // productos_update
            if (preg_match('#^/productos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_productos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productos_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::updateAction',));
            }
            not_productos_update:

            // productos_delete
            if (preg_match('#^/productos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_productos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productos_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ProductosController::deleteAction',));
            }
            not_productos_delete:

        }

        if (0 === strpos($pathinfo, '/terceros')) {
            // terceros
            if (rtrim($pathinfo, '/') === '/terceros') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'terceros');
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::indexAction',  '_route' => 'terceros',);
            }

            // terceros_listTerGrid
            if (0 === strpos($pathinfo, '/terceros/listTerGrid') && preg_match('#^/terceros/listTerGrid/(?P<tipo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terceros_listTerGrid')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::listTerGridAction',));
            }

            // terceros_show
            if (preg_match('#^/terceros/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terceros_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::showAction',));
            }

            // terceros_new
            if ($pathinfo === '/terceros/new') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::newAction',  '_route' => 'terceros_new',);
            }

            // terceros_create
            if ($pathinfo === '/terceros/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_terceros_create;
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::createAction',  '_route' => 'terceros_create',);
            }
            not_terceros_create:

            // terceros_edit
            if (preg_match('#^/terceros/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terceros_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::editAction',));
            }

            // terceros_update
            if (preg_match('#^/terceros/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_terceros_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terceros_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::updateAction',));
            }
            not_terceros_update:

            // terceros_delete
            if (preg_match('#^/terceros/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_terceros_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terceros_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TercerosController::deleteAction',));
            }
            not_terceros_delete:

        }

        if (0 === strpos($pathinfo, '/det')) {
            if (0 === strpos($pathinfo, '/detdocumentos')) {
                // detdocumentos
                if (rtrim($pathinfo, '/') === '/detdocumentos') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'detdocumentos');
                    }

                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetdocumentosController::indexAction',  '_route' => 'detdocumentos',);
                }

                // detdocumentos_show
                if (preg_match('#^/detdocumentos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detdocumentos_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetdocumentosController::showAction',));
                }

                // detdocumentos_new
                if ($pathinfo === '/detdocumentos/new') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetdocumentosController::newAction',  '_route' => 'detdocumentos_new',);
                }

                // detdocumentos_create
                if ($pathinfo === '/detdocumentos/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_detdocumentos_create;
                    }

                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetdocumentosController::createAction',  '_route' => 'detdocumentos_create',);
                }
                not_detdocumentos_create:

                // detdocumentos_edit
                if (preg_match('#^/detdocumentos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detdocumentos_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetdocumentosController::editAction',));
                }

                // detdocumentos_update
                if (preg_match('#^/detdocumentos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_detdocumentos_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detdocumentos_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetdocumentosController::updateAction',));
                }
                not_detdocumentos_update:

                // detdocumentos_delete
                if (preg_match('#^/detdocumentos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_detdocumentos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detdocumentos_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetdocumentosController::deleteAction',));
                }
                not_detdocumentos_delete:

            }

            if (0 === strpos($pathinfo, '/detlistaprecios')) {
                // detlistaprecios
                if (rtrim($pathinfo, '/') === '/detlistaprecios') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'detlistaprecios');
                    }

                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetlistapreciosController::indexAction',  '_route' => 'detlistaprecios',);
                }

                // detlistaprecios_show
                if (preg_match('#^/detlistaprecios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detlistaprecios_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetlistapreciosController::showAction',));
                }

                // detlistaprecios_new
                if ($pathinfo === '/detlistaprecios/new') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetlistapreciosController::newAction',  '_route' => 'detlistaprecios_new',);
                }

                // detlistaprecios_create
                if ($pathinfo === '/detlistaprecios/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_detlistaprecios_create;
                    }

                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetlistapreciosController::createAction',  '_route' => 'detlistaprecios_create',);
                }
                not_detlistaprecios_create:

                // detlistaprecios_edit
                if (preg_match('#^/detlistaprecios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detlistaprecios_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetlistapreciosController::editAction',));
                }

                // detlistaprecios_update
                if (preg_match('#^/detlistaprecios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_detlistaprecios_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detlistaprecios_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetlistapreciosController::updateAction',));
                }
                not_detlistaprecios_update:

                // detlistaprecios_delete
                if (preg_match('#^/detlistaprecios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_detlistaprecios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detlistaprecios_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\DetlistapreciosController::deleteAction',));
                }
                not_detlistaprecios_delete:

            }

        }

        if (0 === strpos($pathinfo, '/tipdoc')) {
            // tipdoc
            if (rtrim($pathinfo, '/') === '/tipdoc') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipdoc');
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::indexAction',  '_route' => 'tipdoc',);
            }

            // tipdoc_listTipDocGrid
            if ($pathinfo === '/tipdoc/listTipDocGrid') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::listTipDocGridAction',  '_route' => 'tipdoc_listTipDocGrid',);
            }

            // tipdoc_show
            if (preg_match('#^/tipdoc/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipdoc_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::showAction',));
            }

            // tipdoc_new
            if ($pathinfo === '/tipdoc/new') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::newAction',  '_route' => 'tipdoc_new',);
            }

            // tipdoc_create
            if ($pathinfo === '/tipdoc/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipdoc_create;
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::createAction',  '_route' => 'tipdoc_create',);
            }
            not_tipdoc_create:

            // tipdoc_edit
            if (preg_match('#^/tipdoc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipdoc_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::editAction',));
            }

            // tipdoc_update
            if (preg_match('#^/tipdoc/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipdoc_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipdoc_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::updateAction',));
            }
            not_tipdoc_update:

            // tipdoc_delete
            if (preg_match('#^/tipdoc/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipdoc_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipdoc_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\TipdocController::deleteAction',));
            }
            not_tipdoc_delete:

        }

        if (0 === strpos($pathinfo, '/vendedores')) {
            // vendedores
            if (rtrim($pathinfo, '/') === '/vendedores') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vendedores');
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::indexAction',  '_route' => 'vendedores',);
            }

            // vendedores_listVenGrid
            if ($pathinfo === '/vendedores/listVenGrid') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::listVenGridAction',  '_route' => 'vendedores_listVenGrid',);
            }

            // vendedores_show
            if (preg_match('#^/vendedores/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendedores_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::showAction',));
            }

            // vendedores_new
            if ($pathinfo === '/vendedores/new') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::newAction',  '_route' => 'vendedores_new',);
            }

            // vendedores_create
            if ($pathinfo === '/vendedores/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vendedores_create;
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::createAction',  '_route' => 'vendedores_create',);
            }
            not_vendedores_create:

            // vendedores_edit
            if (preg_match('#^/vendedores/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendedores_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::editAction',));
            }

            // vendedores_update
            if (preg_match('#^/vendedores/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vendedores_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendedores_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::updateAction',));
            }
            not_vendedores_update:

            // vendedores_delete
            if (preg_match('#^/vendedores/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_vendedores_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendedores_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\VendedoresController::deleteAction',));
            }
            not_vendedores_delete:

        }

        if (0 === strpos($pathinfo, '/masdocumentos')) {
            // masdocumentos
            if (rtrim($pathinfo, '/') === '/masdocumentos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'masdocumentos');
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::indexAction',  '_route' => 'masdocumentos',);
            }

            // masdocumentos_print
            if (0 === strpos($pathinfo, '/masdocumentos/print') && preg_match('#^/masdocumentos/print/(?P<piddoc>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'masdocumentos_print')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::printAction',));
            }

            if (0 === strpos($pathinfo, '/masdocumentos/list')) {
                // masdocumentos_listMasDocGrid
                if ($pathinfo === '/masdocumentos/listMasDocGrid') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::listMasDocGridAction',  '_route' => 'masdocumentos_listMasDocGrid',);
                }

                // masdocumentos_listDetDocGrid
                if (0 === strpos($pathinfo, '/masdocumentos/listDetDocGrid') && preg_match('#^/masdocumentos/listDetDocGrid/(?P<piddoc>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'masdocumentos_listDetDocGrid')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::listDetDocGridAction',));
                }

            }

            if (0 === strpos($pathinfo, '/masdocumentos/guarda')) {
                // masdocumentos_guardaMasDocGrid
                if ($pathinfo === '/masdocumentos/guardaMasDocGrid') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::guardaMasDocGridAction',  '_route' => 'masdocumentos_guardaMasDocGrid',);
                }

                // masdocumentos_guardaDetDocGrid
                if ($pathinfo === '/masdocumentos/guardaDetDocGrid') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::guardaDetDocGridAction',  '_route' => 'masdocumentos_guardaDetDocGrid',);
                }

            }

            // masdocumentos_show
            if (preg_match('#^/masdocumentos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'masdocumentos_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::showAction',));
            }

            // masdocumentos_new
            if ($pathinfo === '/masdocumentos/new') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::newAction',  '_route' => 'masdocumentos_new',);
            }

            // masdocumentos_create
            if ($pathinfo === '/masdocumentos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_masdocumentos_create;
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::createAction',  '_route' => 'masdocumentos_create',);
            }
            not_masdocumentos_create:

            // masdocumentos_edit
            if (preg_match('#^/masdocumentos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'masdocumentos_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::editAction',));
            }

            // masdocumentos_update
            if (preg_match('#^/masdocumentos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_masdocumentos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'masdocumentos_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::updateAction',));
            }
            not_masdocumentos_update:

            // masdocumentos_delete
            if (preg_match('#^/masdocumentos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_masdocumentos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'masdocumentos_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\MasdocumentosController::deleteAction',));
            }
            not_masdocumentos_delete:

        }

        if (0 === strpos($pathinfo, '/listaprecios')) {
            // listaprecios
            if (rtrim($pathinfo, '/') === '/listaprecios') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'listaprecios');
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::indexAction',  '_route' => 'listaprecios',);
            }

            if (0 === strpos($pathinfo, '/listaprecios/list')) {
                // listaprecios_listMasLPGrid
                if ($pathinfo === '/listaprecios/listMasLPGrid') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::listMasLPGridAction',  '_route' => 'listaprecios_listMasLPGrid',);
                }

                // listaprecios_listDetLPGrid
                if (0 === strpos($pathinfo, '/listaprecios/listDetLPGrid') && preg_match('#^/listaprecios/listDetLPGrid/(?P<pidlista>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listaprecios_listDetLPGrid')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::listDetLPGridAction',));
                }

            }

            if (0 === strpos($pathinfo, '/listaprecios/guarda')) {
                // listaprecios_guardaMasLPGrid
                if ($pathinfo === '/listaprecios/guardaMasLPGrid') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::guardaMasLPGridAction',  '_route' => 'listaprecios_guardaMasLPGrid',);
                }

                // listaprecios_guardaDetLPGrid
                if ($pathinfo === '/listaprecios/guardaDetLPGrid') {
                    return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::guardaDetLPGridAction',  '_route' => 'listaprecios_guardaDetLPGrid',);
                }

            }

            // listaprecios_show
            if (preg_match('#^/listaprecios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listaprecios_show')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::showAction',));
            }

            // listaprecios_new
            if ($pathinfo === '/listaprecios/new') {
                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::newAction',  '_route' => 'listaprecios_new',);
            }

            // listaprecios_create
            if ($pathinfo === '/listaprecios/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_listaprecios_create;
                }

                return array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::createAction',  '_route' => 'listaprecios_create',);
            }
            not_listaprecios_create:

            // listaprecios_edit
            if (preg_match('#^/listaprecios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listaprecios_edit')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::editAction',));
            }

            // listaprecios_update
            if (preg_match('#^/listaprecios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_listaprecios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listaprecios_update')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::updateAction',));
            }
            not_listaprecios_update:

            // listaprecios_delete
            if (preg_match('#^/listaprecios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_listaprecios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listaprecios_delete')), array (  '_controller' => 'Inventario\\FrontBundle\\Controller\\ListapreciosController::deleteAction',));
            }
            not_listaprecios_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
