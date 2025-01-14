<?php
$conn = mysqli_connect('localhost','root','','multiple');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach($_FILES['image']['name'] as $key=>$val){
        // echo $val;
        // echo $_FILES['file']['tmp_name'][$key];
        move_uploaded_file($_FILES['image']['tmp_name'][$key],"../upload/$val");
    }
    $image = implode(',',$_FILES['image']['name']);
    $sql = "insert into multi (image) value('$image')";
    if(mysqli_query($conn, $sql)){
       echo "
        <script>
            alert('uploaded successfully');
            window.location.href='multiread.php';
        </script>
       ";
    }
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple>
        <button type="submit">upload</button>
    </form>
</body>
</html> 