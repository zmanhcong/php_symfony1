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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/custom(?:/([^/]++))?(*:28)'
                .'|/post/(?'
                    .'|show/([^/]++)(*:57)'
                    .'|delete/([^/]++)(*:79)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:115)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'custom', 'name' => null, '_controller' => 'App\\Controller\\MainController::custom'], ['name'], null, null, false, true, null]],
        57 => [[['_route' => 'post.show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        79 => [[['_route' => 'post.delete', '_controller' => 'App\\Controller\\PostController::remove'], ['id'], null, null, false, true, null]],
        115 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
