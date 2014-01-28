<?php

require('secrets.php');

return array(
    'name' => 'Phundament / Giic / GTC / Hybrid template / Wrest Demo',
    'params' => array(
        'env' => 'development'
    ),
    'aliases' => array(
        'ext.wrest' => 'vendor.weavora.wrest',
        'ext.wrest.WRestController' => 'vendor.weavora.wrest.WRestController',
        'ext.wrest.WHttpRequest' => 'vendor.weavora.wrest.WHttpRequest',
        'ext.wrest.WRestResponse' => 'vendor.weavora.wrest.WRestResponse',
        'ext.wrest.JsonResponse' => 'vendor.weavora.wrest.JsonResponse',
    ),
    'import' => array(
        'vendor.weavora.wrest.*',
        'vendor.weavora.wrest.actions.*',
        'vendor.weavora.wrest.behaviors.*',
        'application.exceptions.*',
    ),
    'components' => array(
        // MySQL
        'db' => array(
            'tablePrefix' => '',
            'connectionString' => 'mysql:host=localhost;dbname=gtc_demo',
            'emulatePrepare' => true,
            'username' => 'gtcdemo',
            'password' => DB_PASSWORD,
            'charset' => 'utf8',
        ),
        'themeManager' => array(
            'rules' => array(
                '^program/admin' => 'backend2',
                '^program/update' => 'backend2',
                '^program/create' => 'backend2',
            )
        ),
        'urlManager' => array(
            'rules' => array(
                //rest url patterns
                array('api/<model>/delete', 'pattern' => 'api/<model:\w+>/<_id:\d+>', 'verb' => 'DELETE'),
                array('api/<model>/update', 'pattern' => 'api/<model:\w+>/<_id:\d+>', 'verb' => 'PUT'),
                array('api/<model>/list', 'pattern' => 'api/<model:\w+>', 'verb' => 'GET'),
                array('api/<model>/get', 'pattern' => 'api/<model:\w+>/<_id:\d+>', 'verb' => 'GET'),
                array('api/<model>/create', 'pattern' => 'api/<model:\w+>', 'verb' => 'POST'),
            ),
        ),
    ),


);