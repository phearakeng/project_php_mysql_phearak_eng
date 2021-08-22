<!-- ==========| REQUIRE FROM PARTIAL HEADER & FOOTER |========== -->
<?php 
    require_once('partial/header.php'); 
    include_once('inc/function.php');

    // =====| FUNCTION GET SUBJECT |===== \\
    $getAllSubject = getDataOfSubject();

     // =====| FUNCTION GET MP4 |===== \\
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $getAllDataOfmp4 = searching($_POST);

    }else {
        $getAllDataOfmp4 = getAllMP4FromDB();

    }
   
?>

<!-- ==========| BANNER SPONSER |========== -->
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2 style="font-family: 'Rampart One', cursive; color: white;">WELCOME</h2>
                    <hr>
                    <h3 style="font-family: 'Moul', cursive; color: #03fc17;">To ខ្មែរកំសាន្ត Daily Share Knowledge</h3>
					<hr>
					<button class="btn btn-outline-warning" style="font-family: 'Battambang', cursive;"><a href="?page=aboutMe">About Me</a> </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========| BODY PAGE |========== -->
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php foreach($getAllSubject as $subjec): ?>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="blog-details.html" class="services-item-image"><img src="assets/images/bg-action.webp" class="img-fluid" alt=""></a>
                                <div class="down-content">
                                    <h4><a href="blog-details.html" style="font-family: 'Battambang', cursive;"><?=$subjec['sub_title']?></a></h4>
                                    <p style="margin: 0;"> <?=$subjec['teacher_Name']?> &nbsp;&nbsp;|&nbsp;&nbsp; <?=$subjec['sub_posted']?> &nbsp;&nbsp;|&nbsp;&nbsp; mns a go</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- <img src="assets/images/footer_banner.gif" alt="" width="100%" height="20%"> -->
            </div>
            <div class="col-md-4">
                <!-- ==========| INPUT SEARCH |========= -->
                    <div class="contact-form">
                        <div class="form-group">
                            <h5 style="font-family: 'Battambang', cursive;">Blog Search</h5>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            </div>
                            <div class="col-4">
                                <button class="filled-button" type="button">Go</button>
                            </div>
                        </div>
                    </div>

                    <!-- ==========| CREATE NEW SUBJECT |========= -->
                <div class="contact-form">
                    <div class="form-group">
                        <h5 style="font-family: 'Battambang', cursive;">Create a new subject</h5>
                    </div>
                    <a href="process/create_view_subject.php"><button class="btn btn-warning" type="button">+ Add new</button></a>
                </div>
                <br>
                <div class="form-group">
                    <h5 style="font-family: 'Battambang', cursive;">Our Sponser</h5>
                    <hr>
                    <img src="assets/images/right_banner.gif" alt="">
                </div>
            </div>      
        </div>
    </div>
</div>
<!-- ==========| BANNER IMAGE |========== -->
<link rel="stylesheet" href="assets/css/style_banner.css">
<div class="products">
    <div class="latest-products">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="section-heading bg-dark p-4">
                    <!-- ==========| INPUT SEARCH |========= -->
                    <div class="search-bar">
                        <form class="form-inline mr-3" method="POST" style="font-family: 'Battambang', cursive;">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search video" aria-label="Search" name="mp4_search">
                            <button class="btn btn-info my-2 my-sm-0" type="submit" name="searching"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <a href="process/create_view_upload_mp4_study.php" style="font-family: 'Battambang', cursive;"><button class="btn btn-outline-warning">+​ Upload video (បញ្ចូលវីឌីអូ)</button></a>
                </div>
            </div>

            <!-- ==========| LOOP FOR VIDEO UPLOAD |========== -->
            <?php foreach($getAllDataOfmp4 as $video): ?>
                <div class="col-md-4">
                    <div class="product-item">
                        <video width="100%" height="100%" controls>
                            <source src="mp4_uploaded/<?=$video['mp4_upload']?>" type="video/mp4">
                        </video>
                        <div class="down-content">
                            <strong style="font-family: 'Battambang', cursive;"><?=$video['mp4_title']?></strong>
                            <p  class="text-dark" style="font-family: 'Battambang', cursive;"><?=$video['mp4_des']?></p>
                            <small style="font-family: 'Battambang', cursive;"><?=$video['mp4_posted']?></small>
                            <hr>
                            <small>
                                <button class="btns" data-toggle="modal" data-target="#myModal"><i class="fa fa-commenting">Comment</i></button>
                                <a href="https://www.youtube.com/channel/UCyrVPhME2ZRedgeiBjehPXw/videos"><button class="btns"><i class="fa fa-cube">Subcribe</i></button></a>
                                <!-- <button class="btns"><i class="fa fa-thumbs-up">Like</i></button> -->
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
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?=$video['mp4_title']?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="mb-3 row">
                                            <div class="col-sm-12">
                                                <textarea type="text" class="form-control" id="inputPassword"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-warning" style="font-family: 'Battambang', cursive;" >Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- END OF MODAL -->
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- ==========| LOOP FOR VIDEO UPLOAD |========== -->
            <div class="col-md-12 ">
                <ul class="pages">
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
					I am a student at Passerellesnumeriques Cambodia (PNC) &amp; WEB-DEVILOPER.
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