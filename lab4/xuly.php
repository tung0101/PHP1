<?php
  if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user === "admin" && $pass === "abc123"){
      echo "Đăng nhập thành công";
    }else{
      echo "Đăng nhập không thành công";
    }
  }
?>