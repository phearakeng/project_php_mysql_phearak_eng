<?php 
    require_once('../partial/header.php'); 
?>

<link rel="stylesheet" href="../assets/css/style.css">
    <div class="container p-4">
        <form action="create_model_news.php" method="POST" enctype="multipart/form-data">

            <!-- ==========| INPUT TITLE |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Post Title" name="post_title">
            </div>

            <!-- ==========| INPUT DESCRIPTION |========== -->
            <div class="form-group">
                <textarea type="text" class="form-control" placeholder="Post Description" name="post_description"></textarea>
            </div>

            <!-- ==========| SELECT CATEGORIES |========== -->
            <select class="form-select p-1" name="category" style="font-family: 'Battambang', cursive;" aria-label="Default select example">
                <option selected value="1">News (ព័ត៍មាន)</option>
                <option value="2">Song (កំសាន្ត)</option>
                <option value="3">Study (ចំណេះដឹង)</option>
            </select>
            <!-- ==========| SELECT CATEGORIES |========== -->
            <select class="form-select p-1" name="users" style="font-family: 'Battambang', cursive;" aria-label="Default select example">
                <option selected value="1">User Admin</option>
                <option value="2">User</option>
            </select>
            <hr>

            <!-- ==========| SELECT IMAGE |========== -->
            <div class="box-img">
                <input type="file" class="form-control" name="post_img">
                <!-- <div class="del-img-box"></div>
                <div class="loading"></div> -->
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="post">POST</button>
            </div>
        </form>
        <h6 class="text-center">OR</h6>
        <div class="form-group">
            <a href="../index.php" class="btn btn-warning btn-block">CANCEL</a>
        </div>
    </div>

<?php require_once('../partial/footer.php'); ?>