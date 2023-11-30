<?php

include "condb.php";

$sql = "SELECT * FROM id_member";
$result = mysqli_query($conn, $sql);

// var_dump($result);
?>

<button id="btn_add"> + ADD </button>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Province</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row["ID_MEM"] ?></td>
                <td><?= $row["NAME"] ?></td>
                <td><?= $row["ID_PRO"] ?></td>
                <td><button class="btn_del" data-id="<?= $row["ID_MEM"] ?>"> DEL </button></td>
                
                <td><button class="btn_ed" data-id="<?= $row["ID_MEM"] ?>"> EDIT </button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>


<script>
    $(".btn_del").click(function() {
        let id = $(this).data("id");
        console.log(id);
        $.ajax({
            url: "/del_item.php",
            method: "GET",
            data: {
                id_memb: id
            },
            success: function(res) {
                console.log(res);
                if (res == "error") {
                    alert("Can't delete item");
                } else {
                    $("#div_item").load("/list_items.php"); //เผื่อแก้ไข
                }
            }
        });
    });


    $("#btn_add").click(function() {
        $("#div_item").load("/form_add_item.php");
    })

    $("#btn_ed").click(function() {
        $("#div_item").load("/info.php");
    })
</script>