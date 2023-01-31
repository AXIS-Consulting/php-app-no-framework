<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');

$router->get('/cars', 'controllers/cars/index.php');
$router->get('/cars/create', 'controllers/cars/create.php');
$router->post('/cars', 'controllers/cars/store.php');
$router->get('/car', 'controllers/cars/show.php');
$router->get('/cars/edit', 'controllers/cars/edit.php');
$router->put('/cars/update', 'controllers/cars/update.php');
$router->delete('/car', 'controllers/cars/destroy.php');