<html>
<head>
    <title>Test Teknikal Kazee</title>
</head>
<body>
    <h2>Halaman Admin</h2>
    <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <br/>
    <a href="form-tambah.php"><button>Tambah User Baru</button></a>
    <br/>
    <br/>
    <table border="1" cellpadding="2">
		<thead>
			<tr>			
				<th>No</th>
                <th>ID User</th>
				<th>Username</th>
				<th>Paswsword</th>
				<th>Nama</th>
                <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$query	=mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
				$no=0;
				while($data	=mysqli_fetch_array($query)){
				$no++
			?>
			<tr>			
				<td><?php echo $no?></td>
                <td><?php echo $data['id_user']?></td>
				<td><?php echo $data['username']?></td>
				<td><?php echo $data['password']?></td>
				<td><?php echo $data['nama']?></td>
				<td><a href="form-edit.php?id_user=<?=$data['id_user']?>">Edit</a> | 
                    <a href="hapus.php?id_user=<?=$data['id_user']?>" onclick="return confirm('Setuju menghapus data? == <?php echo $data['username']?> == dari database?');">Hapus</a></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
    <br/>
    <a href="logout.php"><button>LOGOUT</button></a>
</body>
</html>