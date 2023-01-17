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
                        <th colspan="4">Tổng Tiền </th>
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
    <img src="https://file.hstatic.net/200000538469/file/ready__4__4ee0893ec85d43779b232da34a1bb5db.png" alt=""
        height="280px">
</div>
<div class="main">
    <h2>GIỎ HÀNG</h2>
    <table>
        <tr class="nen">
            <th style="width: 200px;">Số Thứ Tự</th>
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
    <div class="nut" style="display: grid;gap: 120px;grid-template-columns: 100px 100px; margin-left: 700px;">
        <a href="../controller/thanhtoan.php" style="text-decoration: none;"><button class="dathang">Thanh
                Toán</button></a>
        <a href="../controller/index.php" style="text-decoration: none;"><button class="dathang">Tiếp Tục Đặt
                Hàng</button></a>
    </div>

</div>