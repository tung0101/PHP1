<?php

//get id
if (isset($_GET['id'])) $id = $_GET['id'];
else $id = 0;
//connect & get data

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//cập nhật lượt xem
$sql = "UPDATE sanpham SET luotxem=luotxem+1 WHERE id=" . $id;
if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

//lấy thông tin sp từ database
$sql = "SELECT * FROM sanpham WHERE id=" . $id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $kq = "";
    while ($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $kq .= '<tr>
                    <td width="20%">Tên sản phẩm</td>
                    <td>' . $row["tensp"] . '</td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>' . $row["mota"] . '</td>
                </tr>
                <tr>
                    <td>Lượt xem</td>
                    <td>' . $row["luotxem"] . '</td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td>' . $row["giasp"] . '</td>
                </tr>';
    }
} else {
    echo "0 results";
}
//đóng kết nối
$conn->close();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="boxcenter">
        <header class="header">

            <div class="header-1">

                <a href="#" class="logo"> <i class="fas fa-book"></i> bookly </a>

                <form action="" class="search-form">
                    <input type="search" name="" placeholder="search here..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>

                <div class="icons">
                    <div id="search-btn" class="fas fa-search"></div>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <div id="login-btn" class="fas fa-user"></div>
                </div>

            </div>

            <div class="header-2">
                <nav class="navbar">
                    <a href="index.php">Trang chủ</a>
                    <a href="cart.php">Giỏ hàng</a>
                    <a href="#arrivals">Góp ý</a>
                    <a href="#reviews">Liên hệ</a>
                    <a href="#blogs">Hỏi đáp</a>
                </nav>
            </div>

        </header>
        <div class="row mb " style="margin-top: 50px;">
            <div class="boxtrai mr">
                <div class="row">
                    <h1>THÔNG TIN SẢN PHẨM</h1>
                    <table class="thongtinnhanhang">
                        <?php echo $kq; ?>
                    </table>
                </div>

            </div>
            <div class="boxphai">
                <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>

                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a>
                        </li>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="#">Sách mới</a>
                            </li>
                            <li>
                                <a href="#">Sách bán chạy</a>
                            </li>
                            <li>
                                <a href="#">Sách tham khảo - giáo khoa</a>
                            </li>
                            <li>
                                <a href="#">Sách ngoại ngữ</a>
                            </li>
                            <li>
                                <a href="#">Sách văn học</a>
                            </li>
                            <li>
                                <a href="#">Sách kỹ năng sống</a>
                            </li>
                            <li>
                                <a href="#">Sách kiến thức bách khoa</a>
                            </li>
                            <li>
                                <a href="#">Sách nông nghiệp</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">TRẺ NGOAN TRẺ HƯ</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/5.jpg" alt="">
                            <a href="#">ĐỀ KIỂM TRA, ĐÁNH GIÁ VẬT LÍ 7</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">CHINH PHỤC ĐỈNH OLYMPIA NGÂN HÀNG
                                CÂU HỎI VẬT LÍ</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/4.jpg" alt="">
                            <a href="#">RÈN KĨ NĂNG GIẢI TOÁN LỚP 6 - TẬP 1</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">TRẺ NGOAN TRẺ HƯ</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/5.jpg" alt="">
                            <a href="#">ĐỀ KIỂM TRA, ĐÁNH GIÁ VẬT LÍ 7</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">CHINH PHỤC ĐỈNH OLYMPIA NGÂN HÀNG
                                CÂU HỎI VẬT LÍ</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/4.jpg" alt="">
                            <a href="#">RÈN KĨ NĂNG GIẢI TOÁN LỚP 6 - TẬP 1</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row mb footer">
            Copyright © 2021
        </div>
    </div>

</body>

</html>