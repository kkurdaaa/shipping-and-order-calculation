<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body 
    {
  background-color: pink;
  color: gray;
  text-align: center;
    }
    </style>
<body>
    
<?php

$price = $_POST["price"];
$quantity = $_POST["quantity"];
$ship = $_POST["ship"];
$taxRate = $_POST["taxrate"];
$discount = $_POST["discount"];
$NumOfPayment = $_POST["nofp"];

if(!empty($_POST['price']) && !empty($_POST['quantity']) && !empty($_POST['ship']) && !empty($_POST['nofp'])
&& !empty($_POST['taxrate']) && !empty($_POST['discount']))
{
    echo 'you have selected to purchase:';
    echo '<br>';
    echo $_POST["quantity"]; 
    echo " widget(s) at ";
    echo '<br>';
    echo '$';
    echo $_POST["price"];
    echo " price each plus a ";
    echo '<br>';
    echo '$';
    echo $_POST["ship"];
    echo " shipping cost and a ";
    echo $_POST["taxrate"];
    echo " percent tax rate.";
    echo '<br>';
    echo "after your $";
    echo $_POST["discount"];
    echo " discount, the total cost is $";
    $tax=$price*$quantity*$taxRate/100;
    $total = ($price*$quantity)+$tax+$ship-$discount;
    echo $total;
    echo '<br>';
    echo "divided over ";
    echo $_POST["nofp"];
    echo " monthly payments, that would be $";
    $monthlyPayment = $total / $NumOfPayment;
    echo $monthlyPayment;
}
elseif(empty($_POST['price']) || empty($_POST['quantity']) || empty($_POST['ship']) || empty($_POST['nofp'])
|| empty($_POST['taxrate']) || empty($_POST['discount']))
{
    echo 'Please fill the form correctly!';
}
?>
</body>
</html>