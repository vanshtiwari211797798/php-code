<?php
// file uploading method
// move_uploaded_file() -> it contain two parameters first is the source file (tmp name) and second is the destination file
$conn = mysqli_connect('localhost','root','','file_uploading');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        echo "
            <script>
                alert('name field is required');
            </script>
        ";

    }elseif(empty($_FILES['image']['name'])){
        echo "
        <script>
            alert('file field is required');
        </script>
    ";
    }else{
        $name = $_POST['name'];
        $filename = time().$_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname, "../uploads/$filename");
        $sql = "insert into file (name, image) values('$name','$filename')";
        if(mysqli_query($conn, $sql)){
            echo "
            <script>
                alert('file uploaded successfully');
                window.location.href='read.php';
            </script>
        ";
        }else{
            mysqli_error($conn);
        }
    }
}
?>
<form method="POST" enctype="multipart/form-data">
   Name: <input type="text" name="name" id="name" placeholder="enter name"><br>
   Image: <input type="file" name="image" id="name">
   <button type="submit">Upload</button>
</form>