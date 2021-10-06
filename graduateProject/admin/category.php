<?php
include("top.inc.php");
include("left.inc.php");
include("footer.inc.php");

//針對該id做delete動作
if(isset($_GET['id']) && $_GET['id']!='') {
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $delete = mysqli_query($conn, "DELETE FROM `categories` WHERE id = '$id'");
}
?>

<div class="rightDiv">
    <div class="headTitle">
        <h2>Categories Page</h2>
        <a href="manage_categories.php">Add Categories</a>
    </div>
    <div class="view">
        <table width="100%" border="1px" cellpadding="0" cellspacing="0">
            <tr>
                <th>S1 No</th>
                <th>Category Name</th>
                <th>operations</th>
            </tr>
            <?php
                $display = mysqli_query($conn,"select * from categories");
                
                $i=1;
                while($data = mysqli_fetch_assoc($display)){
                    echo "
                    <tr>
                        <td>".$i++."</td>
                        <td>".$data['catname']."</td>
                        <td>
                            <a href='?id=".$data['id']."'>Delete</a> &nbsp;
                                &nbsp;
                            <a href='manage_categories.php?id=".$data['id']."'>Edit</a>
                        </td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </div>
</div>

<!-- 按下Edit,針對該id連結到manage_categories.php -->