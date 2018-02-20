<?php  
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=$title.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>

<table border="1" width="100%">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA JENIS</th>
			<th>NAMA BARANG</th>
			<th>STOK</th>
			<th>CREATED AT</th>
			<th>UPDATED AT</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; foreach($gudang->result() as $row){ ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row->nama_jenis; ?></td>
			<td><?php echo $row->nama_barang; ?></td>
			<td><?php echo $row->stok; ?></td>
			<td><?php echo date("Y-m-d", strtotime($row->created_at)); ?></td>
			<td><?php echo date("Y-m-d", strtotime($row->updated_at)); ?></td>
		</tr>
		<?php $i++; } ?>
	</tbody>
</table>