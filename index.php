<!DOCTYPE html>
<html>
<head>
	<title> Membuat form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">


	
</head>
<body>

	 <?php
 //tambahkan dbconnect
 include('simpan.php');

 //query
 $query = "SELECT * FROM form1";

 $result = mysqli_query($conn , $query);

 ?>

 
   <div class="container">		
     <h1>Silahkan Isi Form Dibawah Ini</h1> 
		   <form class="form-horizontal" action="tambah.php" 	 method="POST" >
		   	<!-- input data untuk nama -->
				<div class="form-group">
					<label input data l class="control-label col-sm-2" for="nama">Nama</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama">
					</div>
				</div>
				<!-- input data untuk jenis kelamin tinggal memilih  -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="j_kelamin" >Jenis Kelamin:</label>
					 <br>
						<select class="form-control col-sm-9 " style="margin-left: 15px;" name="j_kelamin">
					 	<option value="laki-laki" type="radio" class="form-control">Laki Laki</option>
					 	<option value="perempuan" type="radio">perempuan</option>
					 </select>
				</div>
				<!-- input data untuk alamat -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="alamat">Alamat </label>
					<div class="col-sm-9">
						<textarea type="text" class="form-control" name="alamat"></textarea>
					</div>
				</div>
				<!-- input data untuk gambar -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="poto">Gambar:</label>
					<div class="col-sm-9">
						<input type="file" name="poto" class="form-control">
					</div>
				</div>		
				<button type="submit" class="btn btn-danger">Simpan</button>
			</form>		
	</div>

		<center>
				<div class="col-sm-8">
				    <h3>Tabel Daftar input</h3>
				    <table class="table table-striped table-hover dtabel">
				     <thead>
				      <tr>
				       <th>No</th>
				       <th>Nama</th>
				       <th>Jenis Kelamin</th>
				       <th>Alamat</th>
				       <th>Gambar</th>
				       <th>Aksi</th>
				      </tr>
				     </thead>
				     <tbody> 

						<?php
				       $no = 1;  
				       while ($row = mysqli_fetch_assoc($result)) {
				      ?>
				      <tr>
				       <td><?php echo $no++; ?></td>
				       <td><?php echo $row['nama']; ?></td>
				       <td><?php echo $row['j_kelamin']; ?></td>
				       <td><?php echo $row['alamat']; ?></td>
				       <td><?php echo $row['poto']; ?></td>
				       <td>
				        <a href="delet.php?id=<?php echo $row['id']?>" class="btn btn-danger" role="button">Delete</a>
				       </td>
				      </tr>

				      <?php
				       }
				       mysqli_close($conn); 
				      ?>
				     </tbody>
				    </table>
				   </div>
				  </div>
				 </div>
				</body>
		</body>
 		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
				 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
				 <script>
				 $(document).ready(function() {
				  $('.dtabel').DataTable();
				 } );
				 </script>
		</center>
</html>
