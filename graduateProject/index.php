<?php
include "connection.inc.php";
include "top.inc.php";
include "function.inc.php";
?>

<!-----------------------Products Part------------------------->
<section class="newProducts">
        <div class="titleText">
            <h1>New Arrivals Products</h1>
        </div>
        <div class="Indexrow">
            <?php
            $get_product = get_product($conn,6);
            foreach($get_product as $list){ ?>
            
            <div class="Indexcol">
                <div class="imgBx">
                    <img src="images/<?php echo $list['pimage'] ?>">
                </div>
                <div class="details">
                    <a href="products-detail.php?id=<?php echo $list['id'] ?>"><h3><?php echo $list['pname'] ?></h3></a>
                    <p>$ <?php echo $list['sprice'] ?></p>
                    <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                </div>
            </div>
            <?php } ?>

        <!-- <div class="col">
                <div class="imgBx">
                    <img src="images/shoes_2.jpg">
                </div>
                <div class="details">
                    <h3>Product Name</h3>
                    <p> $1000</p>
                    <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                </div>
            </div>
            <div class="col">
                <div class="imgBx">
                    <img src="images/shoes_2.jpg">
                </div>
                <div class="details">
                    <h3>Product Name</h3>
                    <p> $1000</p>
                    <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                </div>
            </div>
            <div class="col">
                <div class="imgBx">
                    <img src="images/shoes_2.jpg">
                </div>
                <div class="details">
                    <h3>Product Name</h3>
                    <p> $1000</p>
                    <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                </div>
            </div>
            <div class="col">
                <div class="imgBx">
                    <img src="images/shoes_2.jpg">
                </div>
                <div class="details">
                    <h3>Product Name</h3>
                    <p> $1000</p>
                    <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                </div>
            </div>
            <div class="col">
                <div class="imgBx">
                    <img src="images/shoes_2.jpg">
                </div>
                <div class="details">
                    <h3>Product Name</h3>
                    <p> $1000</p>
                    <input type="submit" name="cart" value="Add Cart" class="cartBtn">
                </div>
            </div> -->
    </div>
</section>

<?php
include "footer.inc.php";
?>