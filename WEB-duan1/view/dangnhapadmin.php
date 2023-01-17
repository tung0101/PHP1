<link rel="stylesheet" href="../view/css/ad.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js../view/css/dangnhapad.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="main">
    <form action="" method="POST" class="sua">
        <div class="container d-flex justify-content-center align-items-center main">
            <div class="card" style="border: none;">
                <div class="p-3  d-flex align-items-center justify-content-center">
                    <br>
                    <h3>Đăng nhập Admin</h3>
                </div>
                <img src="../view/images/logo.jpg" height="150" width="175" style="margin: 0 auto; border-radius: 30px; margin: 20px auto;">

                <div class="p-3 px-4 py-4"> <input type="text" class="form-control mb-2" placeholder="Username" name="username" />
                    <div class="form"> <input type="text" class="form-control" placeholder="Password" name="password" /></div> <button type="submit" name="login" class="btn btn-danger btn-block continue">Đăng nhập</button>

                </div>
            </div>
        </div>
    </form>

    <!-- <main>
        <form action="" method="POST" class="sua">
            <h2>Đăng nhập trang admin</h2>
            <img src="../view/images/logo.jpg">
            <label for="">User name</label><br>
            <input type="text" placeholder="User name" name="username"> <br><br>
            <label for="">Password</label> <br>
            <input type="password" placeholder="Password" name="password"><br> <br>
            <input type="submit" value="ĐĂNG NHẬP" name="login">
        </form>
    </main> -->
    <?php
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($user != 0 || $pass != 0) {
            $login = admin_query($user);
            foreach ($login as $row) {
                extract($row);
                $_SESSION['idAdmin'] =  $id;
                $_SESSION['userAd'] =  $username;
            }
            echo "<script>alert('Xin chào " . $_SESSION['userAd'] . ". Bạn đã đăng nhập thành công.')</script>";
            header("location: ../controller/indexAdmin.php?act=userAd");
        } else {
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin')</script>";
        }
    }

    if (isset($_SESSION['idAdmin'])) {
        header("location: ../controller/indexAdmin.php?act=userAd");
    } else {
        // echo '
        // <main>
        //     <form action="" method="POST" class="sua">
        //         <h2>Đăng nhập trang admin</h2>
        //         <img src="../view/images/logo1.png">
        //         <label for="">User name</label><br>
        //         <input type="text" placeholder="User name" name="username"> <br><br>
        //         <label for="">Password</label> <br>
        //         <input type="password" placeholder="Password" name="password"><br> <br>
        //         <input type="submit" value="ĐĂNG NHẬP" name="login">
        //     </form>
        // </main>
        // ';
    }
    ?>
</div>