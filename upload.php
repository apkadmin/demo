<?php
$target_dir = "./";
$target_file = $target_dir . "vtv.apk";  
 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". $_FILES["file"]["name"]. " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/" method="POST">
  <input type="file" name="file"/>
  <input type="submit" name= "submit"/>
</form>
    
</body>
</html>