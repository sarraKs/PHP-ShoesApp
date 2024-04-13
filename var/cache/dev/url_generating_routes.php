<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_chaussure_new' => [['id'], ['_controller' => 'App\\Controller\\ChaussureController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chaussure/new']], [], [], []],
    'chaussure_show' => [['id'], ['_controller' => 'App\\Controller\\ChaussureController::showAction'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/chaussure']], [], [], []],
    'app_chaussure_edit' => [['id'], ['_controller' => 'App\\Controller\\ChaussureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chaussure']], [], [], []],
    'app_chaussure_delete' => [['id'], ['_controller' => 'App\\Controller\\ChaussureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chaussure']], [], [], []],
    'app_exposition_index' => [[], ['_controller' => 'App\\Controller\\ExpositionController::index'], [], [['text', '/exposition/']], [], [], []],
    'app_exposition_new' => [['id'], ['_controller' => 'App\\Controller\\ExpositionController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/exposition/new']], [], [], []],
    'app_exposition_show' => [['id'], ['_controller' => 'App\\Controller\\ExpositionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/exposition']], [], [], []],
    'app_exposition_edit' => [['id'], ['_controller' => 'App\\Controller\\ExpositionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/exposition']], [], [], []],
    'app_exposition_delete' => [['id'], ['_controller' => 'App\\Controller\\ExpositionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/exposition']], [], [], []],
    'app_exposition_chaussure_show' => [['exposition_id', 'chaussure_id'], ['_controller' => 'App\\Controller\\ExpositionController::chaussureShow'], [], [['variable', '/', '[^/]++', 'chaussure_id', true], ['text', '/chaussure'], ['variable', '/', '[^/]++', 'exposition_id', true], ['text', '/exposition']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'app_member_index' => [[], ['_controller' => 'App\\Controller\\MemberController::index'], [], [['text', '/member/']], [], [], []],
    'app_member_show' => [['id'], ['_controller' => 'App\\Controller\\MemberController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/member']], [], [], []],
    'app_placard' => [[], ['_controller' => 'App\\Controller\\PlacardController::index'], [], [['text', '/MyShoes']], [], [], []],
    'Placard_list' => [[], ['_controller' => 'App\\Controller\\PlacardController::listAction'], [], [['text', '/placard/list']], [], [], []],
    'app_placard_edit' => [['id'], ['_controller' => 'App\\Controller\\PlacardController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/placard']], [], [], []],
    'placard_show' => [['id'], ['_controller' => 'App\\Controller\\PlacardController::showAction'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/placard']], [], [], []],
];