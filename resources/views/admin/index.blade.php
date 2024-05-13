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
<link href="{{ asset('css/admin_web.css') }}" rel="stylesheet" type="text/css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  
  <body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo" class="navbar-logo"></a> <!-- Logo di sebelah kiri -->
        </div>
        <ul class="nav navbar-nav navbar-right">
        <li class="home-nav"><a href="#" class="navbar_home">Home</a></li> <!-- Tombol home di sebelah kanan -->
            <li><a href="#"><img src="profile.png" alt="Profile" class="profile-image"></a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @if (Session::has('success'))
        <div class = "pt-3">
            <div ".alert.alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    @endif ()
    <div class="text-center update-text">PESANAN</div> <!-- Teks di tengah -->
    <!-- Table Content -->
</div>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>List <b>Pesanan</b></h2>
					</div>
					<div class="col-sm-6">
						<a href='#addEmployeeModal' class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Pesanan</span></a>
						{{-- <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 --> --}}
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Nama</th>
                        <th>Pesanan</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No.Hp</th>
                        <th>Tanggal</th>
                        <th>Bukti</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($data as $item)
                    
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->pesanan }}</td>
                        <td>{{$item->email}}</td>
						<td>{{$item->alamat}}</td>
                        <td>{{$item->no_hp}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td><button class="btn btn-primary">Lihat Bukti</button></td>
                        <td>
                            <a href= "#editEmployeeModal{{$item->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal{{$item->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>

                    <div id="deleteEmployeeModal{{$item->id}}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="admin_web/delete/{{$item->id}}" method="GET">
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

                    <div id="editEmployeeModal{{$item->id}}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action='admin_web/edit/{{$item->id}}' method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Edit Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">					
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name = 'nama' id = "nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pesanan</label>
                                            <input type="text" class="form-control" name = 'pesanan' id = "pesanan" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name = 'email' id = "email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name = 'alamat' id = "alamat" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No Handphone</label>
                                            <input type="text" class="form-control" name = 'no_hp' id = "no_hp" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Tanggal</label>
                                            <input type="text" class="form-control datepicker" name = 'tanggal' id="tanggal"required>
                                            <script>
                                                $(document).ready(function(){
                                                $('.datepicker').datepicker({
                                                format: 'yyyy/mm/dd',
                                                autoclose: true
                                                });
                                                });
                                            </script>				
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-info" value="Save">
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
				<form action='{{ route('admin.create') }}' method="POST">
                @csrf 
					<div class="modal-header">						
						<h4 class="modal-title">Tambah Pesanan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name = 'nama' id="nama" required>
						</div>
                        <div class="form-group">
							<label>Pesanan</label>
							<input type="text" class="form-control" name = 'pesanan' id="pesanan" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name = 'email' id="email"required>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name = 'alamat' id="alamat"required></textarea>
						</div>
						<div class="form-group">
							<label>Nomor Handphone</label>
							<input type="text" class="form-control" name = 'no_hp' id="no_hp"required>
						</div>
                        <div class="form-group">
                            <label>Pilih Tanggal</label>
                            <input type="text" class="form-control datepicker" name = 'tanggal' id=""required>
                            <script>
                                $(document).ready(function(){
                                $('.datepicker').datepicker({
                                format: 'yyyy/mm/dd',
                                autoclose: true
                                });
                                });
                            </script>

                        </div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Delete Modal HTML -->
	
</body>
</html>