<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" type="text/css" href="styleinfo.css">
</head>
<body>
   
</body>
</html>
<?php
session_start();
?>
<?php
if (isset($_SESSION['submit'])) {
      ?>
      <div class="boxer">
  <?php         
       echo "<br>Xin chào bạn :".$_SESSION['submit'];  
}
?>
 <br> <a href="login.php">Đăng xuất</a>
</div>
