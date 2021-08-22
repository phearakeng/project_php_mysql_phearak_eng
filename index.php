<?php
    // ==========| INCLUDE HEADER |========== //
    include_once('partial/header.php');
    // ==========| INCLUDE NAVBAR |========== //
    include_once('partial/navbar.php');

    if(isset($_GET['page'])){
        if ($_GET['page'] == 'home') {
            include_once('pages/home.php');

        }elseif($_GET['page'] == 'news') {
            include_once('pages/news.php');
            
        }
        elseif($_GET['page'] == 'song') {
            include_once('pages/song.php');
            
        }
        elseif($_GET['page'] == 'study') {
            include_once('pages/study.php');
            
        }
        elseif($_GET['page'] == 'aboutMe') {
            include_once('pages/aboutMe.php');
            
        }else {
            include_once('pages/users.php');
        }

    }else{
        include_once('pages/home.php');
    }

    // ==========| INCLUDE FOOTER |========== //
    include_once('partial/footer.php');