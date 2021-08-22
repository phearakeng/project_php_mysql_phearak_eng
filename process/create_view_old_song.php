<?php require_once('../partial/header.php'); ?>

<link rel="stylesheet" href="../assets/css/style.css">
    <div class="container p-4">
        <form action="create_model_old_song.php" method="POST" enctype="multipart/form-data">

            <!-- ==========| INPUT SONG TITLE |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Song Title" name="mp4_oldSong_title">
            </div>

            <!-- ==========| INPUT SONG URL |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Descrition" name="mp4_oldSong_des">
            </div>

            <!-- ==========| INPUT SINGER IMAGE |========== -->
            <div class="form-group">
                <input type="file" class="form-control"  name="mp4_oldSong_file">
            </div>

            <!-- ==========| SELECT SINGER |========== -->
            <select class="form-select p-1" name="old_sin_id" style="font-family: 'Battambang', cursive;" aria-label="Default select example">
                <option selected value="1">ស៊ីន ស៊ីសាមុត</option>
                <option value="2">ប៉ែន រ៉ន</option>
                <option value="3">ណយ វាន់ណេត</option>
                <option value="4">ឈឺន​ ឧត្ដម</option>
                <option value="5">មាស សាម៉ន</option>
                <option value="6">ម៉េង កែវពេជ្យចន្ដា</option>
                <option value="7">រស់ សេរីសុន្ធា</option>
                <option value="8">ហឹម ស៊ីវន</option>
                <option value="9">ខាត់​ សុឃីម</option>
                <option value="10">ឯក ស៊ីដេ</option>
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
    </div>

<?php require_once('../partial/footer.php'); ?>