<?php
	include "koneksi.php";
	if (isset($_GET['id_user'])) {
		$id_user = $_GET['id_user'];
	}
	else {
		die ("Error");	
	}
	$query	=mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
	$data	=mysqli_fetch_array($query);
	$notid_user	=$data['id_user'];
	
	if ($_POST['Simpan'] == "Simpan") {
	$id_user	=$_POST['id_user'];
	$username	=$_POST['username'];
    $password   =$_POST['password'];
    $nama       =$_POST['nama'];
	
	$cek_id_user =mysqli_num_rows (mysqli_query($koneksi, "SELECT id_user FROM user WHERE id_user='$_POST[id_user]' AND id_user!='$notid_user'"));
	
	if($cek_id_user > 0) {
	?>
		<script language="JavaScript">
			alert('id user sama');
			document.location='form-edit.php?id_user=<?=$id_user?>';
		</script>
	<?php
	}
	else{
		$update =mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', nama='$nama' WHERE id_user='$id_user'");
		?>
			<script language="JavaScript">
			alert('Data username <?=$username?> berhasil diupdate');
			document.location='./';
			</script>
		<?php
	}
}
?>