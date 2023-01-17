<?php include '../controller/xulysp.php' ?>
<?php

// Thêm vào dữ liệu trong mysql
if (isset($_POST['update-data'])) {
  $id_Product = isset($_GET['edit']) ? $_GET['edit'] : ""; // id của sản phẩm
  $nameProduct = $_POST['name-product'];
  $price = $_POST['price'];
  $picture = $_POST['pciture'];
  $describe = $_POST['describe'];

  $command_Data = "UPDATE `tbl_product` SET `name`='$nameProduct',`img`='$picture',`price`='$price',`mota`='$describe' WHERE `id`='$id_Product'";
  $query_Data = mysqli_query($connect, $command_Data);
}
// xóa dữ liệu trong mysql
$buttonDelete = isset($_GET['delete']) ? $_GET['delete'] : "";
if ($buttonDelete > 0) {
  // quay lai trang sau khi nhập dữ liệu xong
  $checkDelete = isset($_GET['delete']) ? header("Location: sp.php") : "";
  echo $checkDelete;

  $command_Delete = "DELETE FROM `tbl_product` WHERE `id`='$buttonDelete'";
  $query_Delete = mysqli_query($connect, $command_Delete);
}
// quay lại trang ban đầu
$checkl = isset($_POST["back"]) ? header("Location: sp.php") : "";

// quay lại trang sau khi nhập dữ liệu xong
$check2 = isset($_POST["update-data"]) ? header("Location: sp.php") : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="../src/css/style.css">
  <link rel="stylesheet" href="../src/css/responsive.css">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter&display=swap" rel="stylesheet">
  <script src="./src/js/main.js"></script>
  <link rel="stylesheet" href="../src/css/bootstrap.min.css">
  <link rel="stylesheet" href="../src/css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../src/css/sp.css">
</head>

<body>

</body>
<div class="container">
  <header>
    <div class="logo">
      <a href="index.html" class="navbar-brand">
        <img src="../src/img/index/logo-png.png" alt="logo">
        <h2 style="color: #F54748; font-weight: 700; margin-bottom: 20px;">Soul Burger</h2>
      </a>
    </div>
    <img class="list-icon" src="./src/img/index/list-icon.png" alt="">
    <div class="header-item">
      <div class="header-item-box">
        <img src="./src/img/index/close-icon.png" alt="" class="close-icon">
        <div class="menu">
          <ul>
            <li><a href="./info.php">Admin
              </a></li>
            <li><a href="./sp.php">Danh mục sản phẩm</a></li>
            <li><a href="#3">Tin nhắn
              </a></li>
            <li><a href="#1">Cài đặt
              </a></li>
          </ul>
        </div>
        <div class="authenticate">
          <a href="./cart.html"><img src="./src/img/index/cart.png" alt=""></a>
          <a href="./login.php" class="button" id="signin-btn">Đăng xuất</a>
        </div>
      </div>
    </div>
  </header>
  <div class="main">
    <h2>Danh Sách Sản Phẩm</h2>
    <table border="0">
      <tr>
        <td colspan="3">Danh sách sản phẩm</td>
        <td colspan="3" style="text-align: right;">
          <a href="?edits=<?php echo $row['id'] ?>#box-edits">
            <button class="button-edit" style="width: 150;"><span>Thêm</span></button>
          </a>
        </td>
      </tr>
      <tr>
        <td>ID</td>
        <td>Tên Sản Phẩm</td>
        <td>Ảnh</td>
        <td>Giá</td>
        <td>Loại</td>
        <td>Chỉnh Sửa</td>
      </tr>
      <?php foreach ($var = show() as $key => $value) : ?>
        <tr>
          <td><?Php echo $value['id'] ?></td>
          <td><?Php echo $value['name'] ?></td>
          <td><img src="../src/img/sp/<?php echo $value['img'] ?>" alt="" style="width: 100px; height: 100px;"></td>
          <td><?Php echo $value['price'] ?>.000 VND</td>
          <td><?Php echo $value['mota'] ?></td>
          <td>
            <a href="?edit=<?php echo $value['id'] ?>#box-edit">
              <button class="button-edit"><span>Sửa</span></button>
            </a>
            <a href="?delete=<?php echo $value['id'] ?>">
              <button class="button-delete"><span>Xóa</span></button>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
    <div class="box-2">

      <?php
      // nếu lấy được id của sản phẩm thì chuyển xuống form edit
      $checkButton = isset($_GET['edit']) ? $_GET['edit'] : "";

      if ($checkButton > 0) {
      ?>
        <h2 style="text-align: center;">Chỉnh Sửa Sản Phẩm</h2>
        <form id="box-edit" method="post" style="width: 600px; margin-top: 20px;">
          <div class="title">
            <h2>Chỉnh Sửa</h2>
            <button name="back">Quay lại</button>
          </div>
          <div class="in-form">
            <div class="style-input">
              <label for="">Tên Sản Phẩm</label>
              <input type="text" name="name-product" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="style-input">
              <label for="">Giá</label>
              <input type="text" name="price" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="style-input">
              <label for="">Ảnh sản phẩm</label>
              <input type="text" name="pciture" id="" placeholder="Nhập địa chỉ liên kết ảnh">
            </div>
            <div class="style-input">
              <label for="">Loại sản phẩm</label>
              <input type="text" name="describe">
            </div>
            <div class="box-button-edit">
              <a href="xulysp.php">
                <button type="submit" name="update-data">Cập Nhật</button>
              </a>
            </div>
          </div>
        </form>
      <?php
      }
      ?>
    </div>
  </div>


</div>
</body>

</html>