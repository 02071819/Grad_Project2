<?php
include("top.inc.php");
include("left.inc.php");
include("footer.inc.php");

//針對該id做delete動作
if(isset($_GET['id']) && $_GET['id']!='') {
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $delete = mysqli_query($conn, "DELETE FROM `user_registration` WHERE id = '$user_id'");
}
?>

<div class="rightDiv">
    <div class="headTitle">
        <h2>User Page 會員帳號頁面</h2>
    </div>
    <div class="view">
        <table width="100%" border="1px" cellpadding="0" cellspacing="0">
            <tr>
                <th>S1 No</th>
                <th>會員名稱</th>
                <th>會員ID</th>
                <th>會員Email</th>
                <th>會員聯絡號碼</th>
                <th>會員密碼</th>

            </tr>
            <?php
                $display = mysqli_query($conn,"select * from user_registration");
                
                $i=1;
                while($data = mysqli_fetch_assoc($display)){
                    echo "
                    <tr>
                        <td>".$i++."</td>
                        <td>".$data['uname']."</td>
                        <td>".$data['user_id']."</td>
                        <td>".$data['email']."</td>
                        <td>".$data['mnumber']."</td>
                        <td>".$data['password']."</td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </div>
</div>

<!-- 按下Edit,針對該id連結到manage_categories.php -->