<?php 
include 'koneksi.php';
session_start();
$id= $_SESSION['id'];
$que = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
$kuee = mysqli_query($conn,"SELECT * FROM data WHERE id='$id'");
$ac = mysqli_fetch_array($que);
 ?>
<!doctype html>
<html>
  <head>
    <title>regis</title>
  </head>
  <body>
  <center>
  <img src=<?php if(empty($ac['foto'])){echo "gambar/awal.jpg";}else{echo "gambar/".$ac['foto'];}?>>
    <h5><?php echo $ac['name']; ?></h5>
    <h6><?php echo $ac['email']; ?></h6>
    <a href="profil.php">PROFIL</a>
    <a href="newdata.php">DATA BARU</a>
    <a href="index.php">LOG OUT</a>
        
        <h3>DATA DIRI</h3>
              <table border="1">
                   <thead>
                     <th>Nama Depan</th>
                     <th>Nama Belakang</th>
                     <th>NIM</th>
                     <th>Kelas</th>
                     <th>Hobi</th>
                     <th>Genre Film</th>
                     <th>Tempat Wisata</th>
                     <th colspan="2">Aksi</th> 
                   </thead>
                    <tbody>
                      <?php while($tam = mysqli_fetch_array($kuee)){ $nm = $tam['Nim'];?>
                      <tr>  
                        <td><?php echo $tam['nama_depan'];?></td>
                        <td><?php echo $tam['nama_belakang'];?></td>
                        <td><?php echo $tam['Nim'];?></td>
                        <td><?php echo $tam['kelas'];?></td>
                        <td><?php echo $tam['hobi'];?></td>
                        <td><?php echo $tam['genre'];?></td>
                        <td><?php echo $tam['tempat'];?></td>
                        <td><?php echo $tam['tgl_lahir'];?></td>
                        <td><a href=<?php echo "editdata.php?nim=".$nm;?>>edit</a>
                        <td><a href=<?php echo "simpan.php?nim=".$nm;?>>delete</a>
                      </tr>
                      <?php } ?>
                    </tbody>      
              </table>
  </center>
  </body>
</html>



