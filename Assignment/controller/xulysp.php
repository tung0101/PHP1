<?php
function show()
{
  $connect = new mysqli("Localhost", "root", "", "shop1");
  $command = "SELECT * FROM tbl_product";
  return mysqli_query($connect,$command);

  
}
?>
<?php
// quay lại trang ban đầu
$checkl = isset($_POST["back"]) ? header("Location: sp.php") : "";

// quay lại trang sau khi nhập dữ liệu xong
$check2 = isset($_POST["update-data"]) ? header("Location: sp.php") : "";

?>
<?php
function add($connect)
{
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
}
function cut($connect)
{
  // xóa dữ liệu trong mysql
  $buttonDelete = isset($_GET['delete']) ? $_GET['delete'] : "";
  if ($buttonDelete > 0) {
    // quay lai trang sau khi nhập dữ liệu xong
    $checkDelete = isset($_GET['delete']) ? header("Location: sp.php") : "";
    echo $checkDelete;

    $command_Delete = "DELETE FROM `tbl_product` WHERE `id`='$buttonDelete'";
    $query_Delete = mysqli_query($connect, $command_Delete);
  }
}
?>