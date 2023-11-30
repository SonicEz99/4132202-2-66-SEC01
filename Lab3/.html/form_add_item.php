<form>
    <label for="input_id">ID : </label>
    <input type="text" name="id" id="input_id"><br>
    <label for="input_name">NAME : </label>
    <input type="text" name="name" id="input_name"><br>
    <label for="input_pro">PROVINCE : </label>
    <input type="text" name="pro" id="input_pro"><br>
    <button type="submit">=> SAVE <=</button>
    <button type="reset">=> CANCEL <=</button>
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
                    $("#div_item").load("/list_items.php")
                }
                
            }
        });
    });
</script>