<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

//làm rỗng giỏ hàng
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
//xóa sp trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
//lấy dữ liệu từ form
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $hinh = $_POST['hinh'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];

    //kiem tra sp co trong gio hang hay khong?

    $fl = 0; //kiem tra sp co trung trong gio hang khong?

    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {

        if ($_SESSION['giohang'][$i][1] == $tensp) {
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    //neu khong trung sp trong gio hang thi them moi
    if ($fl == 0) {
        //them moi sp vao gio hang
        $sp = [$hinh, $tensp, $gia, $soluong];
        $_SESSION['giohang'][] = $sp;
    }

    // var_dump($_SESSION['giohang']);
}

function showgiohang()
{
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                echo '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td><img src="images/' . $_SESSION['giohang'][$i][0] . '" alt=""></td>
                            <td>' . $_SESSION['giohang'][$i][1] . '</td>
                            <td>' . $_SESSION['giohang'][$i][2] . '</td>
                            <td>' . $_SESSION['giohang'][$i][3] . '</td>
                            <td>
                                <div>' . $tt . '.000đ</div>
                            </td>
                            <td>
                                <a href="cart.php?delid=' . $i . '">Xóa</a>
                            </td>
                        </tr>';
            }
            echo '<tr>
                        <th colspan="5">Tổng đơn hàng</th>
                        <th>
                            <div>' . $tong . '.000đ</div>
                        </th>
    
                    </tr>';
        } else {
            echo "Giỏ hàng rỗng!";
        }
    }
}



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
            <div class="boxtrai mr" id="bill">
                <div class="row">
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten" required></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" required></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" required></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <h1>GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
                        </tr>
                        <?php showgiohang(); ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                <div class="row mb">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG" name="dongydathang"></a>
                    <a href="index.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG" name="dongydathang"></a>
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
        <div class="row mb footer">
            Copyright © 2021
        </div>
    </div>

</body>

</html>