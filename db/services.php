<?php

defined('MOODLE_INTERNAL') || die();
$functions = array(
    'local_reusecontent_ws_reuse' => array(
        'classname' => 'local_reusecontent_webservice_external',
        'methodname' => 'reuse',
        'classpath' => 'local/reusecontent_ws/externallib.php',
        'description' => 'Allow Reuse Content from this Moodle Server',
        'type' => 'read',
        'ajax' => true,
    ),
);

$services = array(
    'Reuse Content Service' => array(
        'functions' => array(
            'local_reusecontent_ws_reuse'
        ),
        'restrictedusers' => 0,
        'enabled' => 1,
    )
);