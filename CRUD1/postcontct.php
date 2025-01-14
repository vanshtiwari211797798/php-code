<?php
$conn = mysqli_connect('localhost','root','','file_task');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])){
            echo "
            <script>
                alert('Name is required');
                window.location.href = 'contact.php';
            </script>
            ";
        }elseif(empty($_FILES['image']['name'])){
            echo "
            <script>
                alert('image is required');
                window.location.href = 'contact.php';
            </script>
            ";
        }else{
            $name = $_POST['name'];
            $filename = time().$_FILES['image']['name'];
            $tmpname = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname, "../uploads/$filename");
            $sql = "insert into user(name,image) value ('$name', '$filename')";

            if(mysqli_query($conn, $sql)){
                echo "
                    <script>
                        alert('Inserted successfully');
                        window.location.href = 'readcontact.php';
                    </script>
                ";
            }else{
                echo mysqli_errno($conn);
            }
        }
    }
?>