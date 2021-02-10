<?php 
require('../src/inc/functions.php');
include('../src/inc/pdo.php');
$errors = array();
$success = false;

$data = array(
    'errors' => $errors,
    'success' => $success
);

showJson($data);