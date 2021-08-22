<?php
    require_once('../inc/function.php');

    // print_r($_POST);
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isCreated = createNewUser($_POST);
        if ($isCreated) {
            header('Location:../index.php?page=home');
        }
    }
