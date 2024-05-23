<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Moon Wedding</title>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
			}
		</style>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="wedding navigation bar">

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
							@if(session()->has('email'))
							<a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(97, 150, 166); display: inline-block; text-align: center; border-color:rgb(97, 150, 166)">
                                <img src="images/user.svg" alt="User Icon" style="max-width: 100%; height: auto;">
								{{session('email')}}
							</a>
                            <!-- Opsi "Profile" dan "Logout" -->
                            <div id="dropdown-options" style="display: none;">
                                <a href="/profile" class="dropdown-option">Profile</a>
                                <a href="/auth/logout" class="dropdown-option">Logout</a>
                            </div>
							@else
							<a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(97, 150, 166); display: inline-block;text-align: center; border-color:rgb(97, 150, 166)">
                                <img src="images/user.svg" alt="User Icon" style="max-width: 100%; height: auto;">
								Login
							</a>
                            <!-- Opsi "Profile" dan "Logout" -->
                            <div id="dropdown-options" style="display: none;">
                                <a href="/auth/login" class="dropdown-option">Login</a>
                            </div>
							@endif
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
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Moon Wedding <span class="d-block">Here For You!</span></h1>
								<p class="mb-4">Moon Wedding menyediakan jasa Decoration Wedding, Prewedding Photo, dan Paket Pernikahan dengan harga terjangkau!</p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/prewed1.jpg" class="img-fluid gradient-img">
							</div>
						</div>						
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Why Choose Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Why Choose Us</h2>
						<p class="mb-4" style="color: rgb(39, 39, 39); font-family: 'Poppins', sans-serif;">Moon Weeding membantu mengefisiensikan waktu anda, mempermudah konsultasi, dan berbagai paket pernikahan. </p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item">
							<img src="images/Group 28.png" class="img-fluid product-thumbnail">
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item">
							<img src="images/Group 26.png" class="img-fluid product-thumbnail">
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item">
							<img src="images/Group 27.png" class="img-fluid product-thumbnail">
						</a>
					</div>
					<!-- End Column 4 -->
				</div>
			</div>
		</div>
		<!-- End Why Choose Section -->

		<!-- Start Description Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/prewed.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="images/souvenir.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="images/decor.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4"></h2>
						<p>
							<strong style="font-weight: bold; color: black; font-family: 'Poppins', sans-serif;">Moon Wedding</strong> <span style="color: black; font-family: 'Poppins', sans-serif;">adalah sebuah perusahaan yang mengkhususkan diri dalam penyedia jasa Decoration Wedding, Prewedding Photo, dan Paket Pernikahan dengan harga lebih terjangkau. Dengan fokus pada pengalaman yang luar biasa dan tak terlupakan bagi pasangan yang akan menikah. Moon Wedding juga menawarkan paket pernikahan yang dirancang khusus untuk memenuhi impian pasangan tentang pernikahan yang diinginkan. Dengan mengikuti perkembangan terkini dan update terkini, Moon Wedding membawa pengalaman pernikahan ke tingkat yang baru dan menghadirkan momen indah yang tak terlupakan bagi para pasangan.</span>
						</p>						
					</div>
				</div>
			</div>
		</div>
		<!-- End Description Section -->

		<!-- Start Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Vision and Mission</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Visi kami adalah menjadi penggerak utama dalam merangkul keindahan dan kebahagiaan dalam setiap pernikahan. Kami berkomitmen untuk menyediakan layanan yang berkualitas tinggi dan pengalaman yang tak terlupakan bagi setiap pasangan. Misi kami adalah menghadirkan pernikahan impian menjadi kenyataan dengan keahlian dan perhatian pada setiap detail, menciptakan kenangan abadi yang akan dikenang sepanjang masa.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/223140707111074.jpeg" alt="foto1" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Fatralia Della A.S</h3>
													<span class="position d-block mb-3">CEO, Co-Founder.</span>
												</div>
											</div>
										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Kami berharap agar setiap pasangan yang menggunakan layanan kami merasakan keajaiban sejati dalam momen pernikahan mereka. Kami ingin menjadi bagian dari cerita indah mereka, menciptakan kenangan yang abadi dan menghadirkan kebahagiaan yang tak terlupakan. Bersama, mari kita buat pernikahan impian menjadi kenyataan.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/COO.jpg" alt="foto2" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Kevin Gymnastiar W.</h3>
													<span class="position d-block mb-3">Chief Operating Officer</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Dengan hati penuh harapan, kami menginginkan agar setiap detik pernikahan yang kami bantu merencanakan menjadi momen yang tak terlupakan bagi setiap pasangan. Kami berkomitmen untuk menghadirkan pengalaman pernikahan yang penuh keindahan, kebahagiaan, dan inspirasi. Jadikanlah hari bahagia Anda sebagai saksi dari keinginan kami untuk menciptakan pernikahan yang sempurna untuk Anda.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/CMO.jpg" alt="foto3" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Evelyn Pranata</h3>
													<span class="position d-block mb-3">Chief Marketing Officer</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Slider -->	

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
									<li style="margin-top: 18px;">Available at <span style="display: block; margin-top: 1px;">08.00 AM - 20.00 PM</span></li>
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

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>