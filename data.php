<?php 
class oop
{
  
  private $user;
  private $pass;
  private $email;
  private $que;
  private $connn;

  private $nd;
  private $nb;
  private $ni;
  private $cls;
  private $hb;
  private $gr;
  private $t;
  private $id;
  private $id2;

  function tambah1($user1,$pass2,$repas3,$email4)
  {
    
  include 'koneksi.php';
    
    if (!is_numeric($user1)) {
      $this->user = $user1;
    }
    if ($pass2==$repas3|| strlen($pass2)<=6) {
      $this->pass = $pass2;
    }else{
      echo "Password anda tidak sama";
    }
    if (preg_match("/@/",$email4)&&preg_match("/.com/",$email4)||preg_match("/.co.id/",$_POST['email'])) {
      $this->email = $email4;
    }
    if (isset($this->user)&&isset($this->pass)&&isset($this->email)) {
      $this->connn = $conn;
      $this->que = mysqli_query($this->connn,"INSERT INTO user(id, name, email, pass) VALUES ('','$this->user','$this->email','$this->pass')");
      if (!$this->que) {
        die("GAGAL");
      }else{
        echo "Berhasil";
        header("Location:index.php");
      }
    }
  
  }
}
$c = new oop();
if (isset($_POST['send'])) {
$c->tambah1($_POST['user'],$_POST['pass'],$_POST['repas'],$_POST['email']);
}