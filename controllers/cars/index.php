<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$cars = $db->query('select * from cars')->get();

view("cars/index.view.php", [
    'heading' => 'My Cars',
    'cars' => $cars
]);