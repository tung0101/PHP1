
<div class="main">
    <main>
        <?php
        if (isset($_POST['them'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $avata = basename($_FILES['hinh']['name']);
            $target = "../view/images/";
            $target_file = $target . $avata;

            if ($username != "" && $password != "" && $name != "" && $email != "" && $avata != "") {
               
                add_user($username,$password,$name,$email, $avata);
                move_uploaded_file($_FILES['hinh']['tmp_name'],  $target_file);
                echo "<script>alert('Thêm User thành công')</script>";
            }
        }
        ?>
        <form action="" method="POST" class="sua" onsubmit="return KiemTraUser()" enctype="multipart/form-data" style="width:400px; height:auto; padding-bottom: 10%; margin-left: 0;margin-top: 0;text-align: center;">
            <h2 style="text-align: center;">Thêm User</h2><br>
            <input type="text" placeholder="Username" name="username" id="username" require><br>
            <div id="loi1" class="loi"></div><br>
            <input type="password" placeholder="Password" name="password" id="password" require><br>
            <div id="loi2" class="loi"></div><br>
            <input type="text" placeholder="Name" name="name" id="name" require><br>
            <div id="loi3" class="loi"></div><br>
            <input type="email" placeholder="Email" name="email" id="email" require><br>
            <div id="loi4" class="loi"></div><br>
            <input type="file" id="hinh" name="hinh" style="border: none;">
            <div id="loi5" class="loi"></div><br>
            <input type="submit" value="Thêm" name="them" style="width: 150px;">
        </form>

    </main>
</div>
