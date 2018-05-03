<div align="center">
	<h3> Daftar Barang</h3>	
</div>
<table border=1 align="center">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			foreach ($barang->result_array() as $brg){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $brg['Kode_barang']  ?></td>
			<td><?php echo $brg['Nama_barang']  ?></td>
			<td><?php echo $brg['Harga']  ?></td>
			<td>
				<button type="submit" name="update" style="border: none; margin: 0 15px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/C_barang/ubah/<?php echo $brg['Kode_barang'] ?>" style="text-decoration: none; color: black;">Update</a></button>
				<button type="submit" name="delete" style="border: none; margin: 0 15px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/C_barang/hapus/<?php echo $brg['Kode_barang'] ?>" style="text-decoration: none; color: black;">Delete</a></button>
			</td>
		</tr>
	</tbody>
	<?php
		}
	?>
</table><br>
<div>
	<center>
		<button type="submit" name="Tambah" style="margin: 0 15px; padding: 0 10px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/inputbarang" style="text-decoration: none; color: black;">Tambah Data</a></button>	
		<button type="submit" name="Tambah" style="margin: 0 15px; padding: 0 10px; border-radius: 5px;"><a href="<?php echo base_url()?>index.php/Home" style="text-decoration: none; color: black;">Kembali</a></button>
	</center>	
</div>




