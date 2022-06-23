<?php
	include "koneksi.php";
	if (isset($_GET['id_user'])) {
		$id_user	=$_GET['id_user'];
	}
	else{
		echo "Error";
	}
	
	if (!empty($id_user) && $id_user != "") {
		$hapus =mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user'");
			?>
				<script language="JavaScript">
				alert('Data user berhasil dihapus');
				document.location='./';
				</script>
			<?php		
	}
?>