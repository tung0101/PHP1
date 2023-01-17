<?php
session_start();
$logined = 0;
if (!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap'] = 0;
else $_SESSION['luottruycap'] += 1;

if (isset($_COOKIE['user']) && isset($_COOKIE['pass'])) {
    echo "Cookie đã đăng ký là: " . $_COOKIE['user'] . " - " . $_COOKIE['pass'];
}

if (isset($_GET['delc']) && ($_GET['delc'] == 1)) {
    setcookie("user", "", time() - (86400 * 7));
    setcookie("pass", "", time() - (86400 * 7));
    echo "<br><font color='red'>Bạn đã xóa cookie</font>";
}

if (isset($_POST['login']) && ($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if (($user == "demo") && ($pass == "demo")) {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $logined = 1;
        $msg = "<br><font color='blue'>Các bạn đăng nhập thành công</font>";
    } else {
        $logined = 0;
        $msg = "<br><font color='red'>Vui lòng đăng nhập</font>";
    }
    if (isset($_POST['ghinho']) && ($_POST['ghinho'])) {
        setcookie("user", $user, time() + (86400 * 7));
        setcookie("pass", $pass, time() + (86400 * 7));
        $msgcookie = "<br>Đã ghi nhận cookie!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- <div class="giohang">
        <a href="cart.html"><img src="images/cart.png"><span id="countsp">0</span></a>
    </div> -->
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
                    <div class="banner">
                        <img src="images/banner.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/1.jpg" alt=""></div>
                        <p>96.000đ</p>
                        <a href="#">TRẺ NGOAN TRẺ HƯ</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="TRẺ NGOAN TRẺ HƯ">
                            <input type="hidden" name="gia" value="96.000đ">
                            <input type="hidden" name="hinh" value="1.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/2.jpg" alt=""></div>
                        <p>68.000đ</p>
                        <a href="#">BÀI TẬP TRẮC NGHIỆM TIẾNG ANH LỚP 12 CÓ ĐÁP ÁN</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="BÀI TẬP TRẮC NGHIỆM TIẾNG ANH LỚP 12 CÓ ĐÁP ÁN">
                            <input type="hidden" name="gia" value="68.000đ">
                            <input type="hidden" name="hinh" value="2.gif">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/3.jpg" alt=""></div>
                        <p>116.800đ</p>
                        <a href="#">CHINH PHỤC ĐỈNH OLYMPIA NGÂN HÀNG <br> CÂU HỎI VẬT LÍ</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="CHINH PHỤC ĐỈNH OLYMPIA NGÂN HÀNG CÂU HỎI VẬT LÍ">
                            <input type="hidden" name="gia" value="116.800đ">
                            <input type="hidden" name="hinh" value="3.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/4.jpg" alt=""></div>
                        <p>72.250đ</p>
                        <a href="#">RÈN KĨ NĂNG GIẢI TOÁN LỚP 6 - TẬP 1</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/5.jpg" alt=""></div>
                        <p>44.000đ</p>
                        <a href="#">ĐỀ KIỂM TRA, ĐÁNH GIÁ VẬT LÍ 7</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/6.jpg" alt=""></div>
                        <p>57.600đ</p>
                        <a href="#">HƯỚNG DẪN HỌC NGỮ VĂN LỚP 7</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/7.jpg" alt=""></div>
                        <p>153.000đ</p>
                        <a href="#">Xử Lý Bùn Của Trạm Xử Lý Nước Thải</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/8.jpg" alt=""></div>
                        <p>52.000đ</p>
                        <a href="#">Giáo Trình Thực Hành Vẽ Kỹ Thuật Xây Dựng</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/9.jpg" alt=""></div>
                        <p>99.000đ</p>
                        <a href="#">Công nghệ sản xuất vắc xin <br> (xuất bản lần 2)</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                        if ($logined == 1) {
                        ?>
                            <li>
                                <a href="index.php?info"><?= $_SESSION['user']; ?></a>
                            </li>
                            <li>
                                <a href="#">Giỏ hàng của tôi</a>
                            </li>
                            <li>
                                <a href="#">Thay đổi mật khẩu</a>
                            </li>
                            <li>
                                <a href="#">Thoát</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="row mb10">
                                    Tên đăng nhập<br>
                                    <input type="text" name="user">
                                </div>
                                <div class="row mb10">
                                    Mật khẩu<br>

                                    <input type="password" name="pass">
                                </div>
                                <div class="row mb10">
                                    <input type="checkbox" name="ghinho"> Ghi nhớ tài khoản?
                                </div>
                                <div class="row mb10">
                                    <input type="submit" name="login" value="Đăng nhập">

                                </div>
                            </form>

                            <li>
                                <a href="index.php?delc=1">Xóa cookie</a>
                            </li>
                            <li>
                                <a href="#">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="#">Đăng ký thành viên</a>
                            </li>
                            <?php

                            if (isset($msg)) echo $msg;
                            if (isset($msgcookie)) echo $msgcookie;

                            ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb ">
                    <div class="boxtitle">LƯỢT TRUY CẬP</div>
                    <div style="text-align:center;">
                        <h1>
                            <?php
                            if (isset($_SESSION['luottruycap'])) echo $_SESSION['luottruycap'];
                            ?>
                        </h1>

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
    <div class="row mb footer" style="margin-left: 150px;">
        Copyright © 2021
    </div>
    </div>

</body>

</html>