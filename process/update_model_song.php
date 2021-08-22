<?php
    require_once ('../inc/function.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isUpdated = updatePostSong($_POST);
        if ($isUpdated) {
            header('Location:../index.php?page=song');
        }
    }