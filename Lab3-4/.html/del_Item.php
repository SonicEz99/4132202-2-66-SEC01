<?php

require "condb.php";

$id = $_GET["mem_id"];

try {
    $sql = "DELETE FROM id_member WHERE ID_MEM = '$id'";
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    echo "error";
}
