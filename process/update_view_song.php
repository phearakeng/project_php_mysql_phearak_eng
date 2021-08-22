<?php 
    require_once('../partial/header.php'); 
    require_once('../inc/function.php');
    $id = $_GET['id'];
    $updateSong = selectOnlyOnePostSong($id);
?>


<link rel="stylesheet" href="../assets/css/style.css">
    <div class="container p-4">
        <?php foreach($updateSong as $song): ?>
        <form action="update_model_song.php" method="POST">

            <input type="hidden" name="id" value="<?=$song['song_id']?>">
            <!-- ==========| INPUT SONG TITLE |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Song Title" name="song_title" value="<?=$song['song_title']?>">
            </div>

            <!-- ==========| INPUT SONG URL |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Song URL" name="song_url" value="<?=$song['song_url']?>">
            </div>

            <!-- ==========| INPUT SINGER IMAGE |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Singer URL Image" name="singer_img" value="<?=$song['singer_img']?>">
            </div>

            <!-- ==========| SELECT SINGER |========== -->
            <select class="form-select p-1" name="singers" style="font-family: 'Battambang', cursive;" aria-label="Default select example" value="<?=$song['singers']?>">
                <option selected value="1">ខេមរៈ សេរីមន្ត</option>
                <option value="2">ខេម</option>
                <option value="3">នាយចឺម</option>
                <option value="4">ថេណា</option>
                <option value="5">សុលីផេង</option>
                <option value="6">ចេន</option>
                <option value="7">ឧកសុគន្ធកញ្ញា</option>
                <option value="8">សួសវីសា</option>
                <option value="9">ឆនសុវណ្ណារាជ</option>
            </select>
            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="create">POST</button>
            </div>
        </form>
        <h6 class="text-center">OR</h6>
        <div class="form-group">
            <a href="../index.php" class="btn btn-warning btn-block">CANCEL</a>
        </div>
        <?php endforeach; ?>
    </div>

<?php require_once('../partial/footer.php'); ?>