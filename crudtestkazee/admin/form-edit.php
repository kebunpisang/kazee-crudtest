<?php
	if (isset($_GET['id_user'])) {
		$id_user = $_GET['id_user'];
	}
	else {
		die ("Error id salah ");	
	}
	include "koneksi.php";
	$query	=mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
	$data	=mysqli_fetch_array($query);
?>
<html>
<head>
	<title>Test Teknikal Kazee</title>
</head>
<body>
	<h2>Form Edit Data User</h2>	
	<form action="edit.php?id_user=<?=$id_user?>" method="POST">
		<table>
			<tr>			
				<td width="100">ID User</td>
				<td><input type="text" name="id_user" readonly="readonly" maxlength="16" size="50" value="<?php echo $data['id_user']?>"/></td>
			</tr>
			<tr>			
				<td>Username</td>
				<td><input type="text" name="username" maxlength="128" size="50" value="<?php echo $data['username']?>"/></td>
			</tr>
			<tr>			
				<td>Password</td>
				<td><input type="text" name="password" maxlength="128" size="50" value="<?php echo $data['password']?>"/></td>
			</tr><tr>			
				<td>Nama</td>
				<td><input type="text" name="nama" maxlength="128" size="50" value="<?php echo $data['nama']?>"/></td>
			</tr>
			<tr>			
				<td></td>
				<td><input type="submit" name="Simpan" value="Simpan" />&nbsp;
                    <input type="button" value="Kembali" onclick="history.back(-1)" /></td>
			</tr>
		</table>
	</form>
</body>
</html>