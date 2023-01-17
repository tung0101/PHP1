<link rel="stylesheet" href="../view/css/lo_re.css">
<link rel="stylesheet" href="../view/css/products.css">
<?php
if (isset($_POST['login'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];  
    if ($username !=0 || $password !=0) {
        $login=login($username);
        foreach($login as $row){
            extract($row);
            $_SESSION['name'] = $name ;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['avata'] = $avata;
            $_SESSION['password'] = $password;
        }
            // echo "<script>alert('Xin chào " . $_SESSION['name'] . ". Bạn đã đăng nhập thành công.')</script>";
            
            
        
    }else {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin')</script>";
    }
}

?>
<div class="main">

    <?php
         if (isset($_SESSION['name'])) {
            echo '  
            <div class="userlogin">
            <h2>Xin Chào: <span>' . $_SESSION['name'] . '</span></h2>
            <table class="bang">
                <tr><th colspan="2">Thông Tin Tài Khoản</td</tr>
                <tr>
                        <th>Tên Đăng Nhập</th><br>
                        <th>Password</th><br>

                </tr>
                <tr>
                    <td>' . $_SESSION['username'] . '</td>
                    <td><input type=hidden value=' .$_SESSION['password'] . ' /></td>
                </tr>
                <tr>
                <td class="sub"><a href="index.php?act=suauser">Sửa</a></td>
                <td class="sub"><a href="../view/logout.php">Đăng Xuất</a></td>
                </tr>
            </table> 
            </div>';
        } else {
            echo '<div class="dangky">
            <form action="index.php?act=login" method="POST">
                <h2>ĐĂNG NHẬP</h2>
                <input type="text" placeholder="User name" name="username"><br>
                <input type="password" placeholder="Password" name="password"><br>
                <input type="checkbox"><label for="">Nhớ mật khẩu?</label><br>
                <div class="two">
                    <input type="submit" value="Đăng nhập" name="login" class="dangnhap">
                    <button><a href="../controller/index.php?act=register">Đăng ký</a></button>
                </div>
                <div class="loginkhac">
                    <button class="facebook"><i class="fa-brands fa-facebook"></i> Facebook</button>
                    <button class="gmail"><a href="../controller/indexadmin.php" style="text-decoration: none; color: black;">Admin</a></button>
                    <button class="google"><i class="fa-brands fa-google"></i> Google</button>
                </div>
            </form>
        </div>';
        }
    ?>


</div>