<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/enterprise' => [
            [['_route' => 'enterprise_index', '_controller' => 'App\\Controller\\EnterpriseController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'enterprise', '_controller' => 'App\\Controller\\MainController::enterprise'], null, null, null, false, false, null],
        ],
        '/enterprise/new' => [[['_route' => 'enterprise_new', '_controller' => 'App\\Controller\\EnterpriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/edit' => [[['_route' => 'edit', '_controller' => 'App\\Controller\\MainController::edit'], null, null, null, false, false, null]],
        '/newenterprise' => [[['_route' => 'newenterprise', '_controller' => 'App\\Controller\\MainController::newenterprise'], null, null, null, false, false, null]],
        '/newclients' => [[['_route' => 'newclients', '_controller' => 'App\\Controller\\MainController::newclients'], null, null, null, false, false, null]],
        '/newproducts' => [[['_route' => 'newproducts', '_controller' => 'App\\Controller\\MainController::newproducts'], null, null, null, false, false, null]],
        '/newinvoices' => [[['_route' => 'newinvoices', '_controller' => 'App\\Controller\\MainController::newinvoices'], null, null, null, false, false, null]],
        '/clients' => [[['_route' => 'clients', '_controller' => 'App\\Controller\\MainController::clients'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'products', '_controller' => 'App\\Controller\\MainController::products'], null, null, null, false, false, null]],
        '/invoices' => [[['_route' => 'invoices', '_controller' => 'App\\Controller\\MainController::invoices'], null, null, null, false, false, null]],
        '/network' => [[['_route' => 'network_index', '_controller' => 'App\\Controller\\NetworkController::index'], null, ['GET' => 0], null, true, false, null]],
        '/network/new' => [[['_route' => 'network_new', '_controller' => 'App\\Controller\\NetworkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/line/new' => [[['_route' => 'product_line_new', '_controller' => 'App\\Controller\\ProductLineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/social/network' => [[['_route' => 'social_network_index', '_controller' => 'App\\Controller\\SocialNetworkController::index'], null, ['GET' => 0], null, true, false, null]],
        '/social/network/new' => [[['_route' => 'social_network_new', '_controller' => 'App\\Controller\\SocialNetworkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/supervisor' => [[['_route' => 'supervisor_index', '_controller' => 'App\\Controller\\SupervisorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/supervisor/new' => [[['_route' => 'supervisor_new', '_controller' => 'App\\Controller\\SupervisorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/client/(?'
                    .'|enterprise/([^/]++)(*:37)'
                    .'|new/enterprise/([^/]++)(*:67)'
                    .'|show/([^/]++)/enterprise/([^/]++)(*:107)'
                    .'|([^/]++)(?'
                        .'|/edit(*:131)'
                        .'|(*:139)'
                    .')'
                .')'
                .'|/enterprise/([^/]++)(?'
                    .'|(*:172)'
                    .'|/(?'
                        .'|edit(*:188)'
                        .'|listinvoices(*:208)'
                    .')'
                    .'|(*:217)'
                .')'
                .'|/invoice/(?'
                    .'|client/([^/]++)(*:253)'
                    .'|new/client/([^/]++)(*:280)'
                    .'|show/([^/]++)(*:301)'
                    .'|([^/]++)(?'
                        .'|/edit(*:325)'
                        .'|(*:333)'
                    .')'
                    .'|search/enterprise/([^/]++)(?:/([^/]++))?(*:382)'
                    .'|print/([^/]++)(*:404)'
                .')'
                .'|/network/([^/]++)(?'
                    .'|(*:433)'
                    .'|/edit(*:446)'
                    .'|(*:454)'
                .')'
                .'|/product/(?'
                    .'|enterprise/([^/]++)(*:494)'
                    .'|new/enterprise/([^/]++)(*:525)'
                    .'|([^/]++)(?'
                        .'|(*:544)'
                        .'|/edit(*:557)'
                        .'|(*:565)'
                    .')'
                    .'|line(?'
                        .'|(*:581)'
                        .'|/([^/]++)(?'
                            .'|(*:601)'
                            .'|/edit(*:614)'
                            .'|(*:622)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|ocial/network/([^/]++)(?'
                        .'|(*:663)'
                        .'|/edit(*:676)'
                        .'|(*:684)'
                    .')'
                    .'|upervisor/([^/]++)(?'
                        .'|(*:714)'
                        .'|/edit(*:727)'
                        .'|(*:735)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], ['idempresa'], ['GET' => 0], null, false, true, null]],
        67 => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], ['idempresa'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        107 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['client', 'idempresa'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        172 => [[['_route' => 'enterprise_show', '_controller' => 'App\\Controller\\EnterpriseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'enterprise_edit', '_controller' => 'App\\Controller\\EnterpriseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'enterprise_listinvoices', '_controller' => 'App\\Controller\\EnterpriseController::invoices'], ['idempresa'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'enterprise_delete', '_controller' => 'App\\Controller\\EnterpriseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        253 => [[['_route' => 'invoice_index', '_controller' => 'App\\Controller\\InvoiceController::index'], ['idclient'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'invoice_new', '_controller' => 'App\\Controller\\InvoiceController::new'], ['idclient'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        301 => [[['_route' => 'invoice_show', '_controller' => 'App\\Controller\\InvoiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => 'invoice_edit', '_controller' => 'App\\Controller\\InvoiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [[['_route' => 'invoice_delete', '_controller' => 'App\\Controller\\InvoiceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        382 => [[['_route' => 'invoice_search', 'txtbusca' => '', '_controller' => 'App\\Controller\\InvoiceController::search'], ['identerprise', 'txtbusca'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        404 => [[['_route' => 'invoice_print', '_controller' => 'App\\Controller\\InvoiceController::print'], ['id'], ['DELETE' => 0], null, false, true, null]],
        433 => [[['_route' => 'network_show', '_controller' => 'App\\Controller\\NetworkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        446 => [[['_route' => 'network_edit', '_controller' => 'App\\Controller\\NetworkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        454 => [[['_route' => 'network_delete', '_controller' => 'App\\Controller\\NetworkController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        494 => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], ['idempresa'], ['GET' => 0], null, false, true, null]],
        525 => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], ['idempresa'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        544 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        557 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        565 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        581 => [[['_route' => 'product_line_index', '_controller' => 'App\\Controller\\ProductLineController::index'], [], ['GET' => 0], null, true, false, null]],
        601 => [[['_route' => 'product_line_show', '_controller' => 'App\\Controller\\ProductLineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        614 => [[['_route' => 'product_line_edit', '_controller' => 'App\\Controller\\ProductLineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        622 => [[['_route' => 'product_line_delete', '_controller' => 'App\\Controller\\ProductLineController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        663 => [[['_route' => 'social_network_show', '_controller' => 'App\\Controller\\SocialNetworkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        676 => [[['_route' => 'social_network_edit', '_controller' => 'App\\Controller\\SocialNetworkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        684 => [[['_route' => 'social_network_delete', '_controller' => 'App\\Controller\\SocialNetworkController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        714 => [[['_route' => 'supervisor_show', '_controller' => 'App\\Controller\\SupervisorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'supervisor_edit', '_controller' => 'App\\Controller\\SupervisorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [
            [['_route' => 'supervisor_delete', '_controller' => 'App\\Controller\\SupervisorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
