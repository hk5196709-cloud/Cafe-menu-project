<!DOCTYPE html>
<html>
<head>
<title>My Cafe</title>
<link rel="stylesheet" href="style.css">
<style>

body{
    font-family: georgia,serif;
    background: linear-gradient(to right,#ffecd2,#fcb69f);
    background-image
}

h1{
    text-align:center;
    color:#8B4513;
    font-size: 100px;
}
h2{
    color:#8B4513;
    font-size: 50px;
}

.MENU{
    width:500px;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0px 0px 10px gray;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:10px;
    text-align:center;
}

th{
    background:#8B4513;
    color:white;
}

tr:nth-child(even){
    background:#f2f2f2;
}

button,input[type="submit"]{
    background:#8B4513;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:5px;
    cursor:pointer;
}

button:hover,input[type="submit"]:hover{
    background:#A0522D;
}

input[type="number"]{
    width:60px;
}

</style>
</head>

<body>

<h1>☕ WELCOME TO TEDDY CAFE ☕</h1>
<img src="teddy.jpg" alt="Cafe Image" style="display:block;margin:auto;width:700px;height:auto;">

<h3> One of the most popular teddy-themed cafés in Delhi
 Known for big teddy bears placed on seats/tables
 Cozy, aesthetic vibe with lots of cute décor
 Good for: dates, friends, Instagram pics
👉 People love it because you literally sit with giant teddy bears 🧸
👉 It has a warm, dreamy ambiance with fun food options
</h3>
<br><br>
<h2 align="center">MENU</h2>

<div class="MENU">

<form method="post" action="billl.php">

<table>

<tr> 
<th>Item</th>
<th>Price</th>
<th>Quantity</th>
</tr>

<tr>
<td>Coffee</td>
<td>20</td>
<td><input type="number" name="coffee" min="0" value="0"></td>
</tr>

<tr>
<td>Tea</td>
<td>20</td>
<td><input type="number" name="tea" min="0" value="0"></td>
</tr>

<tr>
<td>Juice</td>
<td>40</td>
<td><input type="number" name="juice" min="0" value="0"></td>
</tr>

<tr>
<td>Mojito</td>
<td>50</td>
<td><input type="number" name="mojito" min="0" value="0"></td>
</tr>

<tr>
<td>Ice-Cream</td>
<td>40</td>
<td><input type="number" name="icecream" min="0" value="0"></td>
</tr>

<tr>
<td>Pastry</td>
<td>50</td>
<td><input type="number" name="pastry" min="0" value="0"></td>
</tr>

<tr>
<td>Sandwich</td>
<td>70</td>
<td><input type="number" name="sandwich" min="0" value="0"></td>
</tr>

<tr>
<td>Burger</td>
<td>60</td>
<td><input type="number" name="burger" min="0" value="0"></td>
</tr>

<tr>
<td>Pizza</td>
<td>80</td>
<td><input type="number" name="pizza" min="0" value="0"></td>
</tr>

<tr>
<td>Noodles</td>
<td>70</td>
<td><input type="number" name="noodles" min="0" value="0"></td>
</tr>

<tr>
<td>Momos</td>
<td>60</td>
<td><input type="number" name="momos" min="0" value="0"></td>
</tr>

<tr>
<td>Combo 1 (Fries,Burger,Coke)</td>
<td>150</td>
<td><input type="number" name="combo1" min="0" value="0"></td>
</tr>

<tr>
<td>Combo 2 (Pizza,Fries,Coke)</td>
<td>180</td>
<td><input type="number" name="combo2" min="0" value="0"></td>
</tr>

<tr>
<td>Combo 3 (Pastry,Noodles,Mojito)</td>
<td>200</td>
<td><input type="number" name="combo3" min="0" value="0"></td>
</tr>

</table>

<br>
<center>
<input type="submit" value="Calculate Bill">
</center>

</form>

</div>

</body>
</html>