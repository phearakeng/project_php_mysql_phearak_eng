<?php 
    // INCLUD FROM HEADER //
    require_once('../partial/header.php');

    // INCLUD FROM FUNCTION DB //
    include_once('../inc/function.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ifLogSuccess = userLogin($_POST);
        if ($ifLogSuccess) {
            echo    '<div 
                        class="alert alert-success p-4"
                        style="font-family: Battambang, cursive;">Login successful
                    </div>';
            header('Location:../index.php?page=home');
        }
        else {
            echo    '<div 
                        class="alert alert-danger p-4"
                        style="font-family: Battambang, cursive;"> Login failed
                    </div>';
        }
    }
    // INCLUD FROM FOOTER //
    require_once('../partial/footer.php');
?>

