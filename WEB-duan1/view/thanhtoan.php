<link rel="stylesheet" href="../view/css/carts.css">
<link rel="stylesheet" href="../view/css/products.css">
<?php
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}

if (isset($_POST['addcart'])) {
    $hinh = $_POST['hinh'];
    $ten = $_POST['tensp'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];


    $fl = 0;
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][1] == $ten) {
            $fl = 1;
            $slnew = $soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $slnew;
            break;
        }
    }
    if ($fl == 0) {
        $sp = [$hinh, $ten, $gia, $soluong];
        $_SESSION['giohang'][] = $sp;
    }
}

function showcart()
{
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        $tong = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
            $tong += $tt;

            echo '
                        <tr>
                            <td>' . ($i + 1) . '</td>
                            <td><img src="../view/images/' . $_SESSION['giohang'][$i][0] . '" alt=""></td>
                            <td><p>' . $_SESSION['giohang'][$i][1] . '</p></td>
                            <td><span>' . $_SESSION['giohang'][$i][2] . ' VNĐ</span></td>
                            <td>
                                <form action="">
                                    <input type="text" value="' . $_SESSION['giohang'][$i][3] . '" name="soluong">
                                </form>
                            </td>
                        <td><span>' . $tt . ' VNĐ</span></td>
                        <td><a href="../controller/index.php?act=cart&delid=' . $i . '"><i class="fa-solid fa-trash"></i> </a></td>
                        </tr>
                ';
        }
        echo '
                    <tr>
                        <th colspan="4">Tổng Tiển </th>
                        <th class="tong">' . $tong . ' VNĐ</th>
                    </tr>
        ';
    }
}

function showcart_mobile()
{
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        $tong = 0;
        $i = 0;
        $tong += $_SESSION['giohang'][$i][2];
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
            $tong += $tt;
            echo '
            <div class="addcart">     
                    <img src="../view/images/' . $_SESSION['giohang'][$i][0] . '" alt="">
                    <p>' . $_SESSION['giohang'][$i][1] . '</p>
                    <span>' . $_SESSION['giohang'][$i][2] . ' VNĐ</span> 
                        <form action="">
                            <input type="text" value="' . $_SESSION['giohang'][$i][3] . '" name="soluong">
                        </form>
                    <td><a href="../controller/index.php?act=cart&delid=' . $i . '"><i class="fa-solid fa-trash"></i> </a></td>
                </div>  
                ';
        }
        echo '<div class="datsp">

        <p>Tổng cộng: <span class="tong"> ' . $tong . ' VNĐ</span></p>
            </div>';
    }
}


?>
<div class="banner">
    <img src="https://file.hstatic.net/200000538469/file/ready__4__4ee0893ec85d43779b232da34a1bb5db.png" alt="" height="280px">
</div>
<div class="main">
    <h2>THANH TOÁN</h2>
    <div class="check-out-voucher" style="margin-left: 200px; margin-top: 30px;">
        <form action="" method="post" class="form-box">
            <label for="" style="        color: rgba(0, 0, 0, 0.6);">Mã giảm giá</label>
            <input type="text" name="" id="" class="form-control" style="width: 200px;height: 30px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 5px;outline: none;transition: all 0.2s linear;color: rgba(0, 0, 0, 0.6);">
            <input type="submit" value="Sử Dụng" class="btn" style="padding: 5px 30px;background-color: #000000;color: #FFFFFF;font-size: 14px; height: 35px; border-radius: 5px;">
        </form>
    </div>
    <table>
        <tr class="nen">
            <th style="width: 50px;"></th>
            <th colspan="2">Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th colspan="2">Thành tiền</th>
        </tr>
        <?php showcart(); ?>

    </table>
    <div class="mobile">
        <?php showcart_mobile(); ?>
    </div>

</div>
<main>
    <div class="con" style="       display: flex;
        justify-content: center;
        align-items: center;
        margin: 50px -165px;">
        <div class="form-contact-box">
            <h4 style="margin: 0px auto; text-align: center;">Thông tin thanh toán</h4>
            <form action="" id="contact" style="margin: 0px -165px;">
                <div class="form-box">
                    <div class="form-group">
                        <label for="" style="        color: rgba(0, 0, 0, 0.6);">Phương thức thanh toán</label>
                        <select name="" id="" style="width: 900px;height: 40px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 5px;outline: none;transition: all 0.2s linear;color: rgba(0, 0, 0, 0.6);" class="form-control">
                            <option value="1">Chọn phương thức thanh toán</option>
                            <option value="2">Thanh toán khi nhận hàng</option>
                            <option value="3">Thanh toán bằng Ví MoMo</option>
                            <option value="4">Thanh toán bằng Viettel Money</option>
                            <option value="5">Thanh toán bằng Ví ZaloPay</option>
                            <option value="6">Thanh toán bằng ATM nội địa</option>
                            <option value="7">Thanh toán bằng VNPT Money</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input class="form-control" name="name" id="name" type="text" rules="required">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" name="email" id="email" type="text" rules="required|email">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input class="form-control" name="" id="subject" type="text" rules="required">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input class="form-control" name="" id="subject" type="text" rules="required">
                        <span class="error-message"></span>
                    </div>
                </div>
                <button type="submit" style="width: 200px;">Hoàn tất đơn hàng</button>
                <button type="submit" style="width: 200px; background-color: #FFFFFF;"><a href="../controller/index.php">
                        < Tiếp tục mua sắp</a></button>
            </form>
        </div>

    </div>
    <div class="box-policy" style=" display: flex;
 justify-content: center;
 align-items: center;
 margin:50px auto;
 margin-left: 100px;">
        <div class="iteam" style="width: 220px;">
            <div class="logo">
                <img src="../view/images/icons8_Hotline_100px_2 1.png" alt="" style="height: 100px; width: 100px;">
            </div>
            <div class="content">
                <div class="title" style="       font-size: 18px;">Phục vụ 24/24</div>
                <div class="see-detail">
                    <a href="" style="   text-decoration: none;
            font-size: 14px;">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="iteam" style="width: 220px;">
            <div class="logo">
                <img src="../view/images/icons8_online_shopping_240px 1.png" alt="" style="height: 100px; width: 100px;">
            </div>
            <div class="content">
                <div class="title" style="       font-size: 18px;">Mua sắm online</div>
                <div class="see-detail">
                    <a href="" style="   text-decoration: none;
            font-size: 14px;">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="iteam" style="width: 220px;">
            <div class="logo">
                <img src="../view/images/icons8_card_payment_240px 1.png" alt="" style="height: 100px; width: 100px;">
            </div>
            <div class="content">
                <div class="title" style="       font-size: 18px;">Thanh toán online</div>
                <div class="see-detail">
                    <a href="" style="   text-decoration: none;
            font-size: 14px;">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="iteam" style="width: 220px;">
            <div class="logo">
                <img src="../view/images/icons8_shipped_100px 1.png" alt="" style="height: 100px; width: 100px;">
            </div>
            <div class="content">
                <div class="title" style="       font-size: 18px;">Vận chuyển free</div>
                <div class="see-detail">
                    <a href="" style="   text-decoration: none;
            font-size: 14px;">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    a {
        text-decoration: none;
        color: black;
    }

    .contact {
        margin-bottom: 24px;
    }

    .contact .box-heading {
        text-align: center;
        margin: 15px 0;
    }

    #contact {
        display: flex;
        width: auto;
        flex-direction: column;
        align-items: center;
    }

    #contact .form-box {
        width: 900px;
    }

    #contact .form-group {
        display: flex;
        flex-direction: column;
        padding: 8px 0;
        position: relative;
    }

    #contact .form-group label {
        color: rgba(0, 0, 0, 0.6);
    }

    #contact .form-group .form-control,
    .product-detail-add-cart input,
    .filter select {
        border: 2px solid rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        outline: none;
        transition: all 0.2s linear;
        color: rgba(0, 0, 0, 0.6);
    }

    #contact .form-group .form-control {
        padding: 8px 12px;
        margin: 6px 0;
    }

    #contact textarea.form-control {
        resize: none;
        height: 80px;
    }

    #contact button {
        padding: 10px 30px;
        background-color: #000000;
        color: #FFFFFF;
        font-size: 14px;
        text-align: center;
        border-radius: 10px;
        border: none;
        margin: 20px 0;
        width: auto;
        transition: all 0.25s ease-in;
    }
</style>