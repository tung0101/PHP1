<link rel="stylesheet" href="../view/css/lo_re.css">
<link rel="stylesheet" href="../view/css/products.css">

<?php
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    }

    $query = show_user_id($id);
    extract($query);
    if (isset($_POST['sua'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $avata = basename($_FILES['hinh']['name']);
        $target = "../view/images/";
        $target_file = $target . $avata;

        if($avata != ""){
            update_user_avata($username,$password,$name, $avata,$email,$id);
            move_uploaded_file($_FILES['hinh']['tmp_name'],  $target_file);
            $_SESSION['name'] = $name ;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['avata'] = $avata;
            $_SESSION['password'] = $password;
            echo '  <script>alert("Cập nhập user thành công")</script>';
        }else{
            update_user($username,$password,$name, $email,$id);
            $_SESSION['name'] = $name ;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            echo '  <script>alert("Cập nhập user thành công")</script>';
        }

    } 
?>
<div class="main">
    <div class="dangky">
        <form action="index.php?act=suauser" method="post" enctype="multipart/form-data">
            <h2>Sửa Thông Tin Tài khoản</h2>
            <input type="text" placeholder="User name" name="user" id="username" required value="<?php echo $username ?>"><br>
            <input type="text" placeholder="Họ và tên" name="name" id="name" required value="<?php echo $name ?>"><br>
            <input type="email" placeholder="email" name="email" id="email" required value="<?php echo $email ?>"><br>
            <input type="password" placeholder="password" name="pass" id="pass" required value="<?php echo $password ?>"><br>
            <input type="file" name="hinh" value="<?php echo $avata ?>" style="border:none;"> <br>
            <input type="submit" name="sua" value="Sửa"><br>
        </form>
    </div>


</div>