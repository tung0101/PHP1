
<div class="main">
    <main>

        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
       
        }
        $danhmuc = danhmuc_showId($id);
        // var_dump($danhmuc);
        extract($danhmuc);
        

        if (isset($_POST['sua'])) {
            $tendanhmuc = $_POST['name'];

                danhmuc_update($tendanhmuc,$id);
                echo "<script>alert('Sửa danh mục thành công')</script>";
            
        }
        ?>

        <form action="" method="POST" style="width:400px; height:auto; padding-bottom: 10%; margin-left: 0;margin-top: 0;text-align: center;">
            <h2 style="text-align: center;">Sửa Danh Mục</h2><br>
            <label for="">Tên Danh Mục</label><br>
            <input type="text" placeholder="User name" name="name" required value="<?php echo $tendanhmuc ?>"> <br><br>
            <input type="submit" value="Cập Nhập" name="sua" style="width: 150px;">
        </form>

    </main>
