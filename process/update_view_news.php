<?php 
    require_once('../partial/header.php'); 
    require_once('../inc/function.php');
    $id = $_GET['id'];
    $updateNews = selectOnlyOnePostNews($id);
?>

<link rel="stylesheet" href="../assets/css/style.css">
    <div class="container p-4">
        <?php foreach($updateNews as $news): ?>
            <form action="update_model_news.php" method="POST">
                <input type="hidden" name="id" value="<?=$news['post_id']?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ENTER TITLE" name="post_title" value="<?=$news['post_title']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ENTER DESCRPTION" name="post_description" value="<?=$news['post_description']?>">
                </div>
                <div class="box-img">
                    <input type="file" class="form-control" placeholder="ENTER LINK" name="post_img" value="<?=$news['post_img']?>">
                    <!-- <div class="del-img-box"></div>
                    <div class="loading"></div> -->
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" >POST</button>
                </div>
            </form>
            <h6 class="text-center">OR</h6>
            <div class="form-group">
                <a href="home.php" class="btn btn-warning btn-block">CANCEL</a>
            </div>
            <?php endforeach; ?>
    </div>
<?php require_once('../partial/footer.php'); ?>