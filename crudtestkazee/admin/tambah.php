<?php
	include "koneksi.php";
	if ($_POST['Simpan'] == "Simpan") {
    $id_user	=$_POST['id_user'];
    $username	=$_POST['username'];
    $password   =$_POST['password'];
    $nama       =$_POST['nama'];
	
	$cek_id_user =mysqli_num_rows (mysqli_query($koneksi, "SELECT id_user FROM user WHERE id_user='$_POST[id_user]'"));
	
	if($cek_id_user > 0) {
	?>
		<script language="JavaScript">
			alert('id user sama');
			document.location='form-tambah.php?id_user=<?=$id_user?>';
		</script>
	<?php
	}
	else{
		$insert =mysqli_query($koneksi, "INSERT INTO user (id_user, username, password, nama) VALUES ('$id_user', '$username', '$password', '$nama')");
		?>
			<script language="JavaScript">
			alert('Data user baru berhasil dibuat');
			document.location='./';
			</script>
		<?php
		}
	}
?>