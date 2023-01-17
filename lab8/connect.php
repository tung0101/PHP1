<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Product</title>
</head>
<body>
    <?php
        $connect = new mysqli("Localhost", "root", "", "shop");

        // if($connect->connect_error) {
        //     echo "Error";
        // }else {
        //     echo "Succses";
        // }

        $command = "SELECT * FROM tbl_product";   // câu truy vấn trong mysql 
        $query = mysqli_query($connect, $command);   // thực hiện câu truy vấn 
    ?>
    <?php
        // quay lại trang ban đầu
        $checkl = isset($_POST["back"]) ? header("Location: connect.php") : "";

        // quay lại trang sau khi nhập dữ liệu xong
        $check2 = isset($_POST["update-data"]) ? header("Location: connect.php") : "";

    ?>
    <div class="container">
        <h2>Danh Sách Sản Phẩm</h2>
        <table border="0">
            <tr>
                <td>ID</td>
                <td>Tên Sản Phẩm</td>
                <td>Ảnh</td>
                <td>Giá</td>
                <td>Mô Tả</td>
                <td>Chỉnh Sửa</td>
            </tr>
            <?php while($row = mysqli_fetch_assoc($query)) :?>
                <tr>
                    <td><?Php echo $row['id'] ?></td>
                    <td><?Php echo $row['name'] ?></td>
                    <td><img src="<?php echo $row['img'] ?>" alt=""></td>
                    <td><?Php echo $row['price'] ?></td>
                    <td><?Php echo $row['mota'] ?></td>
                    <td>
                        <a href="?edit=<?php echo $row['id'] ?>#box-edit">
                            <button class="button-edit"><span>Edit</span></button>
                        </a>
                        <a href="?delete=<?php echo $row['id'] ?>">
                            <button class="button-delete"><span>Xóa</span></button>
                        </a>
                    </td>
                </tr>         
            <?php endwhile ?>     
        </table>
        <div class="box-2">
            <?php
                // nếu lấy được id của sản phẩm thì chuyển xuống form edit
                $checkButton = isset($_GET['edit']) ? $_GET['edit'] : "";
                
                if($checkButton > 0) {
            ?>
            <form id="box-edit" method="post">
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
                        <label for="">Mô Tả</label>
                        <input type="text" name="describe">
                    </div>
                    <div class="box-button-edit">
                        <a href="connect.php">
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
</body>
</html>
<?php
    // Thêm vào dữ liệu trong mysql
    if(isset($_POST['update-data'])) {
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
    if($buttonDelete > 0) {
        // quay lai trang sau khi nhập dữ liệu xong
        $checkDelete = isset($_GET['delete']) ? header("Location: connect.php"): "";
        echo $checkDelete;
        
        $command_Delete = "DELETE FROM `tbl_product` WHERE `id`='$buttonDelete'";
        $query_Delete = mysqli_query($connect, $command_Delete);
    }
?>