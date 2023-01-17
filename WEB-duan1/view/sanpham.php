<link rel="stylesheet" href="../view/css/products.css">

<div class="banner">
    <img src="https://file.hstatic.net/200000538469/file/faship__5__8bfd3789a60a40d4a8dd97a2410b78a8.png" alt="">
</div>
<div class="product" style="margin-top: 50px; margin-bottom: 2rem;">
    <div class="ten">
        <p>Trang chủ</p><i class="fa-solid fa-caret-right"></i>
        <p style="font-weight: bold;">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
          $dsdanhmmuc = danhmuc_showId($id);
          extract($dsdanhmmuc);
                    echo " $tendanhmuc " ;
            }
            ?>
        </p>
    </div>
    <div class="sanpham">
        <?php

           if (isset($_GET['id'])) {
               $id = $_GET['id'];
              $iddanhmuc=sanpham_showId($id);
                // var_dump($iddanhmuc);
               
               foreach($iddanhmuc as $row){
                echo '
                <div class="sanpham1">
                    <form method = "POST" action = "../controller/index.php?act=cart">
                    <nav style="background: #fff"; margin: "2rem";>
                    <img src="../view/images/' . $row['hinh'] . '" alt="">
                    <div class="content" >   
                                <h3 clas="tensp" style"width: 70%> ' . substr($row['tensp'], 0, 45)  . '</h3>
                  
                                <p>' . $row['gia'] . ' VNĐ</p>
                                <input type="hidden" name="hinh" value="' . $row['hinh'] . '"/>
                                 <input type="hidden" name="gia" value="' . $row['gia'] . '"/>
                                <input type="hidden" name="tensp" value="' . $row['tensp'] . '"/>
                                <input type="hidden" name="soluong" value="1">
                            <div class="buy">
                                <button> <a href="../controller/index.php?act=chitiet&idsp='. $row['id'].'">Xem chi tiết</a></button>
                                <input type="submit" value="Mua Ngay" name="addcart">
                            </div>
                      </div>  
                      </nav>
                    </form>
                </div>
                ';
               }
            }
        ?>

    </div>
    <!-- <div class="mota">
        <h3>Chiếc áo Polo mặc lên tôn lên cá tính của bạn</h3>
        <p>Ngày nay áo Polo là vật rất được mọi người sử dụng, chiếc balo cũng quan trọng như bộ quần áo, như đôi
            dép, nó thân thuộc trong tất cả các hoạt động hàng ngày và dài ngày, balo mang cho ta rất nhiều thứ
            trên vai như một người bạn ân cần cần mẫn hàng ngày vậy.</p><br>

        <p> Balo ngày nay có rất nhiều mẫu mã đẹp, xuất sứ từ nhiều nhà cung cấp, nhiều nước khách nhau, nhiều
            lựa chọn. Mỗi chiếc balo đeo trên vai là thể hiện nên tính cách của bạn nữa, chiếc balo đơn giản,
            chiếc balo nhiều màu sắc hay chiếc balo độc đáo nhất.</p><br>

        <p>Hãy chọn cho mình chiếc balo mà mỗi ngày đeo trên vai ta THẤY THẬT THOẢI MÃI, làm việc hăng say hơn,
            làm việc chuyên tâm hơn, động lực hơn.</p><br>
    </div> -->

</div>