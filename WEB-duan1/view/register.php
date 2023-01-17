<link rel="stylesheet" href="../view/css/lo_re.css">
<link rel="stylesheet" href="../view/css/products.css">

<div class="main">

    <div class="dangky">
        <form action="index.php?act=register" method="post" enctype="multipart/form-data"
            onsubmit="return KiemTraUser();">
            <h2>ĐĂNG KÝ</h2>
            <?php
            if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="text" placeholder="User name" name="username" id="username"><br>
            <div id="loi1"></div>
            <input type="text" placeholder="Họ và tên" name="name" id="name"><br>
            <div id="loi2"></div>
            <input type="email" placeholder="email" name="email" id="email"><br>
            <div id="loi3"></div>
            <input type="password" placeholder="Password" name="password" id="password"><br>
            <div id="loi4"></div>
            <input type="password" placeholder="Nhập lại Password" name="repassword" id="repassword"><br>
            <div id="loi5"></div>
            <input type="file" id="hinh" name="hinh" style="border: none; padding-top: 10px;">
            <div id="loi6"></div>
            <input type="submit" name="dk" value="Đăng Ký"><br>
        </form>
    </div>


</div>

<?php
    if (isset($_POST["dk"])) {


        if (
            $_POST['username'] != '' && $_POST['email'] != '' &&
            $_POST['name'] != '' && $_POST['password'] != '' && $_POST['repassword'] != ''
        ) {
            $user = $_POST['username'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $avata = basename($_FILES['hinh']['name']);
            $target = "../view/images/";
            $target_file = $target . $avata;
    
            $user_query = regiter_query($username);
            extract($user_query);

            if ($user == $username) {
                echo "<script>alert('Username đã tồn tại')</script>";
            } else if ($password != $repassword) {
                echo "<script>alert('Password không trùng khớp')</script>";
            } else {
                regiter_add($user,$password,$name,$email,$avata);
                move_uploaded_file($_FILES['hinh']['tmp_name'],  $target_file);
                echo "<script>alert('Đăng ký tài khoản thành công')</script>";
            }
        } else {
            // echo "<script>alert('Vui lòng điền đầy đủ hết các thông tin')</script>";
        }
    } else {
    }
?>