<html>
<head>
    <title>Test Teknikal Kazee</title>
</head>
<body>
    <h3 align=center>Login</h3>
    
    
    <br/>
    <br/>
    <form method="POST" action="login.php">
        <table align=center>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
        <br/>
        <br/> 
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div align=center> Login gagal! username dan password salah!</div>";
            }
            else if($_GET['pesan'] == "logout"){
                echo "<div align=center>Anda telah berhasil logout</div>";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "Login terlebih dahulu untuk mengakses halaman admin";
            }
        }
    ?>           
    </form>
</body>
</html>