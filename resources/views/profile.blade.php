<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Moon Wedding</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/profile.css" rel="stylesheet">
		<style>
			body {
				font-family: 'Poppins', sans-serif;
			}
		</style>
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
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0" style="padding: 10px;">
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
        <div style="border-top: 0.1px solid rgb(235, 227, 227); margin-top: -20px;"></div>
		<!-- End Header/Navigation -->

		<!-- Start Profile Section -->
		<div class="container">
    			<!-- PROFILE Text -->
    			<div class="text-center" style="margin-top: 20px;">
        				<h2>PROFILE</h2>
    			</div>
    			<!-- Profile Content -->
    			<div class="profile" style="margin-top: 20px;">
        		<!-- Profile Content Goes Here -->
    			</div>
		</div>
		
		<div class="container">
            <div class="profile" style="margin-top: 60px;">
                <div class="profile-left">
                    <div class="profile-image">
                        <img id="user-avatar" src="aku.jpg" alt="User Avatar" class="rounded-circle">
                    </div>
                    <div class="email">
                        <p>fatraayu17@gmail.com</p>
                        <div class="button-container">
                            <input type="file" id="upload-avatar" style="display:none;">
                            <button id="upload-avatar-btn" class="btn-upload">Upload Gambar</button>
                        </div>
                    </div>
                </div>
                <div class="profile-right">
                    <div class="form-group" style="margin-top: 15px;">
                        <label for="name" style="width: 150px;">Nama:</label>
                        <input type="text" id="name" name="name" value="Fatralia Della" style="width: 600px;">
                    </div>
                    <div class="form-group">
                        <label for="email" style="width: 150px;">Email:</label>
                        <input type="email" id="email" name="email" value="fatraayu17@gmail.com" style="width: 600px;">
                    </div>
                    <div class="form-group">
                        <label for="phone" style="width: 150px;">Nomor HP:</label>
                        <input type="text" id="phone" name="phone" value="08123456789" style="width: 600px;">
                    </div>
                    <div class="form-group">
                        <label for="address" style="width: 150px;">Alamat:</label>
                        <input type="text" id="address" name="address" value="Jalan Bunga No. 123" style="width: 600px;">
                    </div>
                    <div class="buttons">
                        <a href = "/edit_profile"><button id="edit-profile-btn">Edit</button></a>
                        <button id="save-profile-btn">Save</button>
                    </div>
            </div>
        </div>
    
        <script>
            $(document).ready(function(){
                $("#upload-avatar-btn").click(function(){
                    $("#upload-avatar").click();
                });
    
                $("#upload-avatar").change(function(){
                    var file = this.files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $("#user-avatar").attr("src", event.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            });
        </script>
		<!-- End Profile Section -->

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