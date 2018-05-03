<div align="center">
	<h3>Input barang jualan</h3>	
</div>
	<form method="post" action="<?php echo base_url()?>index.php/penjualan/input">
		<div align="center">
		<table>
			<tr>
				<td>No Nota</td>
				<td>:</td>
				<td><input type='text' name='nota' required></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type='date' name='tanggal' required></td>
			</tr>
			<tr>
				<td>Barang</td>
				<td>:</td>
				<td>
					<select name="kode_barang">
						<?php
				    	foreach($barang->result_array() as $b){
				    	?>
						<option value="<?php  echo $b['Kode_barang']; ?>"><?php  echo $b['Nama_barang']; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type='text' name='jumlah' required></td>
			</tr>
		</table>
		</div>
		<div align="center">
			<input type='submit' value='submit'>	
		</div>
	</form>
