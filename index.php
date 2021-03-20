<?php
// var_dump($_REQUEST);
$file2 = '111.txt'; 
$content = $_REQUEST['vvv'];
file_put_contents($file2, $content, FILE_APPEND);

echo "work!!";
echo $content;
?>
<div style="background: green;">100</div>
<!-- <form method="post" enctype="multipart/form-data" action="back.php">
 <div>
   <label for="file">Choose file to upload</label>
   <input type="file" id="file" name="file" multiple>
 </div>
 <div>
   <button>Submit</button>
 </div>
</form> -->

<script>


</script>