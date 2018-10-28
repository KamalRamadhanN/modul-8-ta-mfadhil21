<?php 
include 'koneksi.php';

session_start();
$id = $_SESSION['id'];
$que = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
 while ($ac = mysqli_fetch_array($que)) {
 
 ?>
 <!doctype html>
<html>
  <head>
    <title>PROFIL</title>
  </head>
  <body>
    <form method="POST" >
      <center>
        <img class="card-img-top" src=<?php if(empty($ac['foto'])){echo "gambar/awal.jpg";}else{echo "gambar/".$ac['foto'];}?>>
          <a href="fotoo.php">GANTI</a>
      </center>
          <label>Username</label><br>
          <input type="text" id="formGroupExampleInput" placeholder="Masukkan Username.." disabled name="user" value=<?php echo $ac['name'];  ?>><br>
          <label>Password</label><br>
          <input type="text" id="formGroupExampleInput" placeholder="Masukkan Password"  name="pass" value=<?php echo $ac['pass'];  ?>><br>
          <label>Email address</label><br>
          <input type="email" id="exampleInputEmail1" placeholder="Masukkan Email.." name="email" value=<?php echo $ac['email'];  ?>><br>
          <button type="submit"name="submit">GANTI</button><br>
          <a href="dashboard.php" class="card-link">kembali</a>
    </form>
  </body>
</html>
<?php 

} 
if (isset($_POST['submit'])) {
	if (preg_match("/@/",$_POST['email'])&&preg_match("/.com/",$_POST['email'])||preg_match("/.co.id/",$_POST['email'])) {
			$email = $_POST['email'];
    }
    if (strlen($_POST['pass'])<=6) {
			$pass = $_POST['pass'];
		}
	$query = mysqli_query($conn,"UPDATE user SET pass='$pass',email = '$email' WHERE id='$id'");
	if ($query) {
    echo "BERHASIL";
    header("Location:profil.php");
	}
}

?>