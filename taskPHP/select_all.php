<?php
  if (isset($_POST['submit'])) {
     foreach ($_POST['check'] as $index => $value) {
       $num = $index + 1;
       echo "$num: $value <br>";
     }
  }


?>
<!-- in search bar: google jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
  $(document).ready(function(){
    console.log("Document's ready!");
    $("#form1 #select-all").click(function(){
      $("#form1 input[type='checkbox']").prop('checked', this.checked);
    });
  })
</script>

<form action="" method="POST" id="form1">
  <input type="checkbox" id="select-all" /> Select All <br/><br>
  <input type="checkbox" name="check[]" value="Value 1" /> Value 1 <br>
  <input type="checkbox" name="check[]" value="Value 2" /> Value 2 <br>
  <input type="checkbox" name="check[]" value="Value 3" /> Value 3 <br>
  <input type="checkbox" name="check[]" value="Value 4" /> Value 4 <br><br>
  <input type="submit" value="Submit" name="submit" />
</form>
