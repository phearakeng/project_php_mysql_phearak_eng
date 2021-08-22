<!-- ==========| INCLUD TO HEADER |========== -->
<?php require_once('../partial/header.php'); ?>

<!-- ==========| LINK STYLE CSS |========== -->
<link rel="stylesheet" href="../assets/css/style.css">
    <div class="container p-4">
        <form action="create_model_subject.php" method="POST">

            <!-- ==========| INPUT SUBJECT TITLE |========== -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject Title" name="sub_title">
            </div>

            <!-- ==========| SELECT TEACHERS |========== -->
            <select class="form-select p-1" name="teachers" style="font-family: 'Battambang', cursive;" aria-label="Default select example">
                <option selected value="1">Rady</option>
                <option value="2">Sokhom</option>
                <option value="3">So-Pheak</option>
                <option value="4">Tang-Hout</option>
                <option value="5">Jona-Than</option>
                <option value="6">E-dour</option>
                <option value="7">Sa-Vern</option>
                <option value="8">Sey-Ha</option>
                <option value="9">Him</option>
                <option value="10">So-Vanda</option>
                <option value="11">Clement</option>
                <option value="12">Ronan</option>
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