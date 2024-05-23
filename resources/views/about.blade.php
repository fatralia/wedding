<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/about.css" rel="stylesheet">
		<title>Moon Wedding</title>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
			}
		</style>
	</head>
	</head>
	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Wedding navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="logo.png" alt="Logo Wedding"></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsWedding" aria-controls="navbarsWedding" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsWedding">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="/beranda">Home</a>
						</li>
						<li><a class="nav-link" href="/about">About</a></li>
						<li><a class="nav-link" href="/comment">Comment</a></li>
						<li><a class="nav-link" href="/contact">Contact</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li>
                            <!-- Tombol untuk menampilkan opsi -->
                            <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(97, 150, 166); display: inline-block; text-align: center; border-color:rgb(97, 150, 166)">
                                <img src="images/user.svg" alt="User Icon" style="max-width: 100%; height: auto;">
								Login
                            </a>
                            <!-- Opsi "Profile" dan "Logout" -->
                            <div id="dropdown-options" style="display: none;">
                                <a href="/profile" class="dropdown-option">Profile</a>
                                <a href="/" class="dropdown-option">Logout</a>
                            </div>
                        </li>
                    </ul>
                    
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var dropdownButton = document.getElementById('user-dropdown');
                            var dropdownOptions = document.getElementById('dropdown-options');
                    
                            // Tambahkan event listener untuk tombol dropdown
                            dropdownButton.addEventListener('click', function (event) {
                                event.preventDefault(); // Untuk mencegah navigasi
                    
                                // Toggle tampilan opsi
                                if (dropdownOptions.style.display === 'none') {
                                    dropdownOptions.style.display = 'block';
                                } else {
                                    dropdownOptions.style.display = 'none';
                                }
                            });
                        });
                    </script>
                    
					
				</div>
			</div>
				
		</nav>
        <div style="border-bottom: 1px solid rgb(235, 227, 227);"></div>
        {{-- end nav --}}

		{{-- start about --}}
  <div class="container">
    <div class="about-section">
      <div class="image-container">
        <img src="images/bride-groom-wedding-reception.jpg" alt="Gambar Atas">
      </div>
      <div class="content">
        <div class="left-content">
          <p>Selamat datang di MOON WEDDING, tempat di mana impian pernikahan Anda menjadi nyata dan tak terlupakan. Kami adalah mitra setia bagi para calon pengantin yang menginginkan pernikahan yang indah dan berkesan. Dengan penuh dedikasi dan cinta pada seni pernikahan, kami menghadirkan layanan jasa yang komprehensif untuk memastikan setiap momen dari perjalanan menuju hari bahagia Anda berjalan lancar dan sempurna.Di MOON WEDDING, kami memahami betapa pentingnya momen pernikahan dalam kehidupan Anda. Itulah mengapa kami berkomitmen untuk memberikan pelayanan terbaik dengan sentuhan personal yang memperhatikan setiap detail kecil. Sejak awal perencanaan hingga pelaksanaan acara, tim profesional kami siap membantu Anda setiap langkahnya. Setiap momen yang kami ciptakan bersama Anda adalah suatu kehormatan bagi kami, karena kami percaya bahwa setiap pernikahan memiliki cerita cinta yang unik dan berharga.</p>
        </div>
        <div class="right-content">
          <img src="images/wedding-invitation-card.jpg" alt="Gambar Kanan">
        </div>
      </div>
      <div class="bottom-content">
        <p>Dalam setiap pernikahan, kami percaya bahwa setiap detail memiliki peran penting dalam menciptakan pengalaman yang tak terlupakan. Itulah mengapa MOON WEDDING mengutamakan kualitas dan keindahan dalam setiap aspek layanan kami. Dari dekorasi yang dipilih dengan hati-hati hingga pemilihan souvenir dan undangan yang indah, kami bertekad untuk memberikan pengalaman yang luar biasa bagi Anda dan para tamu undangan Anda. Kami juga menyadari bahwa perencanaan pernikahan bisa menjadi proses yang menuntut waktu dan tenaga. Oleh karena itu, tim kami siap membantu Anda mengatasi setiap tantangan yang mungkin muncul selama persiapan pernikahan Anda. Dengan pengalaman yang luas dan pengetahuan yang mendalam tentang industri pernikahan, kami akan memberikan saran yang berharga dan solusi kreatif untuk memastikan bahwa pernikahan Anda berjalan sesuai dengan rencana dan melebihi harapan Anda.</p>
      </div>
      <div class="image-row">
        <img src="images/groom-bride-together-are-holding-wedding-pink-bouquet.jpg" alt="Gambar Kiri">
        <img src="images/aku.jpg" alt="Gambar Kanan">
      </div>
      <div class="bottom-content">
		<div class="left-content">
		  <img src="images/bows-rope-twine-pink-bouquets-white-chairs.jpg" alt="Gambar Kiri">
		</div>
		<div class="right-content">
		  <p>Di MOON WEDDING, kami berkomitmen untuk menciptakan momen-momen yang tak terlupakan bagi Anda dan pasangan Anda. Kami percaya bahwa setiap pernikahan adalah cerita cinta yang unik, dan kami senang dapat menjadi bagian dari kisah indah Anda. Dengan perhatian kami terhadap detail dan pelayanan yang ramah, kami bertekad untuk membuat setiap momen pernikahan Anda menjadi kenangan yang abadi bagi Anda dan orang yang Anda cintai. Bersama MOON WEDDING, Anda tidak hanya mendapatkan penyedia layanan pernikahan yang handal, tetapi juga mendapatkan teman sejati yang siap mendukung dan menginspirasi Anda dalam setiap langkah menuju hari yang paling istimewa dalam hidup Anda. Mari bergabung dengan kami dalam perjalanan menuju pernikahan impian Anda.</p>
		</div>
      </div>
    </div>
  </div>

		{{-- end about --}}

		<!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title">Our Team</h2>
					</div>
				</div>

				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/223140707111074.jpeg" class="img-fluid mb-5">
						<h3><a><span class="">Fatralia</span> Della</a></h3>
            <span class="d-block position mb-4">CEO, Founder.</span>
            <p>Menghadirkan keceriaan dan kehangatan dalam setiap detil, kami mengambil tanggung jawab untuk menjadikan pernikahan Anda sebagai peristiwa yang tak terlupakan.</p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/WhatsApp Image 2024-05-13 at 15.51.40.jpeg" class="img-fluid mb-5">

						<h3 clas><a><span class="">Kevin</span> Gymnastiar</a></h3>
            <span class="d-block position mb-4">COO</span>
            <p>Dari dekorasi yang elegan hingga pemilihan souvenir yang berkesan, kami berkomitmen untuk membuat setiap momen spesial Anda menjadi lebih indah dari yang Anda bayangkan.</p>

					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/person_3.jpg" class="img-fluid mb-5">
						<h3 clas><a><span class="">Rifki</span> Primanda</a></h3>
            <span class="d-block position mb-4">CTO</span>
            <p>Kami mempersembahkan pengalaman yang menghadirkan kehangatan dan keceriaan, membuat momen pernikahan Anda menjadi kenangan yang abadi.</p>
					</div> 
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/cewe.jpg" class="img-fluid mb-5">

						<h3 clas><a><span class="">Yessy</span> Ryan</a></h3>
            <span class="d-block position mb-4">Manager</span>
            <p>Setiap detail dipersiapkan dengan teliti dan penuh perhatian, karena bagi kami, kebahagiaan Anda adalah prioritas utama.</p>
          
					</div> 
					<!-- End Column 4 -->

					

				</div>
			</div>
		</div>
		<!-- End Team Section -->

		<!-- Start Footer Section -->
		<footer class="footer-section" style="padding-bottom: 0.5px;">
			<div class="border-top copyright">
			<div class="container relative">

				<div class="row">
					<div class="col-lg-8">
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<a class="navbar-brand" href="index.html"><img src="logo.png" alt="Logo Wedding" style="height: auto; width: auto; max-height: 100px; max-width: 200px;"></a>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">

								<ul class="list-unstyled custom-social">
									<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
									<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3" style="display: flex; justify-content: flex-end;">
								<ul class="list-unstyled">
									<li style="margin-top: 24px;">Available at <span style="display: block; margin-top: 1px;">08.00 AM - 20.00 PM</span></li>
								</ul>
							</div>
							

							<div class="col-6 col-sm-6 col-md-3" style="display: flex; justify-content: flex-end; align-items: center;">
								<ul class="list-unstyled">
									<li>Have a complaint? <span style="display: flex; align-items: center;"><img src="images/email.png" alt="Email Icon" style="width: 20px; height: auto; margin-right: 5px;"> moonwd@gmail.com</span></li>
								</ul>
							</div>
							
							

							<div class="col-6 col-sm-6 col-md-3" style="display: flex; justify-content: flex-end;">
								<ul class="list-unstyled">
									<li style="margin-top: 18px;"> © 2024 Moon Wedding. <span style="display: block; margin-top: 1px;">All Rights Reserved. </span></li>
								</ul>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Section -->
    </body>
    </html>