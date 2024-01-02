<?php

require "condb.php";

$id = $_POST['id'];
$name = $_POST['name'];
$Pro = $_POST['pro'];
$sql = "UPDATE id_member SET MEM_NAME ='$name', ID_PRO = '$Pro' WHERE ID_MEM = '$id' "; // Fix: use $id variable here
try {
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    //echo $e->getMessage();
    echo "error";
}

?>