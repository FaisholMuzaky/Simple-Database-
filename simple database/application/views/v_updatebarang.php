<div align="center">
	<h3>Update barang</h3>	
</div>
<div align="center">
	<form method="post" action="<?php echo base_url()?>index.php/C_barang/update/<?php echo $Kode_barang;?>">
		<table>
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type='text' name='kode_barang' disabled value="<?php echo $Kode_barang;?>"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type='text' name='nama_barang' required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type='text' name='harga' required></td>
			</tr>
		</table>
		<div align="center">
			<input type='submit' value='submit'>	
		</div>
	</form>
</div>