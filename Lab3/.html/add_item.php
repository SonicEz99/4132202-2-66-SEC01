<?php

require_once "condb.php";

$id = $_POST['id'];
$name = $_POST['name'];
$pro = $_POST['pro'];

try {
    $sql = "INSERT INTO id_member VALUES('$id','$name','$pro')";
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    echo "error";
}
