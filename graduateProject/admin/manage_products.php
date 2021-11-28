<?php
$msg = "";//紅色警語
$pname = "";
$cat_id = "";
$mrp="";
$sprice="";
$short_desc="";
$long_desc="";
$keywords="";
include("top.inc.php");
include("left.inc.php");
include("footer.inc.php");

//select DB products的資料
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $display = mysqli_query($conn, "select * from products where id = '$id'");
    $res = mysqli_fetch_assoc($display);
    $pname = $res['pname'];
    $cat_id = $res['cat_id'];
    $mrp = $res['mrp'];
    $sprice = $res['sprice'];
    $short_desc = $res['short_desc'];
    $long_desc = $res['long_desc'];
    $keywords = $res['keywords'];
}

//按下submit, select DB products的資料 
if (isset($_POST['submit'])) {
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $cat_id = mysqli_real_escape_string($conn, $_POST['cat_id']);
    $mrp = mysqli_real_escape_string($conn, $_POST['mrp']);
    $sprice = mysqli_real_escape_string($conn, $_POST['sprice']);
    $short_desc = mysqli_real_escape_string($conn, $_POST['short_desc']);
    $long_desc = mysqli_real_escape_string($conn, $_POST['long_desc']);
    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);

    $img = $_FILES['pimage']['name'];
    $temp = $_FILES['pimage']['tmp_name'];
    move_uploaded_file($temp, "./assets/images/".$img);


    $check = mysqli_query($conn, "select * from products where
        pname = '$pname'");
    $num = mysqli_num_rows($check);

    //$check確認catname欄位是否有相同的名稱
    if ($num > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $res = mysqli_fetch_assoc($check);
            if ($id == $res['id']) {
            } else {
                $msg = "Products name ready exist";
            }
        } else {
            $msg = "Products name ready exist";
        }
    }

    //同樣在紅色警語沒出現的情況下,若get到該id,則就是Edit觸發，update catname欄位指定的資料名稱並返回category.php, 
    //反之,則就是Add Categories觸發，做insert
    if ($msg == "") {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $update = mysqli_query($conn, "UPDATE `products` SET 
                                    `cat_id`='$cat_id',`pname`='$pname',`mrp`='$mrp',
                                    `sprice`='$sprice',`short_desc`='$short_desc',`long_desc`='$long_desc',
                                    `keywords`='$keywords',`create_at`= NOW() WHERE id ='$id'");
            header("location:products.php");
            die();
        } else {
            $query = mysqli_query($conn, "INSERT INTO `products`(`cat_id`, `pname`, `mrp`, `sprice`, `short_desc`, `long_desc`, `keywords`, `pimage`, `status`, `create_at`) 
                                VALUES ('$cat_id','$pname','$mrp','$sprice','$short_desc','$long_desc','$keywords','$img','1', NOW())");
            if ($query) {
                header("location:products.php");
                die();
            } else {
                $msg = "Error";
            }
        }
    }
}
?>


<div class="rightDiv">
    <div class="headTitle">
        <h2>Products Manage</h2>
        <!-- <a href="manage_categories.php">Add Products</a> -->
    </div>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="pname" placeholder="Product Name" value="<?php echo $pname; ?>" required>
        
        <select name="cat_id">
            <?php
                $cat = mysqli_query($conn,"select * from categories");
                while($get=mysqli_fetch_assoc($cat)){
                    if($get['id']==$cat_id){
                        echo "
                        <option selected value=".$get['id'].">".$get['catname']."</option>
                        ";
                    }else{
                        echo "<option value=".$get['id'].">".$get['catname']."</option>";
                    }
                }

            //針對products這個database的cat_id去對應categories這個database的id 藉此對應品牌(categories)
            ?>
        </select>

        <input type="text" name="mrp" placeholder="Product MRP" value="<?php echo $mrp; ?>" required>
        <input type="text" name="sprice" placeholder="Selling price" value="<?php echo $sprice; ?>" required>
        <input type="text" name="short_desc" placeholder="Short Description" value="<?php echo $short_desc; ?>" required>
        <input type="text" name="long_desc" placeholder="Long Description" value="<?php echo $long_desc; ?>" required>
        <input type="text" name="keywords" placeholder="Enter keywords" value="<?php echo $keywords; ?>" required>
        <input type="file" name="pimage">
        <!-- <input type="text" name="status" placeholder="Category Name" value="<?php echo $catname; ?>" required>
        <input type="text" name="create" placeholder="Category Name" value="<?php echo $catname; ?>" required> -->
        <input type="submit" name="submit" value="Submit">

        <div class="msg"><?php echo $msg; ?></div>
    </form>
</div>