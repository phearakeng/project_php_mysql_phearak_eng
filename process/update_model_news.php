<?php
    require_once ('../inc/function.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isUpdated = updatePostNews($_POST);
        if ($isUpdated) {
            header('Location:../index.php?page=news');
        }
    }