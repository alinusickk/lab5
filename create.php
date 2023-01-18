<?php
    require("db.php");
    if (isset($_POST["submit"])) 
    {
        $productName = $_POST["productName"];
        $price = $_POST["price"];
        $descr = $_POST["descr"];
        $db->query("INSERT INTO product (name, price, discr) VALUES ('$productName', '$price', '$descr')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="productName" placeholder="Plant name">
        <br>
        <br>
        <input type="number" name="price" placeholder="Price">
        <br>
        <br>
        <input type="text" name="descr" placeholder="Description">
        <br>
        <br>
        <button type="submit" name="submit">Send</button>

    </form>
    <br>
    <br>
    <a href="index.php">Back</a>
</body>
</html>