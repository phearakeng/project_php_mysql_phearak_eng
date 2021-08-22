<?php

    // =========={INCLUD FROM DATABASE}========== //
    include_once('database.php');

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>| FUNCTION NEWS |<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
    // ============| GET ALL NEWS FROM DB |============ //
    function getDataOfNews() {
        return database()->query("SELECT * FROM post ORDER BY post_id ASC");
    }

    // =========| CREATE IMAGE & UPLOAD INTO DB NEWS |======== //
    function createNewsPost($value) {
        $post_title = $value['post_title'];
        $post_description = $value['post_description'];
        $select_category = $value['category'];
        $select_user = $value['users'];

        $img_Name = $_FILES['post_img']['name'];
        $img_Size = $_FILES['post_img']['size'];
        $img_Type = $_FILES['post_img']['type'];
        $tmp_name = $_FILES['post_img']['tmp_name'];

        if ($img_Size > 5000000) {
            header('Location: ../pages/news.php');
            $_SESSION['message'] = "The size of file is large!";
        } else {
            $extension = pathinfo($img_Name, PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);

            $allowExtension = array('jpg', 'jpeg', 'png');
            if(in_array($extensionLocal, $allowExtension)) {
                $newImageName = uniqid('post-', true) . '.' . $extensionLocal;
                $dir = "../img_uploaded/" .$newImageName;
                move_uploaded_file($tmp_name, $dir); 
                return database()->query("INSERT INTO post(post_title, post_description, post_img, user_id, category_id) 
                VALUES ('$post_title', '$post_description', '$newImageName', '$select_user', '$select_category')");

            } else {
                header('Location: ../pages/news.php');
            }
        }
    }

    // =========| FUNCTION SEARCH NEWS |======== //
    function search($value) {
        $keysearch = $value['valueToSearch'];
        return database()->query("SELECT * FROM post WHERE post_title LIKE '%$keysearch%' ORDER BY post_title ASC");
    }


    // =========| FUNCTION SEARCH STUDY |======== //
    function searching($value) {
        $value_search = $value['mp4_search'];
        return database()->query("SELECT * FROM upload_mp4_study WHERE mp4_title LIKE '%$value_search%' ORDER BY mp4_title ASC");
    }


    // =========| FUNCTION DETIAL |======== //
    function getOnePost($id) {
        return database()->query("SELECT * FROM post WHERE post_id = $id");
    }


// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>| FUNCTION SORT BY OF NEWS |<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
    // ============| CREATE AND UPLOAD VIDEO INTO DB |============ //
    function mp4isUploaded($value) {
        $mp4_title = $value['mp4_title'];
        $mp4_des = $value['mp4_des'];
        $directory = "../mp4_uploaded/";

        $mp4_Name = $directory . basename($_FILES["mp4_upload"]["name"]);
        $mp4_Type = strtolower(pathinfo($mp4_Name,PATHINFO_EXTENSION));
        $mp4_Size = getimagesize($_FILES["mp4_upload"]["tmp_name"]);
        move_uploaded_file($_FILES["mp4_upload"]["tmp_name"], $mp4_Name);
        htmlspecialchars( basename( $_FILES["mp4_upload"]["name"]));

        return database()->query("INSERT INTO upload_mp4_study(mp4_title, mp4_des, mp4_upload) 
        VALUES ('$mp4_title', '$mp4_des', '$mp4_Name')");
    }

    // ===========| GET ALL DATA FROM DB |=========== //
    function getAllMP4FromDB() {
        return database()->query("SELECT * FROM upload_mp4_study ORDER BY mp4_id ASC");
    }


    // ============| SELECT ONLY ONE NEWS FOR UPDATE |============ //
    function selectOnlyOnePostNews($id) {
        return database()->query("SELECT * FROM post WHERE post_id = $id");
    }


    // ============| UPDATE INFO OF NEWS POSTED |============= //
    function updatePostNews($value) {
        $id = $value['id'];
        $post_title = $value['post_title'];
        $post_description = $value['post_description'];
        $post_img = $value['post_img'];
        return database()->query("UPDATE post SET post_title = '$post_title', post_description = '$post_description', post_img = '$post_img' WHERE post_id = '$id'");
    }


    // ===================| DELETE FROM DB NEWS |=================== //
    function removePostNews($id) {
        return database()->query("DELETE FROM post WHERE post_id = $id");
    }



// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>| FUNCTION SONG |<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
    // ===========| GET SONG FROM DB |=========== //
    function getDataOfSong() {
        return database()->query("SELECT * FROM song_table
        INNER JOIN singer_table ON song_table.sin_id = singer_table.sin_id
        ORDER BY song_id ASC");
    }

    // ==========| CREATE SONG |========== //
    function createNewSong($value) {
        $song_title = $value['song_title'];
        $song_url = $value['song_url'];
        $singer_img = $value['singer_img'];
        $singer_id = $value['singers'];

        return database()->query("INSERT INTO song_table(song_title, song_url, singer_img, sin_id) 
        VALUES ('$song_title', '$song_url', '$singer_img', '$singer_id')");
    }

    // ==========| UPDATE SONG |========== //
    function updatePostSong($value) {
        $song_id = $value['id'];
        $song_title = $value['song_title'];
        $song_url = $value['song_url'];
        $singer_img = $value['singer_img'];
        return database()->query("UPDATE song_table SET song_title = '$song_title', song_url = '$song_url', singer_img = '$singer_img' WHERE song_id = '$song_id'");
    }

    // ===========| EDIT SONG |=========== //
    function selectOnlyOnePostSong($id) {
        return database()->query("SELECT * FROM song_table WHERE song_id = $id");
    }

    // ===========| DELETE SONG |=========== //
    function removePostSong($id) {
        return database()->query("DELETE FROM song_table WHERE song_id = $id");
    }




// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>| FUNCTION USER |<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
    // =========| FUNCTIOIN USER SIGNUP |========= //
    function createNewUser($value) {
        $userName = $value['user_name'];
        $userPass = $value['user_pass'];
        $userRole = $value['user_role'];
        $userProfile = $value['user_profile'];
        $passEncrypt = password_hash($userPass, PASSWORD_DEFAULT);

        return database()->query("INSERT INTO users_table(user_name, user_pass, user_role, user_profile) 
        VALUES ('$userName', '$passEncrypt', '$userRole', '$userProfile')");
    }

    // =========| FUNCTION USER SIGNIN |========= //
    function userLogin($value) {
        $userName = $value['user_name'];
        $userPass = $value['user_pass'];
        $isCanLogin = false;
        $getUserPassOfLogin = database()->query("SELECT user_name, user_pass FROM users_table WHERE user_name = '$userName'");
        foreach($getUserPassOfLogin as $pass) {
            if(password_verify($userPass, $pass['user_pass'])){
                $isCanLogin = true;
            }
        }
        return $isCanLogin;
    }

    // ===========| GET ALL INFOMATION FROM USER TABLE |=========== //
    function getAllUserFromDB() {
        return database()->query("SELECT * FROM users_table ORDER BY user_id ASC");
    }



// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>| FUNCTION OF SUBJECT INFOMATION |<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //

    // =========| CREATE NEW SUBJECT & INSERT INTO DB |======== //
    function createNewSubject($value) {
        $sub_title = $value['sub_title'];
        $teacher_Name = $value['teachers'];

        return database()->query("INSERT INTO subject_table(sub_title, teac_id) 
        VALUES ('$sub_title', '$teacher_Name')");
    }

    // ===========| GET SUBJECT FROM DB |=========== //
    function getDataOfSubject() {
        return database()->query("SELECT * FROM subject_table
        INNER JOIN teacher_table ON subject_table.teac_id = teacher_table.teac_id
        ORDER BY sub_id ASC");
    }


// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>| FUNCTION OLD SONG |<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
    // ===========| CREATE NEW VIDEO OLD SONG |=========== //
    function old_mp4_Uploaded($value) {
        $mp4_oldSong_title = $value['mp4_oldSong_title'];
        $mp4_oldSong_des = $value['mp4_oldSong_des'];
        $mp4_oldSin_id = $value['old_sin_id'];
        $directory = "../mp4_OldSong/";
        $mp4_Name = $directory . basename($_FILES["mp4_oldSong_file"]["name"]);
        $mp4_Type = strtolower(pathinfo($mp4_Name,PATHINFO_EXTENSION));
        $mp4_Size = getimagesize($_FILES["mp4_oldSong_file"]["tmp_name"]);
        move_uploaded_file($_FILES["mp4_oldSong_file"]["tmp_name"], $mp4_Name);
        htmlspecialchars( basename( $_FILES["mp4_oldSong_file"]["name"]));
        return database()->query("INSERT INTO mp4_old_song(mp4_oldSong_title, mp4_oldSong_des, mp4_oldSong_file, old_sin_id) 
        VALUES ('$mp4_oldSong_title', '$mp4_oldSong_des', '$mp4_Name', '$mp4_oldSin_id')");
    }

    // ===========| CREATE NEW VIDEO OLD SONG |=========== //
    function getAll_mp4_OldSong() {
        return database()->query("SELECT * FROM mp4_old_song
        INNER JOIN old_singer_table ON mp4_old_song.old_sin_id = old_singer_table.old_sin_id
        ORDER BY old_song_id ASC");
    }



// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>| FUNCTION UPLOAD MP4 WEDDING  SONG |<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
    function wed_mp4_Uploaded($value) {
        $wed_song_title = $value['wed_song_title'];
        $wed_song_des = $value['wed_song_des'];
        $wed_sin_id = $value['wed_sin_id'];

        // UPLOAD INTO FOLDER //
        $directory = "../mp4_wedding_song/";

        $mp4_Name = $directory . basename($_FILES["wed_song_file"]["name"]);
        $mp4_Type = strtolower(pathinfo($mp4_Name,PATHINFO_EXTENSION));
        $mp4_Size = getimagesize($_FILES["wed_song_file"]["tmp_name"]);
        move_uploaded_file($_FILES["wed_song_file"]["tmp_name"], $mp4_Name);
        htmlspecialchars( basename( $_FILES["wed_song_file"]["name"]));

        // INSERT INTO DATABASE //
        return database()->query("INSERT INTO mp4_wedding_song(wed_song_title, wed_song_des, wed_song_file, wed_sin_id) 
        VALUES ('$wed_song_title', '$wed_song_des', '$mp4_Name', '$wed_sin_id')");
    }

    // ==========| GET DATA FROM DATABASE |========= \\
    function getAll_mp4_wedSong() {
        return database()->query("SELECT * FROM mp4_wedding_song
        INNER JOIN wedding_singer_table ON mp4_wedding_song.wed_sin_id = wedding_singer_table.wed_sin_id
        ORDER BY wed_song_id ASC");
    }