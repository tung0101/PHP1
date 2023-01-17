
<div class="main">
    <main>
        <?php
                if (isset($_SESSION['idAdmin'])) {
                    $id = $_SESSION['idAdmin'];
                }
                
             $query = show_admin_id_one($id);
                    extract($query);

                echo '  
                        <div class="userlogin">
                        <h2>Xin Chào: <span>' . $username . '</span></h2>
                        
                        <table class="bangad">
                        <form action="../controller/indexAdmin.php?act=userAd"  method="POST">
                            <tr><th colspan="2">Thông Tin Tài Khoản</td</tr>
                            <tr>
                                    <th>Tên Đăng Nhập</th><br>
                                    <th>Password</th><br>

                            </tr>
                            <tr>
                                <td><input type="text" value=' . $username. ' name="user"></td>
                                <td><input type="password" value=' . $password . ' name="pass"/></td>
                            </tr>
                            <tr><td style="border:none;"></td></tr>
                            <tr>
                            <td colspan="2" class="sub"><input type="submit" class="sub" name="doipass" value="Đổi Mật Khẩu" style="color:white;font-weight:bold;"></td>
                            </tr>
                            </form>
                        </table> 
                        </div>';
                  
           
        ?>


    </main>
</div>
<?php
            if (isset($_SESSION['idAdmin'])) {
                $id = $_SESSION['idAdmin'];
        
        if (isset($_POST['doipass'])) {
            $pass = $_POST['pass'];
            $user = $_POST['user'];

            if ($user != '' && $user != $username) {
                update_admin_user($id,$user,$id);
                echo '  <script>alert("Đổi Username Thành công")</script>';
            } else if ($pass == '') {
                echo '  <script>alert("Password không được để trống")</script>';
            } else if ($pass == $password) {
                echo '  <script>alert("Chưa nhập Username và password mới")</script>';
            } else {
                update_admin_pass($id,$pass,$id);
                echo '  <script>alert("Đổi mật khẩu thành công")</script>';
                
            }
        }
    }
        ?>