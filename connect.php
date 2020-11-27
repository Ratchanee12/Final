<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ratchanee.mysql.database.azure.com', 'Ratchanee@ratchanee', 'FWTsod26', 'ITFLab', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>
