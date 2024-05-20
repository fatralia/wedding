<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/sign.css') }}" rel="stylesheet" type="text/css" >
<style>
    body {
        background-image: url({{asset('background.jpg')}});
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: bottom;
    }

    body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Warna hitam transparan */
    backdrop-filter: blur(0.3px);
}
</style>
</head>

<body>
<div class="form-bg">
    <div class="content">
        <div class="container">
            @if (Session::has('gagal'))
                <div class="pt-3">
                    <div class="alert alert-danger alert-block" style="z-index: 1">
                        {{ Session::get('gagal') }}
                    </div>
                </div>
            @endif
        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <form class="form-horizontal" action="/auth/sign" method="POST">
                        @csrf
                        <h3 class="title">Sign Up</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" name="email" type="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" name="password" type="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required>
                        </div>
                        <button class="btn signin" type="submit">Sign Up
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>