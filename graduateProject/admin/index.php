<?php
include("top.inc.php");
include("left.inc.php");
?>

<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">1,850</div>
            <div class="cardName">Daily Views</div>
        </div>
        <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">$25,963</div>
            <div class="cardName">Total Sales</div>
        </div>
        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">$12,150</div>
            <div class="cardName">Total Expenses</div>
        </div>
        <div class="iconBx">
            <ion-icon name="logo-usd"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">$13,813</div>
            <div class="cardName">Total Income</div>
        </div>
        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>
</div>

<!--Add Charts -->
<div class="graphBox">
    <div class="box">
        <canvas id="myChart"></canvas>
    </div>
    <div class="box">
        <canvas id="myChart1"></canvas>
    </div>
</div>

<?php
include("footer.inc.php");
?>