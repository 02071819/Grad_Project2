<?php
include "top.inc.php";
// include "function.inc.php";
$cat_id = mysqli_real_escape_string($conn, $_GET['cat_id']);
?>
<section class="newProducts">
    <div class="Indexrow">
        <?php
        $get_product = get_product($conn, '', $cat_id);
        if (count($get_product) > 0) {
            foreach ($get_product as $list) { ?>
                <div class="Indexcol">
                    <div class="imgBx">
                        <img src="images/<?php echo $list['pimage'] ?>">
                    </div>
                    <div class="details">
                        <a href="products-detail.php?id=<?php echo $list['id'] ?>">
                            <h3><?php echo $list['pname'] ?></h3>
                        </a>
                        <p> $ <?php echo $list['sprice'] ?> </p>
                        <form action="add_cart.php" method="post">
                            <input type="hidden" name="pid" value="<?php echo $list['id'] ?>">
                            <!-- <input type="submit" name="cart" value="Add Cart" class="cartBtn"> -->
                        </form>
                    </div>
                </div>
        <?php }
        } else {
            echo "Product Not Found !";
        }
        ?>

    </div>
</section>
<?php
include "footer.inc.php";
?>