<!-- ==========| REQUIRE FROM PARTIAL HEADER & FOOTER |========== -->
<?php 
    require_once('partial/header.php'); 
    include_once('inc/function.php');

    // GET LINK OF SONG //
    $getAllSongs = getDataOfSong();

    // GET MP4 UPLOAD OF OLD SONG //
    $getAll_dataOf_Old_Song = getAll_mp4_OldSong();

    // GET FUNCTION OF WEDDING SONG //
    $getAll_WeddingSong = getAll_mp4_wedSong();
?>

<!-- =========| LINK OF STYLE CSS |========== -->
<link rel="stylesheet" href="assets/css/style_banner.css">

<!-- ==========| BANNER IMAGE |========== -->
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <!-- <h3 style="font-family: 'Moul', cursive; color: yellow;">សូមស្វាគនម៍អស់លោកអ្នកដែលបានចូលមកកាន់ទីនេះ</h3> -->
                    <h2 style="font-family: 'Rampart One', cursive; color: white;">WELCOME</h2>
                    <hr>
                    <h3 style="font-family: 'Moul', cursive; color: #03fc17;">To ខ្មែរកំសាន្ត Daily Song</h3>
					<hr>
					<button class="btn btn-outline-warning" style="font-family: 'Battambang', cursive;"><a href="?page=aboutMe">About Me</a> </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========| NAVBAR SONGS |========== -->
<div class="container">
    <div class="card text-center">
        <div class="card-header​">
            <ul class="nav nav-tabs bg-dark " style="font-family: 'Battambang', cursive;">
                <li class="nav-item ">
                    <a class="nav-link text-light" aria-current="true" href="">ចម្រៀងបុរាណ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">ចម្រៀងសម័យ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">ចម្រៀងភ្លេងការ</a>
                </li>
            </ul>
        </div>

        <!-- ==========| UPLOAD SONG បុរាណ |========== -->
        <div class="card-body d-flex justify-content-between">
            <h5 class="card-title​ bg-dark p-2 text-light" style="font-family: 'Battambang', cursive;">ចម្រៀងសម័យ</h5>
            <div class="upload">
                <a href="process/create_view_song.php" class="btn btn-outline-dark" style="font-family: 'Battambang', cursive;">+ បញ្ចូលចម្រៀងបុរាណ</a>
            </div>
        </div>

        <!-- ==========| CARD SONG |========== -->
        <div class="card-group p-3">
            <?php foreach($getAllSongs as $song): ?>
                <div class="card">
                    <img src="<?=$song['singer_img']?>" class="card-img-top" alt="...">
                    <div class="card-body bg-dark text-light">
                        <h5 class="card-title" style="font-family: 'Battambang', cursive;">​<?=$song['song_title']?></h5>
                        <h6 style="font-family: 'Battambang', cursive;">​Singer: 「 <?=$song['sin_name']?> 」</h6>
                        <p class="card-text"><small class="text-warning" style="font-family: 'Battambang', cursive;"><?=$song['song_posted']?>mins ago</small></p><br>
                        <a href="<?=$song['song_url']?>" class="btn btn-outline-success btn-sm mr-2"><i class="fa fa-eye"></i> Watch</a>
                        <a href="process/update_view_song.php?id=<?=$song['song_id']?>" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="process/remove_model_song.php?id=<?=$song['song_id']?>" class="btn btn-outline-danger btn-sm mr-2"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- ==========| UPLOAD SONG បុរាណ |========== -->
<div class="card-body d-flex justify-content-between bg-dark">
    <h5 class="card-title​ bg-dark p-2 text-light" style="font-family: 'Battambang', cursive;">ចម្រៀងបុរាណ</h5>
    <div class="upload">
        <a href="process/create_view_old_song.php" class="btn btn-outline-light" style="font-family: 'Battambang', cursive;">+ បញ្ចូលចម្រៀងបុរាណ</a>
    </div>
</div>
<link rel="stylesheet" href="assets/css/style_banner.css">
<div class="products">
    <div class="latest-products">
        <div class="container">
            <div class="row">
                
            <!-- ==========| LOOP FOR VIDEO UPLOAD |========== -->
            <?php foreach($getAll_dataOf_Old_Song as $oldsong): ?>
                <div class="col-md-4">
                    <div class="product-item">
                        <video width="350" height="240" controls>
                            <source src="mp4_OldSong/<?=$oldsong['mp4_oldSong_file']?>" type="video/mp4">
                        </video>
                        <div class="down-content">
                            <strong style="font-family: 'Battambang', cursive;"><strong>បទ: </strong> <?=$oldsong['mp4_oldSong_title']?></strong>
                            <p class="text-dark" style="font-family: 'Battambang', cursive;"><strong>បកស្រាយដោយ: </strong> <?=$oldsong['old_sin_name']?></p>
                            <small style="font-family: 'Battambang', cursive;"><?=$oldsong['old_song_posted']?></small>
                            <hr>
                            <small>
                                <button class="btns" data-toggle="modal" data-target="#myModal"><i class="fa fa-commenting">Comment</i></button>
                                <a href=""><button class="btns"><i class="fa fa-cube">Subcribe</i></button></a>
                                <button class="btns"><i class="fa fa-thumbs-up">Like</i></button>
                            </small>
                            <style>
                                .btns {
                                    background-color: #d9aa11;
                                    border: none;
                                    color: white;
                                    padding: 10px 14px;
                                    font-size: 16px;
                                    cursor: pointer;
                                }

                                /* Darker background on mouse-over */
                                .btns:hover {
                                    background-color: RoyalBlue;
                                    border-radius: 15px;
                                }
                            </style>
                        </div>
                    <!-- START OF MODAL -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header bg-primary" style="font-family: 'Battambang', cursive;"​>
                                    <h4 class="modal-title text-light"​>Comment</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body bg-danger">
                                    <div class="mb-3 row">
                                        <div class="col-sm-12">
                                            <textarea type="text" class="form-control" id="inputPassword"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer bg-primary">
                                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF MODAL -->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- ==========| UPLOAD WEDDING SONG |========== -->
<div class="card-body d-flex justify-content-between bg-dark">
    <h5 class="card-title​ bg-dark p-2 text-light" style="font-family: 'Battambang', cursive;">ចម្រៀងភ្លេងការ</h5>
    <div class="upload">
        <a href="process/create_view_wedding_song.php" class="btn btn-outline-light" style="font-family: 'Battambang', cursive;">+ បញ្ចូលចម្រៀងភ្លេងការ</a>
    </div>
</div>
<link rel="stylesheet" href="assets/css/style_banner.css">
<div class="products">
    <div class="latest-products">
        <div class="container">
            <div class="row">
                
            <!-- ==========| LOOP FOR VIDEO UPLOAD |========== -->
            <?php foreach($getAll_WeddingSong as $weddingsong): ?>
                <div class="col-md-4">
                    <div class="product-item">
                        <video width="350" height="240" controls>
                            <source src="mp4_wedding_song/<?=$weddingsong['wed_song_file']?>" type="video/mp4">
                        </video>
                        <div class="down-content">
                            <strong style="font-family: 'Battambang', cursive;"><strong>បទ: </strong><?=$weddingsong['wed_song_title']?> </strong>
                            <p class="text-dark" style="font-family: 'Battambang', cursive;"><strong>បកស្រាយដោយ: </strong> <?=$weddingsong['wed_sin_name']?></p>
                            <small style="font-family: 'Battambang', cursive;"><?=$weddingsong['wed_song_posted']?></small>
                            <hr>
                            <small>
                                <button class="btns" data-toggle="modal" data-target="#myModal"><i class="fa fa-commenting">Comment</i></button>
                                <a href=""><button class="btns"><i class="fa fa-cube">Subcribe</i></button></a>
                                <button class="btns"><i class="fa fa-thumbs-up">Like</i></button>
                            </small>
                            <style>
                                .btns {
                                    background-color: #d9aa11;
                                    border: none;
                                    color: white;
                                    padding: 10px 14px;
                                    font-size: 16px;
                                    cursor: pointer;
                                }

                                /* Darker background on mouse-over */
                                .btns:hover {
                                    background-color: RoyalBlue;
                                    border-radius: 15px;
                                }
                            </style>
                        </div>
                    <!-- START OF MODAL -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header bg-primary" style="font-family: 'Battambang', cursive;"​>
                                    <h4 class="modal-title text-light"​>Comment</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body bg-danger">
                                    <div class="mb-3 row">
                                        <div class="col-sm-12">
                                            <textarea type="text" class="form-control" id="inputPassword"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer bg-primary">
                                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF MODAL -->
                </div>
            </div>
            <?php endforeach; ?>
            <!-- ==========| PAGINATION |========== -->
            <div class="col-md-12 ">
                <ul class="pages">
                    <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ==========| FOOTER |========== -->
<link rel="stylesheet" href="assets/css/style_footer.css">
	<footer class="footer-distributed">
        <div class="footer-left">
            <!-- <h3>ខ្មែរ<span>កំសាន្ត</span></h3> -->
                <img src="assets/images/logo.png" class="img-fluid" alt="..." width="200" height="150">
                <p class="footer-links" style="font-family: 'Battambang', cursive;">
                    ·
                    <a href="?page=home">ទំព័រដើម</a>
                    ·
                    <a href="?page=news">ព័ត៍មាន</a>
                    ·
                    <a href="?page=song">កំសាន្ត</a>
                    ·
                    <a href="?page=study">ចំណេះដឹង</a>
                    ·
                    <a href="?page=aboutMe">អំពីខ្មុំ</a>
                    ·
                    <a href="?page=users">អ្នកប្រើប្រាស់</a>
                </p>
                    <p class="footer-company-name" style="font-family: 'Battambang', cursive;">SUN SOPHEARAK &copy; 2021</p>
                </div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p style="font-family: 'Battambang', cursive;"><span>Street: 371, San Kat Tek Laork, Khan Tul Kouk</span>Phnom Penh, Cambodia</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p style="font-family: 'Battambang', cursive;">+855 966-804-347</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p style="font-family: 'Battambang', cursive;"><a href="mailto:support@company.com">phearak.eng@student.passerellesnumeriques.org</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about" style="font-family: 'Battambang', cursive;">
					<span style="font-family: 'Battambang', cursive;">About Me</span>
					I am a tudent at Passerellesnumeriques Cambodia (PNC) &amp; WEB-DEVILOPER.
				</p>
			<div class="footer-icons">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                <a href="https://kh.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com"><i class="fa fa-github"></i></a>
			</div>
		</div>
	</footer>
<?php require_once('partial/footer.php'); ?>