<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('redirected', 'Home::redirected');
$routes->get('api/vid_data', 'ApiController::vid_data');
$routes->get('api/ppt_data', 'ApiController::ppt_data');
$routes->get('api/note_data', 'ApiController::note_data');
$routes->get('api/quiz_data', 'ApiController::quiz_data');
$routes->get('api/editor', 'ApiController::editor');