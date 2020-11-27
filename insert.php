<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $num = $_POST['Name'];
        $numa = $_POST['Height'];
        $numb = $_POST['Weight'];
        $numc = $numb / ($numa)**2;

        $sql = "INSERT INTO ITF (Name, Height, Weight, BMI) value ('$num','$numa', '$numb', '$numc')";

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
        <input type="text" name="Name">
        <h1>Height</h1>
        <input type="text" name="Height">
        <h1>Weight</h1>
        <input type="text" name="Weight">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
