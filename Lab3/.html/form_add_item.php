<form>
    <label for="input_id">ID </label><br>
    <input type="text" name="id" id="input_id"><br>
    <label for="input_name">NAME</label><br>
    <input type="text" name="name" id="input_name"><br>
    <label for="input_pro">PROVINCE</label><br>
    <input type="text" name="pro" id="input_pro"><br>
    <hr>
    <button type="submit" class="btn btn-primary" >=> SAVE <=</button>
    <button type="reset" class="btn btn-danger" >=> CANCEL <=</button>
</form>

<script>
    $("form").submit(function(e){
        e.preventDefault();
        let form = $(this);
        $.ajax({
            url: "/add_item.php",
            method: "POST",
            data: form.serialize(),
            success: function(res) {
                if(res == "error"){
                    alert("Don't insert data to DB");
                }else{
                    $("#div_1").load("/list_items.php");
                    $('#staticBackdropLabel').modal('hide');
                }
            }
        });
    });
</script>