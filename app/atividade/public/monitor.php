<?php

    header("Access-Control-Allow-Origin: *");

    require __DIR__ . '/../vendor/autoload.php';

    use app\controllers\StudentController;

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $obj = new StudentController();

    $data = $obj->monitor();

    print_r($data);