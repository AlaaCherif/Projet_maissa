<html>
<head>
<script type="text/javascript" src="delivery.js"></script>
<link rel="stylesheet" href="Tawsila.css">

</head>
<body>

<center><h1 id="del">Place Your Order</h1> </center><br>
<center><table id="orders">
<tr>
<td colspan="2"><center><h2>Chili's</h2></center></td>
<td colspan="2"><center><h2>KFC</h2></center></td>
<td colspan="2"><center><h2>Eric Kayser</h2></center></td>
<td colspan="2"><center><h2>Papa Jhon's</h2></center></td>

<tr>
<td>

  <input type="checkbox" name="order1">Country Fried Chicken<br><br>
  <input type="checkbox">Big Mouth Burger<br><br>
  <input type="checkbox">Original Crispers<br><br>
  <input type="checkbox">Regular Salad<br><br>
  <input type="checkbox">Signature Wings<br><br>
  <input type="checkbox">Tripple Dipper<br><br>

 
 
</td>
  <td id="quantity">
   <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>

  </td>
<td>
  <input type="checkbox">Zinger Classic Meal<br><br>
  <input type="checkbox">Zinger Supreme<br><br>
  <input type="checkbox">Supreme Xtreme Meal<br><br>
  <input type="checkbox">Mighty Zinger<br><br>
  <input type="checkbox">Mighty Zinger Meal<br><br>
  <input type="checkbox">Spicy Xtreme Meal<br><br>
</td>
<td id="quantity">
   <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  </td>
<td>
  <input type="checkbox">Chocolate Cake<br><br>
  <input type="checkbox">Love Cake<br><br>
  <input type="checkbox">Strawberry Cake<br><br>
  <input type="checkbox">Macaron<br><br>
  <input type="checkbox">Chocolate Bead<br><br>
  <input type="checkbox">Salty Treats<br><br>

</td>
  <td  id="quantity">
   <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  </td>
 <td>
  <input type="checkbox">Papadias<br><br>
  <input type="checkbox">Large Pizza<br><br>
  <input type="checkbox">Meduim Pizza<br><br>
  <input type="checkbox">White Castle<br><br>
  <input type="checkbox">Qdoba Mexican Eats<br><br>
  <input type="checkbox">Olive Garden<br><br>
</td>
  <td id="quantity">
   <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  <input type="text" size=1px><br><br>
  </td>
</tr>
</table><br><br><br>

<center><h1 id="del">Delivery Information</h1> </center><br>
<center>
<form action= "order.php" method= "post" name="form2">
<table id="deliver">
<tr><td>
Name</td></tr>
<tr>
<td><input type="text" class="inputs2" name="name"></td ></tr>
<tr><td>Last Name</td></tr>
<tr><td><input type="text" class="inputs2" name="lname"></td></tr>
<tr><td>Telephone Number</td></tr>
<tr><td><input type="text" class="inputs2" name="tel"></td></tr>
<tr><td>Governorate</td></tr>
<tr><td><input type="text" class="inputs2" name="gov"></td></tr>
<tr><td>City</td></tr>
<tr><td><input type="text" class="inputs2" name="city"></td></tr>
<tr><td>Street</td></tr>
<tr><td><input type="text" class="inputs2" name="street"></td></tr>
<tr><td>Payment Method : 
Credit Card <input type="radio" name="card" value="credit" onclick="show()" id="credit">
Cash On Site<input type="radio" name="card" value="debit" onclick="show()"></td></tr>
<tr><td>
<div id="infos">
<table>

<tr>
<td>Credit Card Information<br>
<table>
<tr>
<td>Card Number</td><td><input type="text" class="inputs"></td>
</tr>
<tr>
<td>
Expiration Date</td><td><input type="text" placeholder="MM/YY" class="inputs"></td>
</tr>
<tr>
<td>
CVV</td><td><input type="text" placeholder="3 digits" class="inputs"></td>
</tr>
</table>
</table>
</td></tr>
<tr>
</form>
<td><input type="submit" value="Order" class="but" id="order" > </td></tr>
</table></center>
</center>

</body>
</html>