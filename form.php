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
        color: black;
        text-align: center;
    }
    h2
    {
        color: blue;
    }
    span
    {
        color:#fa5020;
    }
    img 
    {
        width: 15%;
        height: 15%;
    }
    </style>

<body>
    <img src="https://m.media-amazon.com/images/I/51UeUSKuYAS._AC_SL1377_.jpg" alt="truck.jpg">
    <br>
    <h2>Welcome to <span>K</span>arim <span>Ex</span>press</h2>
    <h2><span>Order</span> and <span>Shipping</span> Calculator</h2>
    
    <form action="showship.php" method="post">

    Price: <br><input type="number" name="price" step="0.01" placeholder="price for each piece">
    <br><br>

    Quantity: <br><input type="number" name="quantity" placeholder="how much do you want">
    <br><br>

    Discount: <br><input type="number" name="discount" step="0.01">
    <br><br>

    Tax rate %: <br><input type="number" name="taxrate" max='100' min='0' step="0.5" placeholder="0 to 100">
    <br><br>

    Shipping Method:
    <br>
    <select name="ship" id="ship">
        <option value="5">Slow and steady 5$</option>
        <option value="10">Fast 10$</option>
    </select>
    <br><br>
    Number of payments: <br><select name="nofp" id="nofp">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <br><br>
<input type="submit" value="Calculate">
    </form>
</body>
</html>