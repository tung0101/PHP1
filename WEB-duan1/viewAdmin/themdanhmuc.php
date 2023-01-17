
<div class="main">
    <main>
        <?php
        if (isset($_POST['them'])) {
            $name = $_POST['name'];
            $iddanhmuc = $_POST['iddanhmuc'];


            if ($name != "") {
                $dsdanhmmuc = danhmuc_insert($iddanhmuc,$name);
                echo "<script>alert('Thêm danh mục thành công')</script>";
            }
        }
        ?>
        <form action="" method="POST" class="sua" onsubmit="return KiemTradanhmuc()" style="width:400px; height:auto; padding-bottom: 10%; margin-left: 0;margin-top: 0;text-align: center;">
            <h2 style="text-align: center;">Thêm Danh Mục</h2><br>
            <input type="text" placeholder="Id Danh Mục" name="iddanhmuc" id="iddanhmuc" require><br><br>
            <input type="text" placeholder="Tên Danh Mục" name="name" id="username" require><br>
            <div id="loi1" class="loi"></div><br>

            <input type="submit" value="Thêm" name="them" style="width: 150px;">
        </form>
    </main>
</div>
