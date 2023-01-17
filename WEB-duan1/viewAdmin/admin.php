<div class="main">
    <main>
        <h2 style="text-align: center;">Danh Sách User</h2>
        <?php
 

          
            echo "<table >";
            echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    </tr>
                ';
            echo '
                        <tr>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="them" colspan="2"> <a href="../controller/indexAdmin.php?act=themuser"><i style="margin-right: 5px;" class="bx bx-edit"></i>Thêm</a> </td>
                        </tr>
                    ';
            echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    </tr>
                ';
            echo '
                     <tr>
                        <th>ID</th>
                        <th>User name</th>
                        <th>Password</th>
                        <th colspan="2">Họ và tên</th>
                        <th colspan="3">Email</th>
                        <th colspan="3">Hình đại diện</th>
                        <th>Tính năng</th>
                    </tr>
                    ';

                    $query = show_user();
                    foreach($query as $row){
                        extract($row);
                        $dellink="../controller/indexAdmin.php?id=".$id ;
                    echo '
                    <tr>
                        <td>' .$id. '</td>
                        <td >' . $username . '</td>
                        <td>' . $password . '</td>
                        <td colspan="2">' . $name . '</td>
                        <td colspan="3">' . $email . '</td>
                        <td colspan="3"><img src="../view/images/' . $avata . '"></td>
                        <td class="ad"><a onclick="return Deluser()" href="'.$dellink.'"> <i class="bx bx-message-square-minus"></i> </a></td>
                    </tr>
                    ';
       
            }
            echo "</table>";
            if(isset($_GET['id'])){
                delete_user($id);
                echo "<script>alert('Xoá User thành công')</script>";
            }

        ?>
    </main>
</div>