<div align="center">
	<h3> Kelola penjualan </h3>	
</div>
<table border=1 align="center">
	<thead>
		<tr>
			<th>No</th>
			<th>No Nota</th>
			<th>Tanggal</th>
			<th>Kode barang</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			foreach ($penjualan as $pjl){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $pjl->no_nota  ?></td>
			<td><?php echo $pjl->tanggal ?></td>
			<td><?php echo $pjl->kode_barang  ?></td>
			<td><?php echo $pjl->nama_barang  ?></td>
			<<td><?php echo $pjl->jumlah  ?></td>
			<td>
				<button type="submit" name="update" style="border: none; margin: 0 15px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/penjualan/ubah/<?php echo $pjl->no_nota ?>" style="text-decoration: none; color: black;">Update</a></button>
				<button type="submit" name="delete" style="border: none; margin: 0 15px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/penjualan/hapus/<?php echo $pjl->no_nota ?>" style="text-decoration: none; color: black;">Delete</a></button>
			</td>
		</tr>
	</tbody>
	<?php
		}
	?>
</table><br>
<div>
	<center>
		<button type="submit" name="update" style="border: none; margin: 0 15px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/penjualan/tambah" style="text-decoration: none; color: black;">Tambah Data</a></button>	
		<button type="submit" name="Tambah" style="margin: 0 15px; padding: 0 10px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/Home" style="text-decoration: none; color: black;">Kembali</a></button>
	</center>	
</div>




