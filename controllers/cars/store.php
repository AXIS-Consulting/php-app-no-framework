<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::string($_REQUEST['year'], 4, 4)) {
    $errors['year'] = '4 characters is required.';
}

if (! Validator::string($_REQUEST['make'], 1, 250)) {
    $errors['make'] = 'A Make of no more than 250 characters is required.';
}

if (! Validator::string($_REQUEST['model'], 1, 250)) {
    $errors['model'] = 'A Model of no more than 250 characters is required.';
}
if (! empty($errors)) {
    return view("cars/create.view.php", [
        'heading' => 'Add Car',
        'errors' => $errors
    ]);
}

try {
    $db->query('INSERT INTO cars(year, make, model, user_id) VALUES(:year, :make, :model, :user_id)', [
        'year' => $_REQUEST['year'],
        'make' => $_REQUEST['make'],
        'model' => $_REQUEST['model'],
        'user_id' => 1
    ]);
} catch (\PDOException $e ) {
    die('There has been an error.<br><br>' . $e->getMessage());
}

header('location: /cars');
die();