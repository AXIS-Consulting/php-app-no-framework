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
    $errors['make'] = 'A make of no more than 250 characters is required.';
}

if (! Validator::string($_REQUEST['model'], 1, 250)) {
    $errors['model'] = 'A Model of no more than 250 characters id required.';
}

if (! empty($errors)) {
    return view("cars/edit.view.php", [
        'heading' => 'Edit Car',
        'errors' => $errors
    ]);
}

try {
    $db->query('UPDATE cars SET `year`=:year, `make`=:make, `model`=:model WHERE `id`=:id', [
        'year' => $_REQUEST['year'],
        'make' => $_REQUEST['make'],
        'model' => $_REQUEST['model'],
        'id' => $_REQUEST['id']
    ]);
} catch (\PDOException $e ) {
    die('There has been an error.<br><br>' . $e->getMessage());
}

header('location: /cars');
die();