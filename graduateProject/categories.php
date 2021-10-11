<?php
include "top.inc.php";
include "footer.inc.php";
include "function.inc.php";
$cat_id = mysqli_real_escape_string($conn, $_GET['cat_id']);
?>
<section class="newProducts">
    <div class="row">
        <?php
        $get_product = get_product($conn, '', $cat_id);
        if (count($get_product) > 0) {
            foreach ($get_product as $list) { ?>
                <div class="col">
                    <div class="imgBx">
                        <img src="images/<?php echo $list['pimage'] ?>">
                    </div>
                    <div class="details">
                        <a href="products-detail.php?id=<?php echo $list['id'] ?>">
                            <h3><?php echo $list['pname'] ?></h3>
                        </a> 
                        <p> $ <?php echo $list['sprice'] ?> </p>
                        <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                    </div>
                </div>
        <?php }
        } else {
            echo "Product Not Found !";
        }
        ?>

    </div>
</section>