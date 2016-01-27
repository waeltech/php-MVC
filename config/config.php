<?php

Config::set('site_name','Your Site Name');
Config::set('languages', array('en','fr'));


// Routes. route name => the method prefix
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
));

Config::set('default_route','default'); // setting the default route to default
Config::set('default_language','en');
Config::set('default_controller','pages');
Config::set('default_action','index');

