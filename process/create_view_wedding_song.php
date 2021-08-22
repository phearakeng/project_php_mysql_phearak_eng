<?php require_once('../partial/header.php'); ?>

<link rel="stylesheet" href="../assets/css/style.css">
    <div class="container p-4">
        <form action="create_model_wedding_song.php" method="POST" enctype="multipart/form-data">

            <!-- ==========| INPUT SONG TITLE |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Song Title" name="wed_song_title">
            </div>

            <!-- ==========| INPUT SONG URL |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Descrition" name="wed_song_des">
            </div>

            <!-- ==========| INPUT SINGER IMAGE |========== -->
            <div class="form-group">
                <input type="file" class="form-control"  name="wed_song_file">
            </div>

            <!-- ==========| SELECT SINGER |========== -->
            <select class="form-select p-1" name="wed_sin_id" style="font-family: 'Battambang', cursive;" aria-label="Default select example">
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
                <option value="11">ចឺម</option>
                <option value="12">គី សាវីន</option>
                <option value="13">កញ្ញា ធីតា</option>
                <option value="14">សាត់ ដានី</option>
                <option value="15">ចាន់ សម័យ</option>
                <option value="16">អ៊ូ រស្មី</option>
                <option value="17">វ៉ាន់ សុភ័ក្រ្ត</option>
                <option value="18">ស៊ុន ស្រីពេជ្រ</option>
                <option value="19">ចែម ស្រីលក្ខ</option>
                <option value="20">ផុន ផានិត</option>

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