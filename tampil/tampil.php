<!DOCTYPE html>
<html>
  <head>
    <title>Hasil Login</title>
    <link rel-"stylesheet" href-"style.css" type-"text/css">
  </head>
  <body>
    
 <?php
$nama = $_POST["username"]:
$email = $_POST["email"]:   
    
?>
<form action-"tampil.php" method="POST">
  <h2>Selamat Anda Berhasil login </h2>
  <div class-"imgcontainer">
    <img src-"icon.png" alt-"Avatar" class"avatar">
  </div>
  
  <div class-"container">
    <label><b>Username : <7php echo $nama;7></b></
      label><br><br>
      
      <label><b>Password : <7php echo $email;7></b></label>
        </div>
      
      <div class-"container" style-"background-color:#f1f1f1">
      </div>
      </form>
    </body>
  </html>          
