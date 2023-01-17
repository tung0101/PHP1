<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="wrapper">
    <div class="title">Bảng sản phẩm</div>
    <div class="list">
      <div class="row header">
        <p class="no">id</p>
        <p class="noname">Tên sản phẩm</p>
        <p class="status">Hình</p>
        <p class="ordering">Đơn giá
        </p>
        <p class="soluong">Số lương</p>
        <p class="thanhtien">Thành tiền</p>
        <p class="idbill">idbill</p>
      </div>

      <?php
      $connect = mysqli_connect('localhost', 'root', '', 'shop1');
      if (!$connect) {
        die('<h3>Fail</h3>');
      }

      mysqli_query($connect, "SET NAMEs 'utf8'");
      mysqli_query($connect, "SET CHARACTER SET 'utf8'");
      mysqli_set_charset($connect, "utf8");
      $resutl = mysqli_query($connect, 'SELECT * FROM `tbl_cart`');
      $i = 1;
      $xhtml = '';
      while ($row = mysqli_fetch_assoc($resutl)) {
        $class = ($i % 2 == 0) ? "odd" : "even";
        $xhtml .= '<div class="row header' . $class . '">
        <p class = "no">' . $i . '</p>
        <p class = "noname">' . $row['tensp'] . '</p>
        <p class = "status"><img src="images/'. $row['hinhsp'] . '" alt="" width="50px" height="70px"></p>
        <p class = "ordering">' . $row['dongia'] . '</p>
        <p class = "soluong">' . $row['soluong'] . '</p>
        <p class = "thanhtien">' . $row['thanhtien'] . '</p>
        <p class = "idbill">' . $row['idbill'] . '</p>
        </div>';
        $i++;
      }
      echo $xhtml;
      mysqli_close($connect)

      ?>
    </div>
  </div>
</body>

</html>