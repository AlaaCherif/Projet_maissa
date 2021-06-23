<html>
<link rel="stylesheet" href="order.css">

<script> function myFunction() { alert('Your order is being processed');
}</script>

	
<?php
if(!empty($_POST["name"]) AND !empty($_POST["lname"]) AND !empty($_POST["tel"]) AND !empty($_POST["gov"]) AND !empty($_POST["city"]) AND !empty($_POST["street"]) AND !empty($_POST["card"]) )
{




echo('<table class="styled-table" >');
echo("<tr><th>Name </th><td>".$_POST["name"]."</td></tr>");
echo("<tr><th>Last Name</th><td>".$_POST["lname"]."</td></tr>");
echo("<tr><th> Telephone</th><td>".$_POST["tel"]."</td></tr>");
echo("<tr><th> Governorat</th><td>".$_POST["gov"]."</td></tr>");
echo("<tr><th> City</th><td>".$_POST["city"]."</td></tr>");
echo("<tr><th> Street</th><td>".$_POST["street"]."</td></tr>");
echo("<tr><th> Payment</th><td>".$_POST["card"]."</td></tr>");

echo("</table>");
echo'<button onclick="myFunction()" value="Confirm" class="btn" id="btn">Confirm</button>';
}


else
{echo "<script>alert('One or More fields are empty. Please check your coordinates!');</script>";}

  
?>




</html>
