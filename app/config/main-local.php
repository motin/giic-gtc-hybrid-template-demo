<?php

require('secrets.php');

return array(
    'params' => array(
        'env' => 'development'
    ),
    'import' => array(
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
                '^program/(.*)' => 'backend2',
            )
        ),
    ),


);