<!DOCTYPE html>
<html>
<head>
	<title>Update Mahasiswa-2062</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php include("Config.php");?>
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation" class="active"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form class="form-horizontal" method="post">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="NIM" name="nim">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" name="submit">Cari Mahasiswa</button>
					</div>
  				</div>
			</form>

			<?php 
			if (isset($_POST['submit'])) {
				$id_mhs=$_POST['id_mhs'];
				$query="Select * from mahasiswa where id_mhs='$id_mhs";
				$hasil=mysqli_query($conn, $query);
				if($hasil==true) {
					foreach ($hasil as $value) {
						$nim=$value['NIM'];
						$nama=$value['Nama_mhs'];
						?>
						<form class="form-horizontal" method="post">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" value="<?php echo "$nim";?>" placeholder="NIM">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" value="<?php echo "$nama";?>" placeholder="Nama" name="nama">
									<input type="hidden" name="id_mhs" value=<?php echo "$id_mhs";?>>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success" name="update">Update</button>
								</div>
							</div>
						</form>
						<?php
						}
					}
				}
			?>
			
		</div>
	</div>
	
	<?php
		if (isset($_POST['update'])) { 
			$nim_update=$_POST['nim'];
			$nama_update=$_POST['nama'];
			$query="update mahasiswa set NIM='$nim_update', Nama_mhs='$nama_update'";
			$update=$conn->query($query);
			if($update==true) {
				?>
				<script type="text/javascript">alert('Data berhasil diupdate!');</script>
				<?php
			}
		}
	?>
			
		</div>
	</div>
</body>
</html>