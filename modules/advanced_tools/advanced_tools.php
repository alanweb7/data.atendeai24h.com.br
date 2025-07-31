<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Advanced Tools
Module URI: www.alan.tec.br/cliente_webhook
Description: Módulo de recursos avançados,
Version: 2.0.4
Author: Alan Silva
Author URI: www.alan.tec.br
*/

define('ADVANCED_TOOLS_MODULE_NAME', 'advanced_tools');

hooks()->add_action('admin_init', 'advanced_tools_init_menu');

function advanced_tools_init_menu()
{
    $CI = &get_instance();


    // Importar Contatos do Celular

    get_instance()->app_menu->add_sidebar_menu_item('adv_tools_import_contacs', [
        'slug'     => 'adv_tools_import_contacs',
        'name'     => _l('Importar Contatos'),
        'icon'     => 'fa-brands fa-app-store',
        'position' => 31,
    ]);
    get_instance()->app_menu->add_sidebar_children_item('adv_tools_import_contacs', [
        'slug'     => 'advanced_tools_import_list',
        'name'     => _l('Importar do Celular'),
        'href'     => admin_url('settings?group=main_advanced_tools'),
        'position' => 1,
    ]);


    // configurações
    get_instance()->app_tabs->add_settings_tab('main_advanced_tools', [
        'name'     => _l('Advanced Tools'),
        'view'     => 'advanced_tools/advanced_tools_settings',
        'icon'     => 'fab fa-app-store',
        'position' => 5,
    ]);
    get_instance()->app_menu->add_sidebar_menu_item('advanced_tools', [
        'slug'     => 'advanced_tools',
        'name'     => _l('Advanced Tools'),
        'icon'     => 'fa-brands fa-app-store',
        'href'     => admin_url('advanced_tools/v1/advanced_tools/view'),
        'position' => 31,
    ]);

    get_instance()->app_menu->add_sidebar_children_item('advanced_tools', [
        'slug'     => 'advanced_tools',
        'name'     => _l('Configurações'),
        'href'     => admin_url('settings?group=main_advanced_tools'),
        'position' => 31,
    ]);
}

hooks()->add_action('admin_init', 'advanced_tools_permissions');

function advanced_tools_permissions()
{
    $capabilities = [];

    $capabilities['capabilities'] = [
        'view'   => _l('permission_view'),
        'create' => _l('permission_create'),
        'edit'   => _l('permission_edit'),
        'delete' => _l('permission_delete'),
    ];

    register_staff_capabilities('advanced_tools', $capabilities, _l('advanced_tools'));
}
