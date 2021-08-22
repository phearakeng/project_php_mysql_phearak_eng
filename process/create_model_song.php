<?php
    require_once('../inc/function.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isCreated = createNewSong($_POST);
        if ($isCreated) {
            header('Location:../index.php?page=song');
        }
    }
