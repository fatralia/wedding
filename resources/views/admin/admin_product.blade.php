<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/admin_web.css') }}" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<style>
    body {
        overflow-x: hidden; /* Mencegah scrolling horizontal */
    }
    
    .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #111;
        padding-top: 20px;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        color: white;
        display: block;
    }

    .sidebar a:hover {
        background-color: #575757;
    }

    .content {
        margin-left: 260px;
        padding: 20px;
    }

    .navbar-logo {
        height: 30px;
    }

    .profile-image {
        height: 30px;
    }

    .update-text {
        font-size: 24px;
        margin: 20px 0;
    }
    
    .table-wrapper {
        overflow-x: auto; /* Mengaktifkan scrolling horizontal jika tabel terlalu lebar */
    }
    
    table {
        width: 100%;
    }
</style>

</head>
<body>
<nav class="navbar navbar-inverse" style="z-index: 1">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo" class="navbar-logo"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="home-nav" style="margin-right: 10rem"><a href="/auth/logout" class="navbar_home">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="sidebar">
    <a href="/admin/user" style="margin-top: 4rem">User</a>
    <a href="/admin/pesanan">Pesanan</a>
    <a href="/admin/product">Product</a>
</div>

<div class="content">
    <div class="container">
        @if (Session::has('success'))
            <div class="pt-3">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif
        <div class="update-text">PRODUCT</div>
        <!-- Table Content -->
    </div>

    <div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>List <b>Product</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href='#addEmployeeModal' class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Produk</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Category</th>
                        <th>Harga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category == '1' ? 'Pre Wedding' : ($item->category == '2' ? 'Wedding Decoration' : 'Wedding Package') }}</td>
                        <td>{{ $item->min }} - {{ $item->max }}</td>
                        <td>
                            <a href="#editEmployeeModal{{ $item->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal{{ $item->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>

                    <div id="deleteEmployeeModal{{ $item->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/admin/product/{{ $item->id }}" method="GET">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete these Records?</p>
                                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="editEmployeeModal{{ $item->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action='/admin/product/{{ $item->id }}' method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="{{$item->name}}" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="category" aria-label="Default select example">
                                                <option value="" disabled>Pilih Kategori</option>
                                                <option value="1" {{$item->category == '1' ? 'selected' : ''}}>Pre Wedding</option>
                                                <option value="2" {{$item->category == '2' ? 'selected' : ''}}>Wedding Decoration</option>
                                                <option value="3" {{$item->category == '3' ? 'selected' : ''}}>Wedding Package</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Detail</label>
                                            <textarea class="form-control" name="detail" required>{{$item->detail}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Minimal</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp.</span>
                                                <input type="text" onkeypress="return isNumber(event)" value="{{$item->min}}" class="form-control" name="min" required>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <label>Harga Maksimal</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp.</span>
                                                <input type="text" onkeypress="return isNumber(event)" value="{{$item->max}}" class="form-control" name="max" required>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" accept="image/*" name="picture">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action='' method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="category" aria-label="Default select example">
                                <option value="" selected disabled>Pilih Kategori</option>
                                <option value="1">Pre Wedding</option>
                                <option value="2">Wedding Decoration</option>
                                <option value="3">Wedding Package</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea class="form-control" name="detail" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Harga Minimal</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" onkeypress="return isNumber(event)" class="form-control" name="min" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga Maksimal</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" onkeypress="return isNumber(event)" class="form-control" name="max" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" accept="image/*" name="picture" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function isNumber(evt) {
            var charCode = evt.which ? evt.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
            return true;
        }
</script>
</html>
