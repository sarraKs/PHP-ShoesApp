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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/exposition' => [[['_route' => 'app_exposition_index', '_controller' => 'App\\Controller\\ExpositionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/member' => [[['_route' => 'app_member_index', '_controller' => 'App\\Controller\\MemberController::index'], null, ['GET' => 0], null, true, false, null]],
        '/MyShoes' => [[['_route' => 'app_placard', '_controller' => 'App\\Controller\\PlacardController::index'], null, null, null, false, false, null]],
        '/placard/list' => [[['_route' => 'Placard_list', '_controller' => 'App\\Controller\\PlacardController::listAction'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/chaussure/(?'
                    .'|new/([^/]++)(*:195)'
                    .'|(\\d+)(*:208)'
                    .'|([^/]++)(?'
                        .'|/edit(*:232)'
                        .'|(*:240)'
                    .')'
                .')'
                .'|/exposition/(?'
                    .'|new/([^/]++)(*:277)'
                    .'|([^/]++)(?'
                        .'|(*:296)'
                        .'|/(?'
                            .'|edit(*:312)'
                            .'|chaussure/([^/]++)(*:338)'
                        .')'
                        .'|(*:347)'
                    .')'
                .')'
                .'|/member/([^/]++)(*:373)'
                .'|/placard/(?'
                    .'|([^/]++)/edit(*:406)'
                    .'|(\\d+)(*:419)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'app_chaussure_new', '_controller' => 'App\\Controller\\ChaussureController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        208 => [[['_route' => 'chaussure_show', '_controller' => 'App\\Controller\\ChaussureController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_chaussure_edit', '_controller' => 'App\\Controller\\ChaussureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        240 => [[['_route' => 'app_chaussure_delete', '_controller' => 'App\\Controller\\ChaussureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        277 => [[['_route' => 'app_exposition_new', '_controller' => 'App\\Controller\\ExpositionController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        296 => [[['_route' => 'app_exposition_show', '_controller' => 'App\\Controller\\ExpositionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        312 => [[['_route' => 'app_exposition_edit', '_controller' => 'App\\Controller\\ExpositionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        338 => [[['_route' => 'app_exposition_chaussure_show', '_controller' => 'App\\Controller\\ExpositionController::chaussureShow'], ['exposition_id', 'chaussure_id'], ['GET' => 0], null, false, true, null]],
        347 => [[['_route' => 'app_exposition_delete', '_controller' => 'App\\Controller\\ExpositionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        373 => [[['_route' => 'app_member_show', '_controller' => 'App\\Controller\\MemberController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_placard_edit', '_controller' => 'App\\Controller\\PlacardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [
            [['_route' => 'placard_show', '_controller' => 'App\\Controller\\PlacardController::showAction'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
