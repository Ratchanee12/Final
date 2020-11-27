<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $num = $_POST['Name'];
        $numa = $_POST['Height'];
        $numb = $_POST['Weight'];
        $numc = $numb / $numa;

        $sql = "INSERT INTO labitf (Name, Height, Weight, BMI) value ('$num','$numa', '$numb', '$numc')";

        if(mysqli_query($conn, $sql)){
            echo "New data insert successfully";
            echo "<a href='index.php'>back to home page</a>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <h1>Name</h1>
        <input type="text" name="Product">
        <h1>Height</h1>
        <input type="text" name="Price">
        <h1>Weight</h1>
        <input type="text" name="Amount">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
