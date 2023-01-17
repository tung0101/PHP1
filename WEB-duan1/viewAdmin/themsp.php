
<div class="main">
    <main>

        <?php
        if (isset($_POST['them'])) {
            $tensp = $_POST['tensp'];
            $avata = basename($_FILES['hinh']['name']);
            $target = "../view/images/";
            $target_file = $target . $avata;
            $gia = $_POST['gia'];
            $danhmuc = $_POST['danhmuc'];

            if ($tensp != "" && $avata != "" && $gia != "" && $danhmuc != "") {
                sanpham_insert($tensp,$avata,$gia,$danhmuc);
                move_uploaded_file($_FILES['hinh']['tmp_name'],  $target_file);
                echo "<script>alert('Thêm sản phẩm thành công')</script>";
            }
        }
        ?>
        <form action="" method="POST" class="sua" enctype="multipart/form-data" onsubmit="return KiemTra()" style="width:400px; height:auto; padding-bottom: 10%; margin-left: 0;margin-top: 0;text-align: center;">
            <h2 style="text-align: center;">Thêm sản phẩm</h2><br>

            <input type="text" id="tensp" placeholder="Tên Sản Phẩm" name="tensp" require><br>
            <div id="loi1" class="loi"></div><br>
            <input type="text" id="gia" placeholder="Giá Sản Phẩm" name="gia" require><br>
            <div id="loi2" class="loi"></div><br>
            <input type="text" id="danhmuc" placeholder="Id danh mục" name="danhmuc" require><br>
            <div id="loi5" class="loi"></div><br>
            <input type="file" id="hinh" name="hinh" style="border: none;">
            <div id="loi6" class="loi"></div><br>
            <input type="submit" value="Thêm Sản Phẩm" name="them" style="width: 150px;">
        </form>
    </main>
</div>
