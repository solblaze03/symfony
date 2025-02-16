<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/centre' => [[['_route' => 'app_centre_index', '_controller' => 'App\\Controller\\CentreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/centre/new' => [[['_route' => 'app_centre_new', '_controller' => 'App\\Controller\\CentreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/listarCentros' => [[['_route' => 'ej1', '_controller' => 'App\\Controller\\HomeController::ej1'], null, null, null, false, false, null]],
        '/centrosValencia' => [[['_route' => 'ej2', '_controller' => 'App\\Controller\\HomeController::ej2'], null, null, null, false, false, null]],
        '/ciclos' => [[['_route' => 'ej3', '_controller' => 'App\\Controller\\HomeController::ej3'], null, null, null, false, false, null]],
        '/centrosDAM' => [[['_route' => 'ej4', '_controller' => 'App\\Controller\\HomeController::ej4'], null, null, null, false, false, null]],
        '/centro18' => [[['_route' => 'ej5', '_controller' => 'App\\Controller\\HomeController::ej5'], null, null, null, false, false, null]],
        '/insertarCentro' => [[['_route' => 'ej6', '_controller' => 'App\\Controller\\HomeController::ej6'], null, null, null, false, false, null]],
        '/actualizarTelefono' => [[['_route' => 'ej7', '_controller' => 'App\\Controller\\HomeController::ej7'], null, null, null, false, false, null]],
        '/eliminarIESMAR' => [[['_route' => 'ej8', '_controller' => 'App\\Controller\\HomeController::ej8'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/centre/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'app_centre_show', '_controller' => 'App\\Controller\\CentreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_centre_edit', '_controller' => 'App\\Controller\\CentreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [
            [['_route' => 'app_centre_delete', '_controller' => 'App\\Controller\\CentreController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
