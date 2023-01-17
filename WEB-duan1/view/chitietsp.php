<link rel="stylesheet" href="../view/css/products.css">
<link rel="stylesheet" href="../view/css/chitietsp.css">
<div class="ten">
    <p>Trang chủ</p><i class="fa-solid fa-caret-right"></i>
    <p style="font-weight: bold;"> Sản phẩm</p>
</div>
<div class="chitiet">
    <div class="chitiet_trai">
        <?php
           if (isset($_GET['idsp'])) {
               $id = $_GET['idsp'];
               $idsp=sanpham_showChiTiet($id);
               extract($idsp);
         
                echo '
                <div class="slideshow">
                <img src="../view/images/'.$hinh.'" alt="">
                <img src="../view/images/'.$hinh.'" alt="">
                <img src="../view/images/'.$hinh.'" alt="">
                </div>
                <img src="../view/images/'.$hinh.'" alt="">
               
                    ';
               }
               

        ?>
    </div>
    <div class="chitiet_phai">
        <?php
          if (isset($_GET['idsp'])) {
            $id = $_GET['idsp'];
            $idsp=sanpham_showChiTiet($id);
            extract($idsp);
                echo '
                <form method = "POST" action = "../controller/index.php?act=cart">
                     <h3>'.$tensp.'</h3>
                     <hr>
                     <div class="giasp"><span>'.$gia.' VNĐ</span></div>
                     <p><b>Mã sản phẩm:</b> '.$id.'</p>
                     <p><b>Tình trạng:</b> còn hàng</p>
                     <input type="hidden" name="hinh" value="' . $hinh . '"/>
                     <input type="hidden" name="tensp" value="' . $tensp . '"/>
                     <input type="hidden" name="gia" value="' . $gia . '"/>
                     <p><b>Số Lượng:</b> <input type="number" name="soluong" style="text-align: center; width: 100px; height: 25px;  border: 1px solid grey;
                     border-radius: 5px;"/></p>
                         <div class="buy">
                            <input  class="add" type="submit" value="Thêm vào giỏ hàng" name="addcart" style="width: 40%";>
                         </div>
                     <h4>ĐỊA CHỈ MUA HÀNG</h4>
                     <p><i class="fa-solid fa-store"></i> 258/3 Dương Quảng Hàm, Phường 5, Quận Gò Vấp, Thành
                         Phố Hồ Chí Minh</p>
                         <h4>Gọi mua hàng: <span>0348008939</span></h4>
                 </form>
                        ';
               }
               
        ?>

    </div>
</div>
<div class="binhluan">
    <h3>BÌNH LUẬN</h3>
    <iframe src="../controller/binhluan.php?idsp=<?=$_GET['idsp']?>" frameborder="0"></iframe>
</div>