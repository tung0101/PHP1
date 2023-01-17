<?php
  function pdo_con(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=duanmau", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn -> query("SET NAMES 'utf8'");
      return $conn;
    } catch(PDOException $e) {
      echo "Lỗi kết nối: " . $e->getMessage();
    }
  }

  function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try {
      $conn = pdo_con();
      $stmt = $conn->prepare($sql);
      $stmt -> execute($sql_args);
    } catch (PDOExceptiion $e) {
      throw $e;
    }finally{
      unset($conn);
    }
  }

  function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try {
      $conn = pdo_con();
      $stmt = $conn->prepare($sql);
      $stmt -> execute($sql_args);
      $rows = $stmt->fetchAll();
      return $rows;
    } catch (PDOExceptiion $e) {
      throw $e;
    }finally{
      unset($conn);
    }
  }


  function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try {
      $conn = pdo_con();
      $stmt = $conn->prepare($sql);
      $stmt -> execute($sql_args);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    } catch (PDOExceptiion $e) {
      throw $e;
    }finally{
      unset($conn);
    }
  }
?>