<!doctype html>
<html>
  <head>
    <title>registrasi</title>
  </head>
  <body>
    <form method="POST" ><br>
      <label>Username</label><br>
      <input type="text" placeholder="username" name="user"><br>
      <label>Password</label><br>
      <input type="password" placeholder="Password" name="pass"><br>
      <button type="submit"name="submit">Submit</button><br>
      <a href="regist.php">register</a><br>
    </form>
  </body>
</html>
<?php 
include 'koneksi.php';

if (isset($_POST['submit'])) {
  session_start();
  $que = mysqli_query($conn,"SELECT * FROM user");
  while ($acc = mysqli_fetch_array($que)) {
    if ($acc['name']==$_POST['user']&&$acc['pass']==$_POST['pass']) {
      $_SESSION['user'] = $acc['user'];
      $_SESSION['id'] = $acc['id'];
      header("Location:dashboard.php");
    }
  }
}
 ?>