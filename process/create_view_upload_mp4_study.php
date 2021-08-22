<?php require_once('../partial/header.php'); ?>

 <!-- ==========| LINK CSS STYLE |========== -->
<link rel="stylesheet" href="assets/css/style.css">
    <div class="container p-4">
        <form action="create_model_mp4_study.php" method="POST" enctype="multipart/form-data">

            <!-- ==========| INPUT VIDEO TITLE |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Video Title" name="mp4_title">
            </div>

            <!-- ==========| INPUT VIDEO DESCRIPTION |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Video Description" name="mp4_des">
            </div>
            <hr>

            <!-- ==========| SELECT IMAGE |========== -->
            <div class="box-mp4">
                <input type="file" class="form-control" name="mp4_upload">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="POST">POST</button>
            </div>
        </form>
        <h6 class="text-center">OR</h6>
        <div class="form-group">
            <a href="../index.php" class="btn btn-warning btn-block">CANCEL</a>
        </div>
    </div>

<?php require_once('../partial/footer.php'); ?>