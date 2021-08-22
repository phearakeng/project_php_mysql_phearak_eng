<!-- ==========| REQUIRE FROM PARTIAL HEADER |========== -->
<?php 
	require_once('partial/header.php'); 
	$alertMess = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ifLogSuccess = userLogin($_POST);
        if ($ifLogSuccess) {
            header('Location: ../index?page=home');
        }
        else {
            $alertMess = "Username or Password incorrect!";
        }
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
					<img src="assets/images/logo.png" class="img-fluid" alt="..." width="300" height="200">
					<h2 style="font-family: 'Moul', cursive; color: yellow;">សូមស្វាគមន៍</h2>
					<hr>
					<button class="btn btn-outline-warning" style="font-family: 'Battambang', cursive;"><a href="?page=aboutMe">About Me</a> </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========| CATEGORIES |========== -->
<div class="latest-products">
    <div class="container">
        <div class="row">
          	<div class="col-md-12">
            	<div class="section-heading">
              	<h4 style="font-family: 'Battambang', cursive;">Share your knowledge</h4>
              	<a href="" style="font-family: 'Battambang', cursive;">VIEW MORE<i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
				<a href="?page=news">
					<img src="assets/images/bg6.jpg" alt="">
				</a>
              
              	<div class="down-content">
                	<a href="?page=news"><h4 style="font-family: 'Battambang', cursive;">Finding about news</h4></a>
                	<p style="font-family: 'Battambang', cursive;">The information may be in respect of the reader’s interest in specific fields. The best ingredient is that it should be of some education value for readers. The readers ought to be of the progress of the country and making in the specific fields. The countrymen have the right to know as to how strangers their country is. It is for the readers of the country.</p>
                	<small>
						<strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
						<strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
						<strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                	</small>
              	</div>
            </div>
        </div>
		<div class="col-md-4">
			<div class="product-item">
				<a href="?page=song"><img src="assets/images/lis.webp" alt=""></a>
				<div class="down-content">
					<a href="?page=song"><h4 style="font-family: 'Battambang', cursive;">Finding about happy</h4></a>
					<p style="font-family: 'Battambang', cursive;">Stress is the feeling of being overwhelmed or unable to cope with mental or emotional pressure. If you're constantly under stress, you can have physical symptoms, such as headaches, an upset stomach, high blood pressure, chest pain, and problems with sex and sleep. Stress can also lead to emotional problems, depression, panic attacks, or other forms of anxiety and worry.</p>
					<small>
						<strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
						<strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
						<strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
					</small>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="product-item">
				<a href="?page=study"><img src="assets/images/bg8.png" alt=""></a>
				<div class="down-content">
					<a href="?page=study"><h4 style="font-family: 'Battambang', cursive;">Finding about knowledge</h4></a>
					<p style="font-family: 'Battambang', cursive;">By most accounts, knowledge can be acquired in many different ways and from many sources, including but not limited to perception, reason, memory, testimony, scientific inquiry, education, and practice. The philosophical study of knowledge is called epistemology.</p>
					<small>
						<strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
						<strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
						<strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
					</small>
				</div>
			</div>
		</div>
    </div>
</div>

<!-- ==========| FEACTURE |========== -->
<div class="best-features">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2 class="display-5"​​ style="font-family: 'Battambang', cursive;">ប្រាសាទ (កម្ពុជា)</h2>
				</div>
				</div>
				<div class="col-md-6">
					<div class="left-content">
						<p class="text-muted" style="font-family: 'Battambang', cursive;">ប្រាសាទ(បាលី/សំស្រ្តឹត)គឺជាគ្រឹហាទីនាំចិត្តនាំចិត្តឱ្យជ្រះថ្លា ឬជាទីស្រឡះភ្នែកគឺជាផ្ទះមានថ្នាក់ខ្ពស់ស្រឡះ។​ 
						<details style="font-family: 'Battambang', cursive;">
							<summary>More detial</summary>
							<p>ខ្មែរយើងហៅតាមទម្លាប់ហៅជំពោះរាជដំណាក់ឬគ្រឹហាដែលមានកំពូល សូម្បីសង់មួយជាន់ក៏ហៅប្រាសាទដែរ តែវិហារសាសនា ឬសាលា ទោះបីមានកំពូលក៏ពុំហៅប្រាសាទឡើយ។ ប្រាសាទនីមួយៗ តែងតែមានឈ្មោះបុរាណតាមសិលាចារឹកដោយតាមឈ្មោះព្រះសិវលិង្គ បដិមាករទីកន្លែងដូចជា ត្រីភុវនមហេស្វរៈ(អ្នកគ្រប់គ្រងឋានទាំងបី)គឺជាឈ្មោះប្រាសាទបន្ទាយស្រី តាមសិលាចារឹកK-៨៤២ ក្នុងសតវត្សរ៍ទី១០។</p>
						</details></p>
						<ul class="featured-list">
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.history.com/topics/landmarks/angkor-wat">ប្រាសាទអង្គរត្ត</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.tourismcambodia.com/travelguides/provinces/preah-vihear.htm">ប្រាសាទព្រះវិហារ</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="http://kampongthom.gov.kh/%E1%9E%9A%E1%9E%98%E1%9E%8E%E1%9E%B8%E1%9E%99%E1%9E%8A%E1%9F%92%E1%9E%8B%E1%9E%B6%E1%9E%93%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%B6%E1%9E%9F%E1%9E%B6%E1%9E%91%E1%9E%9F%E1%9F%86%E1%9E%94%E1%9E%BC%E1%9E%9A/">រមណីយដ្ឋានប្រាសាទសំបូរ</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.cpc-news.com/archives/39698">ប្រាសាទបាយ័ន</a></li>
						</ul>
						<a href="http://www.khmerlegend.com/2017/10/KhmerTempleName.html" class="filled-button" style="font-family: 'Battambang', cursive;">READ MORE</a>
					</div>
				</div>
			<div class="col-md-6">
				<div class="right-image">
					<img src="assets/images/bg5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ==========| FEACTURE |========== -->
<div class="best-features">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2 class="display-5"​​ style="font-family: 'Battambang', cursive;">វប្បធម៍ (កម្ពុជា)</h2>
				</div>
				</div>
				<div class="col-md-6">
					<div class="left-content">
						<p class="text-muted" style="font-family: 'Battambang', cursive;">វប្បធម៌ (culture) ការបណ្ដុះចំណេះវិជ្ជា ប្រាជ្ញាស្មារតី និង របៀបរស់នៅរបស់មនុស្ស ឱ្យបានលូតលាស់ចម្រើនដើម្បីសម្របសម្រួលទៅនឹងបរិស្ថាន និងការអភិវឌ្ឍសង្គមដោយវិទ្យាសាស្ត្រឬដោយសិល្បៈផ្សេងៗជាដើម។<a href="https://delta-plc.com/0043-2/">more datial</a></p>
						<ul class="featured-list">
							<li style="font-family: 'Battambang', cursive;"><a href="">ការចេះដឹង</a><br>
								<small>- ជំនឿរ </small><br>
								<small>- សាសនា </small><br>
								<small>- វិជ្ជា វិទ្យាស្យង់ </small>
							</li>
							<li style="font-family: 'Battambang', cursive;"><a href="">ការកំណត់ផ្សាយ</a><br>
								<small>- ភាសា អក្សរ​ សញ្ញា </small><br>
								<small>- អក្សរសាស្រ្ត អក្សរសិល្ប៍  </small><br>
								<small>- សិល្បៈ ព័ត៍មាន (វិទ្យុ ទូរទស្សន៍...) </small>
							</li>
							<li style="font-family: 'Battambang', cursive;"><a href="">ការអុវត្តន៍</a><br>
								<small>- ទំនៀមទម្លាប់ ប្រពៃណី </small><br>
								<small>- ការសិក្សា ការអប់រំ (ប្រដៅ ទូន្មាន) </small><br>
								<small>- ទំនៀមទម្លាប់ ប្រពៃណី </small>
							</li>
						</ul>
						<a href="https://www.khsearch.com/qna/13502" class="filled-button" style="font-family: 'Battambang', cursive;">READ MORE</a>
					</div>
				</div>
				<div class="col-md-6">
				<div class="right-image">
					<img src="assets/images/culture.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ==========| FEACTURE |========== -->
<div class="best-features">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2 class="display-5"​​ style="font-family: 'Battambang', cursive;">សម័យកាល​ (កម្ពុជា)</h2>
				</div>
				</div>
				<div class="col-md-6">
					<div class="left-content">
						<p class="text-muted" style="font-family: 'Battambang', cursive;">ចាប់តាំងពីកកើតដំបូងរហូតមកដល់បច្ចុប្បន្ននេះ ប្រទេសកម្ពុជាយើងបានកន្លងផុតសម័យកាលសំខាន់ៗចំនួន១៦សម័យកាលរួចមកហើយ ដោយក្នុងចំណោមសម័យកាលទាំងអស់នោះ មានសម័យកាលខ្លះដែលប្រទេសរបស់យើងបានទទួលការរីកចម្រើនទៅដល់កម្រិតកំពូល សម័យកាលខ្លះស្ថិតក្រោមការត្រួតត្រារបស់បរទេស និងមានសម័យកាលខ្លះដែលប្រទេសរបស់យើងបានធ្លាក់ចុះខ្សោយរហូតដល់ក្រោមសូន្យក៏មាន។ សម័យកាលទាំង១៦ដែលប្រទេសកម្ពុជាបានឆ្លងកាត់ទាំងអស់នោះរួមមាន៖</p>
						<ul class="featured-list">
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.rfa.org/khmer/news/history/Cambodian-Pre-History-and-the-1st-Indian-Influence-01292014000728.html">សម័យបុរេប្រវត្តិ (៦ ០០ ០០០ឆ្នាំមុនគ្រិស្តសករាជ រហូតដល់សតវត្សរ៍ទី១នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.rfa.org/khmer/news/history/The-Phnom-Empire-02052014001005.html">សម័យនគរភ្នំ ឬហ្វូណន (ដើមសតវត្សរ៍ទី១ រហូតដល់ឆ្នាំ៥៥០នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.interconrooster.com/archives/project/0409171319">សម័យចេនឡា (ឆ្នាំ៥៥០-៨០២ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.rfa.org/khmer/news/history/The-Khmer-Kings-in-Chenla-Period-02262014024902.html">សម័យអង្គរ (ឆ្នាំ៨០២ -១៤៣១ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://sakhanum.wixsite.com/sakhan/single-post/2017/01/07/%E1%9E%94-%E1%9E%9A%E1%9E%9C%E1%9E%8F-%E1%9E%8F-%E1%9E%94-%E1%9E%9A%E1%9E%91-%E1%9E%9F%E1%9E%80%E1%9E%98-%E1%9E%96-%E1%9E%87-%E1%9E%93-%E1%9E%9F%E1%9E%98-%E1%9E%99%E1%9E%85%E1%9E%8F-%E1%9E%98-%E1%9E%81-%E1%9E%82%E1%9E%9F-%E1%9F%A1%E1%9F%A4%E1%9F%A3%E1%9F%A1-%E1%9F%A1%E1%9F%A5%E1%9F%A1%E1%9F%A5-%E1%9E%8F%E1%9E%85%E1%9E%94">សម័យចតុមុខ (ឆ្នាំ១៤៣១-១៥១៦ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://spktliv.com/archives/3998">សម័យលង្វែក (ឆ្នាំ១៥១៦-១៦២០ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://kohsantepheapdaily.com.kh/article/1159424.html">សម័យឧដុង្គ (ឆ្នាំ១៦២០-១៨៦៣ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://khmer-lfrd.com/wp-content/uploads/2018/08/unnamed-file.pdf">សម័យអាណានិគមនិយមបារាំង (១៨៦៣-១៩៥៣ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://www.rfi.fr/km/japan-empire">សម័យអាណានិគមជប៉ុន (ឆ្នាំ១៩៤១-១៩៤៥ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="http://netstudy.orgfree.com/index.php/2012-08-01-14-00-34">សម័យសង្គមរាស្រ្តនិយម ឬព្រះរាជាណាចក្រកម្ពុជាទី១ (ឆ្នាំ១៩៥៣- ១៩៧០ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://khmerdeng.com/khmerpublic/">សម័យសាធារណរដ្ឋខ្មែរ ឬសម័យ លន់ ណុល (ឆ្នាំ១៩៧០-១៩៧៥ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://khmerdeng.com/cambodia-demogratic/">សម័យកម្ពុជាប្រជាធិបតេយ្យ ឬសម័យ ប៉ុល ពត (ឆ្នាំ១៩៧៥- ១៩៧៩ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://khmerdeng.com/khmerpublic/">សម័យសាធារណរដ្ឋប្រជាមានិតកម្ពុជា (ឆ្នាំ១៩៧៩ -១៩៨៩ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="http://konkhmerone.blogspot.com/2018/11/blog-post_93.html">សម័យរដ្ឋកម្ពុជា (ឆ្នាំ១៩៨៩- ១៩៩១ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="http://businesskhmer1.blogspot.com/2018/06/blog-post_91.html">សម័យអ៊ុនតាក់ ក្រោមការគ្រប់គ្រងរបស់អង្គការសហប្រជាជាតិ (ឆ្នាំ១៩៩២-១៩៩៣ នៃគ្រិស្តសករាជ)</a></li>
							<li style="font-family: 'Battambang', cursive;"><a href="https://mk0rofifiqa2w3u89nud.kinstacdn.com/wp-content/uploads/Cambodia_cons.pdf">សម័យព្រះរាជាណាចក្រកម្ពុជា ឬព្រះរាជាណាចក្រកម្ពុជាទី២ (ឆ្នាំ១៩៩៣ -បច្ចុប្បន្ន)</a></li>
						</ul>
						<a href="http://www.khmerlegend.com/2017/10/KhmerTempleName.html" class="filled-button" style="font-family: 'Battambang', cursive;">READ MORE</a>
					</div>
				</div>
			<div class="col-md-6">
				<div class="right-image">
					<img src="assets/images/boray.jpg" alt="">
				</div>
				<hr>
				<div class="right-image">
					<img src="assets/images/present.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
  
<!-- ==========| ACTION |========== -->
<div class="services" >
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
            	<div class="section-heading">
              	<h2​​​​ class="text-light" style="font-family: 'Battambang', cursive;">ព័ត៍មានថ្មីៗ</h2>
              	<a href="blog.html">READ MORE<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="service-item">
            	<a href="#" class="services-item-image"><img src="assets/images/bg2.jpg" class="img-fluid" alt=""></a>
              	<div class="down-content">
                	<h4 style="font-family: 'Battambang', cursive;"><a href="#">ការកំសាន្ត</a></h4>
                	<p class="text-muted" style="margin: 0;"> PHEARAK &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; a go</p>
              	</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item">
            	<a href="#" class="services-item-image"><img src="assets/images/bg3.jpg" class="img-fluid" alt=""></a>
              	<div class="down-content">
                	<h4 style="font-family: 'Battambang', cursive;"><a href="#">វប្បធម៍</a></h4>
                	<p class="text-muted" style="margin: 0;"> PHEARAK &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp;  a go</p>
              	</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item">
              	<a href="#" class="services-item-image"><img src="assets/images/bg4.jpg" class="img-fluid" alt=""></a>
              	<div class="down-content">
					<h4 style="font-family: 'Battambang', cursive;"><a href="https://www.guidetrip.pro/blog/2/%E1%9E%8F%E1%9F%86%E1%9E%94%E1%9E%93%E1%9F%8B%E1%9E%91%E1%9F%81%E1%9E%9F%E1%9E%85%E1%9E%9A%E1%9E%8E%E1%9F%8D%E1%9E%8A%E1%9F%8F%E1%9E%98%E1%9E%B6%E1%9E%93%E1%9E%9F%E1%9E%80%E1%9F%92%E1%9E%8A%E1%9E%B6%E1%9E%93%E1%9E%BB%E1%9E%96%E1%9E%9B%E1%9E%91%E1%9E%B6%E1%9F%86%E1%9E%84-%E1%9F%A1%E1%9F%A0-%E1%9E%93%E1%9F%83%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%91%E1%9F%81%E1%9E%9F%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%96%E1%9E%BB%E1%9E%87%E1%9E%B6">ទេសចរណ៍</a></h4>
					<p class="text-muted" style="margin: 0;"> PHEARAK &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; a go</p>
              	</div>
            </div>
        </div>
    </div>
</div>

<!-- ==========| FOOTER |========== -->
<link rel="stylesheet" href="assets/css/style_footer.css">
	<footer class="footer-distributed">
        <div class="footer-left">
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

<!-- ==========| REQUIRE FROM PARTIAL FOOTER |========== -->
<?php require_once('partial/footer.php'); ?>