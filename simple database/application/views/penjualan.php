<!DOCTYPE html>
<html>
<head>
	<title>Faishol Muzaky Dwi Putra | 1301160369</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="<?= base_url() ?>">Barang</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url() ?>index.php/home/penjualan">Penjualan</a>
	      </li>
	    </ul>
	  </div>
	</div>
	</nav>

	<br><br>

	<div class="container">
		<h1>Kelola Penjualan</h1>
		<br>
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Penjualan</a>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Penjualan</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="<?= base_url() ?>index.php/home/tambah_penjualan">
	        	  <div class="form-group">
				    <label>Nomor Nota</label>
				    <input type="text" class="form-control" placeholder="Masukkan nomor nota" name="no_nota">
				  </div>
				  <div class="form-group">
				    <label>Tanggal</label>
				    <input type="text" class="form-control" placeholder="Masukkan tanggal" name="tanggal">
				  </div>
				  <div class="form-group">
				    <label>Barang</label>
				    <select class="form-control" name="kode_barang">
				    	<?php
				    	foreach($barang->result() as $b){
				    	?>
					    	<option value="<?= $b->kode_barang ?>"><?= $b->nama_barang ?></option>
				    	<?php
					    }
					    ?>
				    </select>
				  </div>
				    <div class="form-group">
				    <label>Jumlah</label>
				    <input type="number" class="form-control" placeholder="Masukkan jumlah" name="jumlah">
				  </div>
				  <button type="submit" class="btn btn-primary btn-block">Tambah</button>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>


		<hr>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nomor Nota</th>
					<th>Tanggal</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach($penjualan->result() as $p){
				?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $p->no_nota ?></td>
					<td><?= $p->tanggal ?></td>
					<td><?= $p->nama_barang ?></td>
					<td><?= $p->jumlah ?></td>
					<td>
						<div class="btn-group">
							<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#<?= $p->no_nota ?>exampleModal">Edit</a>
							<a href="<?= base_url() ?>index.php/home/delete_penjualan/<?= $p->no_nota ?>" class="btn btn-sm btn-danger">Delete</a>
						</div>
					</td>
				</tr>
				<div class="modal fade" id="<?= $p->no_nota ?>exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Penjualan</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form method="POST" action="<?= base_url() ?>index.php/home/edit_penjualan">
			        	  <div class="form-group">
						    <label>Nomor Nota</label>
						    <input type="text" class="form-control"  value="<?= $p->no_nota ?>" disabled>
						    <input type="hidden" value="<?= $p->no_nota ?>" name="no_nota">
						  </div>
						  <div class="form-group">
						    <label>Tanggal</label>
						    <input type="text" class="form-control" placeholder="Masukkan tanggal" value="<?= $p->tanggal ?>" name="tanggal">
						  </div>
						  <div class="form-group">
						    <label>Barang</label>
						    <select class="form-control" name="kode_barang">
						    	<?php
						    	foreach($barang->result() as $b){
						    		if($b->kode_barang == $p->kode_barang){
						    	?>
							    	<option value="<?= $b->kode_barang ?>" selected><?= $b->nama_barang ?></option>
						    	<?php
						    		} else {
						    	?>
						    		<option value="<?= $b->kode_barang ?>"><?= $b->nama_barang ?></option>
						    	<?php
						    		}
							    }
							    ?>
						    </select>
						  </div>
						    <div class="form-group">
						    <label>Jumlah</label>
						    <input type="number" class="form-control" placeholder="Masukkan jumlah" value="<?= $p->jumlah ?>" name="jumlah">
						  </div>
						  <button type="submit" class="btn btn-primary btn-block">Edit Sekarang</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
