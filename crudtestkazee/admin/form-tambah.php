<html>
<head>
	<title>Test Teknikal Kazee</title>
</head>
<body>
	<h2>Form Tambah User</h2>
	<form action="tambah.php" method="POST">
		<table>
			<tr>			
				<td width="100">ID_user</td>
				<td><input type="text" name="id_user" maxlength="16" size="50"/></td>
			</tr>
			<tr>			
				<td>Username</td>
				<td><input type="text" name="username" maxlength="128" size="50"/></td>
			</tr>
			<tr>			
				<td>Password</td>
				<td><input type="text" name="password" maxlength="128" size="50"/></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama" maxlength="16" size="50"/></td>
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