<?php 
    require_once('partial/header.php'); 
    include_once('inc/function.php');
    $data = getAllUserFromDB();
?>

<!-- DISPLAY DATA IN TABLE BOOTSTRAP -->
<hr>
<div class="open-header bg-info p-3">
    <h2 class="text-center" style="font-family: 'Moul', cursive;">បញ្ជីររាយនាមអ្នកប្រើប្រាស់</h2>
    <h4 class="text-center" style="font-family: 'Moul', cursive;">(List Name Of Users)</h4>
</div>
<hr>
<table class="table table-bordered ​table-hover">
    <tr class="bg-info text-center text-dark" style="font-family: 'Moul', cursive;">
        <th>លេខរៀង​(ID)</th>
        <th>ឈ្មោះ (Name)</th>
        <th>លេខកូដ (Password)</th>
        <th>គិត្តនាម (Position)</th>
    </tr>
    <!-- LOOP FOR BRING DATA FROM DATABASE -->
    <?php foreach ($data as $row): ?>
        <tr class="text-light"​ style="font-family: 'Moul', cursive;">
            <td class="bg-info text-dark text-center"><b><?php echo $row['user_id']?></b></td>
            <td class="bg-dark text-light"><?php echo $row['user_name']?></td>
            <td class="bg-dark text-light"><?php echo $row['user_pass']?></td>
            <td class="bg-dark text-light"><?php echo $row['user_role']?></td>
        </tr>
    <?php endforeach; ?>
</table>
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