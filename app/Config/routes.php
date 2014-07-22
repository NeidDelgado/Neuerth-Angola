<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
        Router::connect('/inicio', array('controller' => 'pages', 'action' =>'display', 'inicio'));
	Router::connect('/quemsomos', array('controller' => 'pages', 'action' =>'display', 'quemsomos'));
        Router::connect('/linha_reciclagem', array('controller' => 'pages', 'action' =>'display', 'linha_reciclagem'));
	Router::connect('/reciclagem_plastico', array('controller' => 'pages', 'action' =>'display', 'reciclagem_plastico'));
        Router::connect('/reciclagem_baterias', array('controller' => 'pages', 'action' =>'display', 'reciclagem_baterias'));
        Router::connect('/reciclagem_aluminio', array('controller' => 'pages', 'action' =>'display', 'reciclagem_aluminio'));
        Router::connect('/enchimento_oxigenio', array('controller' => 'pages', 'action' =>'display', 'enchimento_oxigenio'));
        Router::connect('/social', array('controller' => 'pages', 'action' =>'display', 'social'));
        Router::connect('/qualidade', array('controller' => 'pages', 'action' =>'display', 'qualidade'));
	Router::connect('/localizacao', array('controller' => 'pages', 'action' =>'display', 'localizacao'));
	Router::connect('/contactos', array('controller' => 'pages', 'action' =>'display', 'contactos'));
        
        Router::connect('/enterprise', array('controller' => 'pages', 'action' =>'display', 'enterprise'));
        Router::connect('/recycling_lines', array('controller' => 'pages', 'action' =>'display', 'recycling_lines'));
	Router::connect('/plastic_recycling', array('controller' => 'pages', 'action' =>'display', 'plastic_recycling'));
        Router::connect('/battery_recycling', array('controller' => 'pages', 'action' =>'display', 'battery_recycling'));
        Router::connect('/aluminum_recycling', array('controller' => 'pages', 'action' =>'display', 'aluminum_recycling'));
        Router::connect('/oxygen_line', array('controller' => 'pages', 'action' =>'display', 'oxygen_line'));
        Router::connect('/responsibility', array('controller' => 'pages', 'action' =>'display', 'responsibility'));
        Router::connect('/quality', array('controller' => 'pages', 'action' =>'display', 'quality'));
	Router::connect('/location', array('controller' => 'pages', 'action' =>'display', 'location'));
        Router::connect('/start', array('controller' => 'pages', 'action' =>'display', 'start'));
        
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
