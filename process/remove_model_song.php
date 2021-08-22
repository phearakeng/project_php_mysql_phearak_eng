<?php
    require_once('../inc/function.php');
    $id = $_GET['id'];
    $isremovePosted = removePostSong($id);

    if ($isremovePosted){
        header('location:../index.php?page=song');
    }