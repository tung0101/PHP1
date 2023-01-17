
<div class="main">
    <main>

        <?php
        include "config.php";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $sqls = "SELECT*FROM user WHERE id = $id";
        $qr = $conn->query($sqls);
        $rows = $qr->fetch_array();

        if (isset($_POST['sua'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $avata = basename($_FILES['hinh']['name']);
            $target = "../view/images/";
            $target_file = $target . $avata;

            if ($user != "" && $pass != "" && $avata != "" && $name != "" && $email != "") {
                $sql = "UPDATE  user SET username='$user', password='$pass', name='$name', avata='$avata', email='$email' WHERE id=$id";
                $query = $conn->query($sql);
                move_uploaded_file($_FILES['hinh']['tmp_name'],  $target_file);
                echo "<script>alert('Sửa User thành công')</script>";
            }
        }
        $conn->close();
        ?>

        <form action="" method="POST" class="sua" enctype="multipart/form-data" style="width:400px; height:auto; padding-bottom: 10%; margin-left: 0;margin-top: 0;text-align: center;">
            <h2>Sửa User</h2><br>
            <label for="">User name</label><br>
            <input type="text" placeholder="User name" name="user" required value="<?php echo $rows['username'] ?>"> <br><br>
            <label for="">Password</label> <br>
            <input type="text" placeholder="Password" name="pass" required value="<?php echo $rows['password'] ?>"><br> <br>
            <label for="">Họ và tên</label><br>
            <input type="text" placeholder="Họ và tên" name="name" required value="<?php echo $rows['name'] ?>"> <br><br>
            <label for="">Email</label><br>
            <input type="email" placeholder="Email" name="email" required value="<?php echo $rows['email'] ?>"> <br><br>
            <input type="file" name="hinh" value="<?php echo $rows['avata'] ?>" style="border:none;"> <br>
            <input type="submit" value="Cập Nhập" name="sua" style="width: 150px;">
        </form>

    </main>
</div>
