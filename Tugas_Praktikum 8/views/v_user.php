<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach($mahasiswa as $u){ ?>
		<tr>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->gender ?></td>
			<td><?php echo $u->ipk?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>