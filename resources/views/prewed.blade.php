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
		<link href="css/prewed.css" rel="stylesheet">
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
                            <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(97, 150, 166); display: inline-block; width: 50px; text-align: center; border-color:rgb(97, 150, 166)">
                                <img src="images/user.svg" alt="User Icon" style="max-width: 100%; height: auto;">
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
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Prewedding Photo</h1>
								<p class="mb-4">Custom background atau tempat foto saat konsultasi offline. Booking prewedding session now for your dream ! Nikmati pengalaman prewedding yang tak terlupakan bersama kami !</p>
								<p>
									<a href="" class="btn btn-secondary me-2">Book Now</a>
									<a href="https://wa.me/6285776844820" target="_blank" class="btn btn-white-outline" style="position: relative; display: inline-block;">
										<img src="images/WA.png" alt="WhatsApp Logo" style="width: 20px; position: absolute; left: 20px; top: 50%; transform: translateY(-50%);">
										<span style="margin-left: 25px;">Konsultasi</span>
									</a>
								</p>
								
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/prewed2.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="/detail" class="post-thumbnail"><img src="images/tradisional.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Traditional</a></h3>
								<div class="meta">
									<span>Rp. 7.000.000 - Rp. 28.000.000</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/vintage.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Vintage Romance</a></h3>
								<div class="meta">
									<span>Rp 7.000.000 - Rp 20.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/nature.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Nature Adventure</a></h3>
								<div class="meta">
									<span>Rp 9.000.000 - Rp 30.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/urban.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Urban Chic</a></h3>
								<div class="meta">
									<span>Rp 7.000.000 - Rp 25.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/rustic.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Rustic Farmhouse</a></h3>
								<div class="meta">
									<span>Rp 8.000.000 - Rp 30.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/fairy.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Fairytale Romance</a></h3>
								<div class="meta">
									<span>Rp 10.000.000 - Rp 35.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/bohemian.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Bohemian Dream</a></h3>
								<div class="meta">
									<span>Rp 8.000.000 - Rp 25.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/elegan.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Glamorous Elegance</a></h3>
								<div class="meta">
									<span>Rp 10.000.000 - Rp 40.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/travel.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Travel Love</a></h3>
								<div class="meta">
									<span>Rp 15.000.000 - Rp 50.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/artistic.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Artistic Expression</a></h3>
								<div class="meta">
									<span>Rp 10.000.000 - Rp 35.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/season.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Seasonal Delight</a></h3>
								<div class="meta">
									<span>Rp 8.000.000 - Rp 25.000.000.</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/fantasy.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Futuristic Fantasy</a></h3>
								<div class="meta">
									<span>Rp 12.000.000 - Rp 40.000.000.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

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

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>