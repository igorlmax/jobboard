<?php
// This Rout works just for GET requests
// Here Jobs Controller will be default Controller
	Router::connect('/', array('controller' => 'jobs', 'action' => 'index', 'home'));
	
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
