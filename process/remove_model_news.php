<?php
    require_once('../inc/function.php');
    $id = $_GET['id'];
    $isremovePosted = removePostNews($id);

    if ($isremovePosted){
        header('location:../index.php?page=news');
    }