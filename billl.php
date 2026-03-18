<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cafe Bill</title>
<style>
    img{
        display:inline-block;
        margin:auto;
        width:500px;
        height:auto;
    }
    </style>

<img src="bear.jpg" alt="Cafe Image" style="display:block;margin:auto;width:500px;height:500px;;display:inline-block;">
<img src="teddy.jpg" alt="Cafe Image" style="display:block;margin:auto;width:500px;height:500px;;display:inline-block;">

<style>

body{
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#f6d365,#fda085);
    text-align:center;
    padding:20px;
    background-image: url('harman.jpg');
    background-size: cover;
}

h1{
    color:#5a2d0c;
}

.bill-box{
    width:60%;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.2);
}

table{
    width:100%;
    border-collapse: collapse;
    margin-top:15px;
}

th{
    background:#8B4513;
    color:white;
    padding:10px;
}

td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

tr:hover{
    background:#f3f3f3;
}

.total-row{
    font-size:18px;
    font-weight:bold;
    background:#f2e6dc;
}

button{
    margin-top:20px;
    padding:10px 25px;
    background:#8B4513;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#5a2d0c;
}

.info{
    display:flex;
    justify-content:space-between;
    margin-top:10px;
}

</style>
</head>

<body>

<div class="bill-box">

<h1>☕ Cafe Billing System</h1>

<div class="info">
<span>Bill No: <?php echo rand(1000,9999); ?></span>
<span>Date: <?php echo date("d-m-Y"); ?></span>
</div>

<table>

<tr>
<th>Item</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
</tr>

<?php

$total_bill = 0;

$menu = [

"Coffee"=>20,
"Tea"=>20,
"Juice"=>40,
"Mojito"=>50,
"icecream"=>40,
"Pastry"=>50,
"Sandwich"=>70,
"Burger"=>60,
"Pizza"=>80,
"Noodles"=>70,
"Momos"=>60,
"combo1"=>150,
"combo2"=>180,
"combo3"=>200

];

foreach($menu as $item=>$price){

$key=strtolower(str_replace(" ","_",$item));

$qty= isset($_POST[$key]) ? $_POST[$key] : 0;

if($qty>0){

$total=$price*$qty;

$total_bill+=$total;

echo "<tr>
<td>$item</td>
<td>₹$price</td>
<td>$qty</td>
<td>₹$total</td>
</tr>";

}

}

?>

<tr class="total-row">
<td colspan="3">Grand Total</td>
<td>₹<?php echo $total_bill; ?></td>
</tr>

</table>

<br>

<a href="indexxx.php">
<button>⬅ Back to Menu</button>
</a>

</div>

</body>
</html>