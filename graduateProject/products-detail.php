<!-- 商品細節頁 -->
<?php
include "top.inc.php";
$pro_id = mysqli_real_escape_string($conn, $_GET['id']);
// include "function.inc.php";
?>
<section class="singlePro">
    <div class="row">
        <?php
        $get_product = get_product($conn, '', '', '', $pro_id);
        foreach ($get_product as $list) { ?>

            <div class="singlecol">
                <div class="imgBx">
                    <img src="./admin/assets/images/<?php echo $list['pimage'] ?>">
                </div>
            </div>
            <div class="singlecol">
                <h2><?php echo $list['pname'] ?></h2>
                <label class="sprice">$ <?php echo $list['sprice'] ?></label> &nbsp; &nbsp; <label class="mrp"><del>$ <?php echo $list['mrp'] ?></del></label>
                <br>
                <form method="post" action="add_cart.php">
                    <input type="number" name="qty" value="1" min="1" max="5">
                    <p><?php echo $list['short_desc'] ?></p>
                    <p><?php echo $list['long_desc'] ?></p>

                    <input type="hidden" name="pid" value="<?php echo $list['id'] ?>">
                    <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                </form>
            </div>
        <?php } ?>
    </div>
</section>


<section class="newProducts">
    <div class="titleText">
        <h1>Related Products</h1>
    </div>
    <div class="Indexrow">
        <div class="Indexcol">
            <div class="imgBx">
                <img src="images/shoes_2.jpg">
            </div>
            <div class="details">
                <h3>Product Name</h3>
                <p> $1000</p>
                <input type="submit" name="cart" value="Add Cart" class="cartBtn">
            </div>
        </div>
        <div class="Indexcol">
            <div class="imgBx">
                <img src="images/shoes_2.jpg">
            </div>
            <div class="details">
                <h3>Product Name</h3>
                <p> $1000</p>
                <input type="submit" name="cart" value="Add Cart" class="cartBtn">
            </div>
        </div>
        <div class="Indexcol">
            <div class="imgBx">
                <img src="images/shoes_2.jpg">
            </div>
            <div class="details">
                <h3>Product Name</h3>
                <p> $1000</p>
                <input type="submit" name="cart" value="Add Cart" class="cartBtn">
            </div>
        </div>
        <div class="Indexcol">
            <div class="imgBx">
                <img src="images/shoes_2.jpg">
            </div>
            <div class="details">
                <h3>Product Name</h3>
                <p> $1000</p>
                <input type="submit" name="cart" value="Add Cart" class="cartBtn">
            </div>
        </div>

    </div>
</section>


<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<?php
include "footer.inc.php";
?>