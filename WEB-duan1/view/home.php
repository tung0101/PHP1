<link rel="stylesheet" href="../view/css/index.css">
<link rel="stylesheet" href="../view/css/products.css">
<div class="banner">
    <img src="https://file.hstatic.net/200000538469/file/ready__6__ecb4a4e32b994502b8fdd86fbb638560.png" alt="">
</div>
<div class="product">
    <div class="balo" style="max-width: 1424px;">
        <div class="tille">
            <h3>Áo Nam</h3>
        </div>
        <div class="sanpham responsive">

            <?php

            $dssanpham = sanpham_showId_1();

            foreach ($dssanpham as $row) {
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
            

            ?>

        </div>
    </div>
    <div class="vali" style="margin-top: 250px;">
        <div class="tille">
            <h3>Quần Nam</h3>
        </div>
        <div class="sanpham responsive">
            <?php
            $dssanpham = sanpham_showId_2();
            foreach ($dssanpham as $row) {
                echo '
                        <div class="sanpham1">
                            <form method = "POST" action = "../controller/index.php?act=cart">
                            <nav  style="background: #fff"; margin: "2rem";>
                                <img src="../view/images/' . $row['hinh'] . '" alt="" class:"anhsp">
                                <h3  clas="tensp" style"width: 70%; font-weight: 500; margin-left: 2rem;>' . substr($row['tensp'], 0, 45)  . '</h3>
                                <p>' . $row['gia'] . ' VNĐ</p>
                                <input type="hidden" name="hinh" value="' . $row['hinh'] . '"/>
                                <input type="hidden" name="tensp" value="' . $row['tensp'] . '"/>
                                <input type="hidden" name="gia" value="' . $row['gia'] . '"/>
                                <input type="hidden" name="soluong" value="1">
                                <div class="buy">
                                <button><a href="../controller/index.php?act=chitiet&idsp=' . $row['id'] . '">Xem chi tiết</a></button>
                                <input type="submit" value="Mua Ngay" name="addcart">
                                </div>
                                </nav>
                            </form>
                        </div>
                                 ';
            }
            ?>
        </div>
    </div>
    <div class="cap" style="margin-top: 60px;">
        <div class="tille">
            <h3>Phụ Kiện</h3>
        </div>
        <div class="sanpham responsive">
            <?php
            $dssanpham = sanpham_showId_3();
            foreach ($dssanpham as $row) {
                echo '
                           <div class="sanpham1">
                               <form method = "POST" action = "../controller/index.php?act=cart">
                               <nav  style="background: #fff"; margin: "2rem";>
                                   <img src="../view/images/' . $row['hinh'] . '" alt="">
                                   <h3  clas="tensp" style"width: 70%; font-weight: 500; margin-left: 2rem;>' . substr($row['tensp'], 0, 45)  . '</h3>
                                   <p>' . $row['gia'] . ' VNĐ</p>
                                   <input type="hidden" name="hinh" value="' . $row['hinh'] . '"/>
                                   <input type="hidden" name="tensp" value="' . $row['tensp'] . '"/>
                                   <input type="hidden" name="gia" value="' . $row['gia'] . '"/>
                                   <input type="hidden" name="soluong" value="1">
                                   <div class="buy">
                                   <button><a href="../controller/index.php?act=chitiet&idsp=' . $row['id'] . '">Xem chi tiết</a></button>
                                   <input type="submit" value="Mua Ngay" name="addcart">
                                   </div>
                                   </nav>
                               </form>
                           </div>
                                    ';
            }
            ?>
        </div>
    </div>
    <div class="tintuc" style="margin-top: 60px;">
        <div class="tille">
            <h3>TIN TỨC - SỰ KIỆN</h3>
        </div>
        <div class="new responsive">
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/trang_6740eb27e11a42398e96911fa5067863.jpg"
                        alt="">
                    <h4>10 lưu ý cần biết để mặc áo polo nam đẹp, đúng chuẩn</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Chúng tôi sẽ giúp bạn tìm hiểu cụ thể hơn về những lưu ý cần phải biết khi mặc áo polo nam
                        đẹp, đúng chuẩn ngay sau đây nhé!
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 185 Lượt xem</p>
                        <p style="text-align: right;"><i class="fa-solid fa-calendar-days"></i> 01-05-2022</p>
                    </div>
                </div>
            </a>
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/117-2_994bead164824cf3a68601826e26997c.jpg"
                        alt="">
                    <h4>Khuyến mãi cực sốc những mẫu áo Polo dành cho các bạn trẻ</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Bạn đang muốn tìm cho mình một bộ đồ phù hợp với thời
                        trang vừa tiện dụng mà giá cả hợp lý thì đừng bỏ lỡ
                        chương trình sale hấp dẫn
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 571 Lượt xem</p>
                        <p><i class="fa-solid fa-calendar-days"></i> 24-04-2022</p>
                    </div>
                </div>
            </a>
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/1.8_white-light_blue_6011149d8c0043569a00fd5758a1041f.jpg"
                        alt="">
                    <h4>5 Cách Phối Đồ Với Polo Thể Thao Theo Xu Hướng Thời Trang.</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Áo Polo thể thao hay còn gọi là áo thun polo thể thao, đây là chiếc áo cơ bản của mọi chàng
                        trai. Từ khi...
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 242 Lượt xem</p>
                        <p><i class="fa-solid fa-calendar-days"></i> 07-05-2022</p>
                    </div>
                </div>
            </a>
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/1.1_white_phoi_bo_ve_chai_924a331901504deba99f335c4509f783.jpg"
                        alt="">
                    <h4>MẸO CHỌN MÀU ÁO POLO NAM ĐẸP PHÙ HỢP VỚI LÀN DA</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Với áo polo nam đẹp bạn nên mặc màu nào phù hợp với làn da của mình? Dưới đây Couple TX có vài
                        mẹo nhỏ dành cho bạn!
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 112 Lượt xem</p>
                        <p><i class="fa-solid fa-calendar-days"></i> 14-05-2022</p>
                    </div>
                </div>
            </a>
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/124-1_20a400efd6a64afa838372e0655d60dc.jpg"
                        alt="">
                    <h4>10 lưu ý cần biết để mặc áo polo nam đẹp, đúng chuẩn</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Chúng tôi sẽ giúp bạn tìm hiểu cụ thể hơn về những lưu ý cần phải biết khi mặc áo polo nam
                        đẹp, đúng chuẩn ngay sau đây nhé!
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 185 Lượt xem</p>
                        <p style="text-align: right;"><i class="fa-solid fa-calendar-days"></i> 01-05-2022</p>
                    </div>
                </div>
            </a>
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/dark_yellow-dark_grey_92129a43788e4264813a4a122975497e.jpg"
                        alt="">
                    <h4>Khuyến mãi cực sốc những mẫu áo Polo dành cho các bạn trẻ</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Bạn đang muốn tìm cho mình một bộ đồ phù hợp với thời
                        trang vừa tiện dụng mà giá cả hợp lý thì đừng bỏ lỡ
                        chương trình sale hấp dẫn
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 571 Lượt xem</p>
                        <p><i class="fa-solid fa-calendar-days"></i> 24-04-2022</p>
                    </div>
                </div>
            </a>
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/1.3_do_680aaabcc08841bb94ca2b5063b6f796.jpg"
                        alt="">
                    <h4>5 Cách Phối Đồ Với Polo Thể Thao Theo Xu Hướng Thời Trang.</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Áo Polo thể thao hay còn gọi là áo thun polo thể thao, đây là chiếc áo cơ bản của mọi chàng
                        trai. Từ khi...
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 242 Lượt xem</p>
                        <p><i class="fa-solid fa-calendar-days"></i> 07-05-2022</p>
                    </div>
                </div>
            </a>
            <a href="../controller/index.php?act=baiviet">
                <div class="tintuc1">
                    <img src="https://product.hstatic.net/200000538469/product/1.1_white_phoi_bo_ve_chai_924a331901504deba99f335c4509f783.jpg"
                        alt="">
                    <h4>MẸO CHỌN MÀU ÁO POLO NAM ĐẸP PHÙ HỢP VỚI LÀN DA</h4>
                    <p class="dang">Đăng bởi: admin</p>
                    <hr>
                    <p>
                        Với áo polo nam đẹp bạn nên mặc màu nào phù hợp với làn da của mình? Dưới đây Couple TX có vài
                        mẹo nhỏ dành cho bạn!
                    </p>
                    <div class="thongso">
                        <p><i class="fa-solid fa-eye"></i> 112 Lượt xem</p>
                        <p><i class="fa-solid fa-calendar-days"></i> 14-05-2022</p>
                    </div>
                </div>
            </a>

        </div>
    </div>

</div>