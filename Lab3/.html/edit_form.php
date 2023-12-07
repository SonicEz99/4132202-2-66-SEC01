<?php
include "condb.php";

$id = $_GET['id'];
$sql = "SELECT * FROM id_member WHERE ID_MEM = '$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form>
    <label for="id_p">ID : </label>
    <input type="text" name="id" id="id_p" value="<?= $row['ID_MEM'] ?>" readonly> <br>

    <label for="name_p">NAME : </label>
    <input type="text" name="name" id="name_p" value="<?= $row['MEM_NAME'] ?>"> <br>

    <label for="pro_p">PROVINCE : </label>
    <input type="text" name="pro" id="pro_p" value="<?= $row['ID_PRO'] ?>"><br>

    <button type="submit" class="btn btn-primary">SAVE</button>
    <button type="reset" class="btn btn-danger">CANCLE</button>
</form>

<script>
    $(function() {
        $("form").submit(function(e) {
            e.preventDefault();

            let fm = $(this);
            $.ajax({
                url: "/edit_item.php",
                method: "POST",
                data: fm.serialize(),
                success: function(res) {
                    if (res == 'error')
                        alert("Can't insert data.")
                    else {
                        $("#div_1").load("/list_items.php");
                        $('#staticBackdrop').modal('hide');

                    }
                }
            });
        });
    });
</script>