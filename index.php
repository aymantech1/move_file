<?php
echo '<pre>';
var_dump($_FILES);
echo '</pre>';
if(isset($_POST['submit'])){
    $id=10;
    $newname = $id.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"img/".$newname);
}
?>
<html>
    <head></head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit">
        </form>
    </body>
</html>