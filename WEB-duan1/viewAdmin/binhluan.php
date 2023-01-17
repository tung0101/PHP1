<div class="main">
    <main>
        <h2 style="text-align: center;">Danh Sách Bình Luận</h2>
        <?php
   
            $query = binhluan_showall();
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
                        <td class="an"></td>
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
                    <td class="a"></td>
                    </tr>
                ';
            echo '
                     <tr>
                        <th>ID User</th>
                        <th></th>
                        <th>Id Sản phẩm</th>
                        <th colspan="4">Nội dung</th>
                        <th colspan="2">Ngày bình luận</th>
                        <th>Tính năng</th>
                    </tr>
                    ';

            foreach($query as $row){
                extract($row);
                $dellink="../controller/indexAdmin.php?act=binhluan&id=".$id ;
                    echo '
                    <tr>
                        <td>' . $iduser . '</td>
                        <td><img src="../view/images/' . $hinh . '"></td>
                        <td>' . $idsp . '</td>
                        <td colspan="4">' . $noidung . '</td>
                        <td colspan="2">' . $postdate . '</td>
                        <td class="ad"><a onclick="return Deluser()" href="'.$dellink.'"> <i class="bx bx-message-square-minus"></i> </a></td>
                    </tr>
                    ';
                }
            
            echo "</table>";
        
        ?>
    </main>
</div>
<?php
            if(isset($_GET['id'])){
                binhluan_delete($id);
                echo "<script>alert('Xoá Bình luận thành công')</script>";
            }
?>