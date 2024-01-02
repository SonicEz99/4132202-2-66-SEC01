<?php
include "condb.php";

$sql = "SELECT * FROM id_member";
$result = mysqli_query($conn, $sql);

// var_dump($result);
?>
<!-- Button trigger modal -->
<button id="btn_add" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    + ADD
</button>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>PROVINCE</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['ID_MEM'] ?></td>
                <td><?= $row['MEM_NAME'] ?></td>
                <td><?= $row['ID_PRO'] ?></td>
                <td><button class="btn_del btn btn-danger" data-id="<?= $row['ID_MEM'] ?>">del</button></td>
                <td>
                    <button class="btn_edt btn btn-info" data-id="<?= $row['ID_MEM'] ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    $(function() {
        $(".btn_edt").click(function() {
            let id = $(this).data('id');
            console.log(id);

            $("#staticBackdropLabel").text("Edit member");
            $(".modal-body").load(`/edit_form.php?id=${id}`);
            $(".modal-footer").hide();
        });

        $(".btn_del").click(function() {
            let id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "/del_item.php",
                method: "GET",
                data: {
                    mem_id: id
                },
                success: function(res) {
                    if (res == 'error')
                        alert("Can't delete item.");
                    else
                        $("#div_1").load("/list_items.php");
                }
            });
        });

        $("#btn_add").click(function() {
            $("#staticBackdropLabel").text("Add member");
            $(".modal-body").load("/form_add_item.php");
            $(".modal-footer").hide();
        });


    }); //jQuery Ready
</script>