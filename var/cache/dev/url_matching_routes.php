<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::home'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'post.index', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, true, false, null]],
        '/post/create' => [[['_route' => 'post.create', '_controller' => 'App\\Controller\\PostController::create'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/custom(?:/([^/]++))?(*:28)'
                .'|/post/(?'
                    .'|show/([^/]++)(*:57)'
                    .'|delete/([^/]++)(*:79)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:118)'
                    .'|wdt/([^/]++)(*:138)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:184)'
                            .'|router(*:198)'
                            .'|exception(?'
                                .'|(*:218)'
                                .'|\\.css(*:231)'
                            .')'
                        .')'
                        .'|(*:241)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'custom', 'name' => null, '_controller' => 'App\\Controller\\MainController::custom'], ['name'], null, null, false, true, null]],
        57 => [[['_route' => 'post.show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        79 => [[['_route' => 'post.delete', '_controller' => 'App\\Controller\\PostController::remove'], ['id'], null, null, false, true, null]],
        118 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        138 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        184 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        198 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        218 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        231 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        241 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
