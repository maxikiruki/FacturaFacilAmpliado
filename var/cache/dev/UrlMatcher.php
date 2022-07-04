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
        '/product/line/new' => [[['_route' => 'product_line_new', '_controller' => 'App\\Controller\\ProductLineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
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
                .'|/budget/(?'
                    .'|client/([^/]++)(*:195)'
                    .'|new/client/([^/]++)(*:222)'
                    .'|budget(?'
                        .'|/([^/]++)/([^/]++)(*:257)'
                        .'|_(?'
                            .'|approbe/([^/]++)(*:285)'
                            .'|reject/([^/]++)(*:308)'
                            .'|invoice/([^/]++)(*:332)'
                        .')'
                    .')'
                .')'
                .'|/client/(?'
                    .'|enterprise/([^/]++)(*:373)'
                    .'|new/enterprise/([^/]++)(*:404)'
                    .'|show/([^/]++)/enterprise/([^/]++)(*:445)'
                    .'|([^/]++)(?'
                        .'|/edit(*:469)'
                        .'|(*:477)'
                    .')'
                .')'
                .'|/enterprise/([^/]++)(?'
                    .'|(*:510)'
                    .'|/(?'
                        .'|edit(*:526)'
                        .'|listinvoices(*:546)'
                    .')'
                    .'|(*:555)'
                .')'
                .'|/invoice/(?'
                    .'|client/([^/]++)(*:591)'
                    .'|new/client/([^/]++)(*:618)'
                    .'|show/([^/]++)(*:639)'
                    .'|([^/]++)(?'
                        .'|/edit(*:663)'
                        .'|(*:671)'
                    .')'
                    .'|search/enterprise/([^/]++)(?:/([^/]++))?(*:720)'
                    .'|([^/]++)/(?'
                        .'|print(*:745)'
                        .'|duplicate(*:762)'
                    .')'
                .')'
                .'|/network/(?'
                    .'|([^/]++)(*:792)'
                    .'|new/([^/]++)(*:812)'
                    .'|([^/]++)(?'
                        .'|(*:831)'
                        .'|/edit(*:844)'
                        .'|(*:852)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|enterprise/([^/]++)(*:893)'
                    .'|new/enterprise/([^/]++)(*:924)'
                    .'|([^/]++)(?'
                        .'|(*:943)'
                        .'|/edit(*:956)'
                        .'|(*:964)'
                    .')'
                    .'|line(?'
                        .'|(*:980)'
                        .'|/([^/]++)(?'
                            .'|(*:1000)'
                            .'|/edit(*:1014)'
                            .'|(*:1023)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|ocial/network/(?'
                        .'|([^/]++)(*:1065)'
                        .'|new/([^/]++)(*:1086)'
                        .'|([^/]++)(?'
                            .'|(*:1106)'
                            .'|/edit(*:1120)'
                            .'|(*:1129)'
                        .')'
                    .')'
                    .'|upervisor/(?'
                        .'|([^/]++)(*:1161)'
                        .'|new/([^/]++)(*:1182)'
                        .'|([^/]++)(?'
                            .'|(*:1202)'
                            .'|/edit(*:1216)'
                            .'|(*:1225)'
                        .')'
                    .')'
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
        195 => [[['_route' => 'budget_index', '_controller' => 'App\\Controller\\BudgetController::index'], ['idclient'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'budget_new', '_controller' => 'App\\Controller\\BudgetController::new'], ['idclient'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        257 => [[['_route' => 'budget_show', '_controller' => 'App\\Controller\\BudgetController::print'], ['id', 'psswrd'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        285 => [[['_route' => 'budget_approbe', '_controller' => 'App\\Controller\\BudgetController::approbe'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'budget_reject', '_controller' => 'App\\Controller\\BudgetController::reject'], ['id'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'budget_invoice', '_controller' => 'App\\Controller\\BudgetController::budget_to_invoice'], ['id'], ['GET' => 0], null, false, true, null]],
        373 => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], ['idempresa'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], ['idempresa'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        445 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['client', 'idempresa'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        510 => [[['_route' => 'enterprise_show', '_controller' => 'App\\Controller\\EnterpriseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'enterprise_edit', '_controller' => 'App\\Controller\\EnterpriseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        546 => [[['_route' => 'enterprise_listinvoices', '_controller' => 'App\\Controller\\EnterpriseController::invoices'], ['idempresa'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        555 => [[['_route' => 'enterprise_delete', '_controller' => 'App\\Controller\\EnterpriseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        591 => [[['_route' => 'invoice_index', '_controller' => 'App\\Controller\\InvoiceController::index'], ['idclient'], ['GET' => 0], null, false, true, null]],
        618 => [[['_route' => 'invoice_new', '_controller' => 'App\\Controller\\InvoiceController::new'], ['idclient'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        639 => [[['_route' => 'invoice_show', '_controller' => 'App\\Controller\\InvoiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        663 => [[['_route' => 'invoice_edit', '_controller' => 'App\\Controller\\InvoiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        671 => [[['_route' => 'invoice_delete', '_controller' => 'App\\Controller\\InvoiceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        720 => [[['_route' => 'invoice_search', 'txtbusca' => '', '_controller' => 'App\\Controller\\InvoiceController::search'], ['identerprise', 'txtbusca'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        745 => [[['_route' => 'invoice_print', '_controller' => 'App\\Controller\\InvoiceController::print'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        762 => [[['_route' => 'invoice_duplicate', '_controller' => 'App\\Controller\\InvoiceController::duplicate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        792 => [[['_route' => 'network_index', '_controller' => 'App\\Controller\\NetworkController::index'], ['identerprise'], ['GET' => 0], null, false, true, null]],
        812 => [[['_route' => 'network_new', '_controller' => 'App\\Controller\\NetworkController::new'], ['identerprise'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        831 => [[['_route' => 'network_show', '_controller' => 'App\\Controller\\NetworkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        844 => [[['_route' => 'network_edit', '_controller' => 'App\\Controller\\NetworkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        852 => [[['_route' => 'network_delete', '_controller' => 'App\\Controller\\NetworkController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        893 => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], ['idempresa'], ['GET' => 0], null, false, true, null]],
        924 => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], ['idempresa'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        943 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        956 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        964 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        980 => [[['_route' => 'product_line_index', '_controller' => 'App\\Controller\\ProductLineController::index'], [], ['GET' => 0], null, true, false, null]],
        1000 => [[['_route' => 'product_line_show', '_controller' => 'App\\Controller\\ProductLineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1014 => [[['_route' => 'product_line_edit', '_controller' => 'App\\Controller\\ProductLineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1023 => [[['_route' => 'product_line_delete', '_controller' => 'App\\Controller\\ProductLineController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1065 => [[['_route' => 'social_network_index', '_controller' => 'App\\Controller\\SocialNetworkController::index'], ['idsocialnetwork'], ['GET' => 0], null, false, true, null]],
        1086 => [[['_route' => 'social_network_new', '_controller' => 'App\\Controller\\SocialNetworkController::new'], ['identerprise'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1106 => [[['_route' => 'social_network_show', '_controller' => 'App\\Controller\\SocialNetworkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1120 => [[['_route' => 'social_network_edit', '_controller' => 'App\\Controller\\SocialNetworkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1129 => [[['_route' => 'social_network_delete', '_controller' => 'App\\Controller\\SocialNetworkController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1161 => [[['_route' => 'supervisor_index', '_controller' => 'App\\Controller\\SupervisorController::index'], ['identerprise'], ['GET' => 0], null, false, true, null]],
        1182 => [[['_route' => 'supervisor_new', '_controller' => 'App\\Controller\\SupervisorController::new'], ['identerprise'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1202 => [[['_route' => 'supervisor_show', '_controller' => 'App\\Controller\\SupervisorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1216 => [[['_route' => 'supervisor_edit', '_controller' => 'App\\Controller\\SupervisorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1225 => [
            [['_route' => 'supervisor_delete', '_controller' => 'App\\Controller\\SupervisorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
