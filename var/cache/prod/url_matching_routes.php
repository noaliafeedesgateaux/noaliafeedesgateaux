<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/mes-gâteaux' => [[['_route' => 'admin_cakes_index', '_controller' => 'App\\Controller\\Admin\\AdminCakesController::index'], null, null, null, false, false, null]],
        '/admin/mes-gâteaux/supprimer' => [[['_route' => 'admin_cakes_delete', '_controller' => 'App\\Controller\\Admin\\AdminCakesController::delete'], null, null, null, false, false, null]],
        '/admin/mes-gâteaux/ajouter' => [[['_route' => 'admin_cakes_new', '_controller' => 'App\\Controller\\Admin\\AdminCakesController::new'], null, null, null, false, false, null]],
        '/admin/cakes/findTitlesByQ' => [[['_route' => 'admin_cakes_findTitlesByQ', '_controller' => 'App\\Controller\\Admin\\AdminCakesController::findTitlesByQ'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminHomeController::index'], null, null, null, false, false, null]],
        '/admin/update-details' => [[['_route' => 'admin_apiUpdateDetails', '_controller' => 'App\\Controller\\Admin\\AdminHomeController::apiUpdateDetails'], null, null, null, false, false, null]],
        '/admin/mes-commandes' => [[['_route' => 'admin_order_index', '_controller' => 'App\\Controller\\Admin\\AdminOrderController::index'], null, null, null, false, false, null]],
        '/admin/order/delete' => [[['_route' => 'admin_order_apiDelete', '_controller' => 'App\\Controller\\Admin\\AdminOrderController::apiDelete'], null, null, null, false, false, null]],
        '/admin/order/markStatus' => [[['_route' => 'admin_order_apiMarkStatus', '_controller' => 'App\\Controller\\Admin\\AdminOrderController::apiMarkStatus'], null, null, null, false, false, null]],
        '/admin/order/showInfos' => [[['_route' => 'admin_order_apiShowOrder', '_controller' => 'App\\Controller\\Admin\\AdminOrderController::apiShowOrder'], null, null, null, false, false, null]],
        '/admin/order/countNotSeen' => [[['_route' => 'admin_order_apiCountNotSeen', '_controller' => 'App\\Controller\\Admin\\AdminOrderController::apiCountNotSeen'], null, null, null, false, false, null]],
        '/admin/distance-calculator' => [[['_route' => 'admin_apiDistanceCalculator', '_controller' => 'App\\Controller\\Admin\\AdminOrderController::apiDistanceCalculator'], null, null, null, false, false, null]],
        '/admin/pictures/delete' => [[['_route' => 'admin_picture_delete', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::delete'], null, null, null, false, false, null]],
        '/admin/pictures/replace-first' => [[['_route' => 'admin_picture_replaceFirst', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::replaceFirstPicture'], null, null, null, false, false, null]],
        '/admin/sécurité/modifier-mon-mot-de-passe' => [[['_route' => 'admin_security_passwordUpdate', '_controller' => 'App\\Controller\\Admin\\AdminSecurityController::passwordUpdate'], null, null, null, false, false, null]],
        '/admin/visites' => [[['_route' => 'admin_visit_index', '_controller' => 'App\\Controller\\Admin\\AdminVisitController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\Admin\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\Admin\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connexion/mot-de-passe-oublié' => [[['_route' => 'security_forgottenPassword', '_controller' => 'App\\Controller\\Admin\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/connexion/réinitialiser-mon-mot-de-passe' => [[['_route' => 'security_passwordInit', '_controller' => 'App\\Controller\\Admin\\SecurityController::passwordInit'], null, null, null, false, false, null]],
        '/toutes-mes-créations' => [[['_route' => 'cakes_index', '_controller' => 'App\\Controller\\CakesController::index'], null, null, null, false, false, null]],
        '/api/cakes/getCakeData' => [[['_route' => 'cakes_api_getCakeData', '_controller' => 'App\\Controller\\CakesController::getCakeData'], null, null, null, false, false, null]],
        '/api/cakes/addVisit' => [[['_route' => 'cakes_api_addVisit', '_controller' => 'App\\Controller\\CakesController::apiAddVisit'], null, null, null, false, false, null]],
        '/api/cakes/infinitePagination' => [[['_route' => 'cakes_api_infinitePagination', '_controller' => 'App\\Controller\\CakesController::infinitePagination'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/order-form-submission' => [[['_route' => 'order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|mes\\-gâteaux/gâteau\\-n°([^/]++)(?'
                        .'|(*:54)'
                        .'|/modifier(*:70)'
                    .')'
                    .'|cakes/spotlightToggle/([^/]++)(*:108)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        54 => [[['_route' => 'admin_cakes_show', '_controller' => 'App\\Controller\\Admin\\AdminCakesController::show'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'admin_cakes_update', '_controller' => 'App\\Controller\\Admin\\AdminCakesController::update'], ['id'], null, null, false, false, null]],
        108 => [
            [['_route' => 'admin_cakes_spotlightToggle', '_controller' => 'App\\Controller\\Admin\\AdminCakesController::spotlightToggle'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
