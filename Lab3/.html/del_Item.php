<?php

require "condb.php";

$id = $_GET["id_memb"];

try {
    $sql = "DELETE FROM id_member WHERE ID_MEM = '$id'";
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    echo "error";
}
