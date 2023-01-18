<?php require ("db.php");
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET["id"];
    $product = $db->query("SELECT * FROM product WHERE id=$id")->fetchAll();


    $product = $product[0];
    
    
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $name = $_POST['productName'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];

    $db->query("UPDATE product SET name='$name', price='$price', discr='$descr' WHERE id=$id");
    echo '<script>
    alert("Plant succesfully updated!");
    location.href = "index.php";
    </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="productName"  value="<?php echo $product["name"]?>">
        <br>
        <br>
        <input type="number" name="price" value="<?php echo $product["price"]?>">
        <br>
        <br>
        <input type="text" name="descr" value="<?php echo $product["discr"]?>">

        <input type="hidden" name="id" value="<?php echo $product["id"]?>">
        <br>
        <br>
        <button type="submit" name="submit">Update</button>

    </form>
    <br>
    <br>
    <a href="index.php">Back</a>
</body>
</html>