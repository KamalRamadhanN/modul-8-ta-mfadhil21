<!doctype html>
<html l>
  <head>
    <title>registrasi</title>
  </head>
  <body>
    <form action="" method="POST">
    <label>Nama depan</label><br>
      <input type="text" placeholder="Nama depan" name="namad"><br>
    <label>Nama belakang</label><br>
      <input type="text" id="inputEmail3" placeholder="Nama belakang" name="namab"><br>
    <label>NIM</label><br>
      <input type="text" id="inputEmail3" placeholder="NIM" name="nim"><br>
    <label>Kelas</label><br>
      <input type="text" id="inputPassword3" placeholder="Kelas" name="kelas"><br>
    <label>Hobi</label><br>
      <input type="text" id="inputPassword3" placeholder="Hobi" name="hobi"><br>
        <label>Genre film</label><br>
        <input  type="checkbox" name="genre[]" value="Horor">
        <label>
          Horor
        </label><br>
        <input type="checkbox"name="genre[]" value="Anime">
        <label>
          Anime
        </label><br>
        <input type="checkbox" name="genre[]" value="Action">
        <label>
          Action
        </label><br>
        <input type="checkbox" name="genre[]" value="Drama">
        <label>
          Drama
        </label><br>
        <label>Tempat Wisata</label><br>
        <input type="checkbox" name="tw[]" value="Bali">
        <label>
          Bali
        </label><br>
        <input type="checkbox" name="tw[]" value="Tanjung solor">
        <label>
          Tanjung Selor
        </label><br>
        <input type="checkbox" name="tw[]" value="Jakarta">
        <label>
          Jakarta
        </label><br>
        <input type="checkbox" name="tw[]" value="Lombok">
        <label>
          Lombok
        </label><br>
    <label>Tanggal Lahir</label><br>
    <input type="Date" name="tgl">
      <button type="submit" name="submit">Simpan</button><br>
    <a href="dashboard.php">kembali</a>
  
</form>
  </body>
</html>

<?php 
  if (isset($_POST['submit'])) {
    $nama = $_POST['namad'];
    $nama = $_POST['namab'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $hobi = $_POST['hobi'];
    $genre = $_POST['genre'];
    $wisata = $_POST['wisata'];
    $tgl_lahir = $_POST['tgl'];
    $cek = true;
    if ($cek == true) {
      $genre_arr = implode(', ', $genre);
      $wisata_arr = implode(', ', $wisata);
      $check = mysqli_query($db, "INSERT INTO datauser VALUES('$username', '$nama', '$nim', '$kelas', '$hobi', '$genre_arr', '$wisata_arr', '$tgl') ");
      if (!$check) {
        "Database Error";
      }else{
        header('Location: dashboard.php');
      }
    }
  }
 ?>