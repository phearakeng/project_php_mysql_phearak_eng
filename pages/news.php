<!-- ==========| REQUIRE FROM PARTIAL HEADER & FOOTER |========== -->
<?php 
    require_once('partial/header.php'); 
    include_once('inc/function.php');

    // =====| CONDITION OF SEARCH |===== //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isSearching = search($_POST);

    }else {
        $isSearching = getDataOfNews();

    }
?>

<!-- =========| LINK OF STYLE CSS |========== -->
<link rel="stylesheet" href="assets/css/style_banner.css">

<!-- ==========| BANNER IMAGE |========== -->
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2 style="font-family: 'Rampart One', cursive; color: white;">WELCOME</h2>
                    <hr>
                    <h3 style="font-family: 'Moul', cursive; color: #03fc17;">To ខ្មែរកំសាន្ត Daily News</h3>
					<hr>
					<button class="btn btn-outline-warning" style="font-family: 'Battambang', cursive;"><a href="?page=aboutMe">About Me</a> </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container p-2">
<!-- ==========| USER FROFILE |==========-->
    <div class="d-flex justify-content-between p-2 bg-dark">
        <div class="user-name">
            <h4 class="name text-light" style="font-family: 'Battambang', cursive;">
                <img src="assets/images/userlogin.png" alt="" width="50" height="50"​> ​Sun SoPhearak
            </h4> 
        </div>
        <!-- ==========| SEARCH |==========-->
        <div class="search-bar-create d-flex justify-content-between">
            <div class="btn-group open mr-3">
                <p class="btn btn-light" style="font-family: 'Battambang', cursive;">SORT BY:</p>
                <p class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown"></p>
                <ul class="dropdown-menu bg-dark p-2" method="POST" name="sort_alphabet" style="font-family: 'Battambang', cursive;">
                    <li class="btn btn-outline-warning m-1"​ type="submit" name="asc"><i class="fa fa-sort-alpha-asc"></i> Last post</li>
                    <li class="btn btn-outline-warning m-1" type="submit" name="desc"><i class="fa fa-sort-alpha-desc"></i> Old post</li>
                    <li class="btn btn-outline-warning m-1" type="submit" name="bytitle"><i class="fa fa-sort"></i> Title</li>
                </ul>
            </div>
            <!-- | BUTTON EDIT DELETE & MORE DATIAL | -->
            <div class="search-bar">
                <form class="form-inline mr-3" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="valueToSearch">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            
            <!-- ==========| CREATE |==========-->
            <div class="create-new">
                <a href="process/create_view_news.php" class="btn btn-outline-light"><i class="fa fa-plus-square-o"></i></a>
            </div>
        </div>
    </div>

    <?php foreach($isSearching as $news): ?>
    <hr>
    <div class="card mb-3" style="max-width: 2000px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img_uploaded/<?=$news['post_img']?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Battambang', cursive; "><?=$news['post_title']?> </h4>
                    <p class="card-text" style="font-family: 'Battambang', cursive; "><?=$news['post_description']?></p>
                    <p class="card-text"><small class="text-muted"><?=$news['post_date']?> minute a go</small></p>
                    <!-- | BUTTON EDIT DELETE & MORE DATIAL | -->
                        <div class="btn-group open">
                            <p class="btn btn-primary"><i class="fa fa-bars"></i></p>
                            <p class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown"> Action</p>
                            
                            <ul class="dropdown-menu bg-dark p-2" style="font-family: 'Battambang', cursive;">
                                <li class="btn btn-outline-warning m-1"><a href="process/update_view_news.php?id=<?=$news['post_id']?>"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                                <li class="btn btn-outline-warning m-1"><a href="process/remove_model_news.php?id=<?=$news['post_id']?>"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                              
                                <li class="btn btn-outline-warning m-1"  data-toggle="modal" data-target="#myModal"><i class="fa fa-bars"></i> Detial</a></li>
                                <li class="btn btn-outline-warning m-1"><a href="#"><i class="fa fa-unlock"></i> Make admin</a></li>
                            </ul>
                        </div>
                    <!-- ========== | MODAL | ========== -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" style="font-family: 'Battambang', cursive;"><?=$news['post_title']?></h4>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body" style="font-family: 'Battambang', cursive;">
                                    <p><?=$news['post_description']?></p>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                    <!-- ========== MODAL ========== -->
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
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