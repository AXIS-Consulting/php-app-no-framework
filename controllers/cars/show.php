<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

//$currentUserId = 1;

$car = $db->query('select * from cars where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

//authorize($car['user_id'] === $currentUserId);

view("cars/show.view.php", [
    'heading' => 'Car',
    'car' => $car
]);