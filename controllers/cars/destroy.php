<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

//$currentUserId = 1;

$car = $db->query('select * from cars where id = :id', [
    'id' => $_REQUEST['id']
])->findOrFail();

//authorize($car['user_id'] === $currentUserId);

$db->query('delete from cars where id = :id', [
    'id' => $_REQUEST['id']
]);

header('location: /cars');
exit();