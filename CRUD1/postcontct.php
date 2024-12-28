<?php
$conn = mysqli_connect('localhost','root','','crud1');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])){
            echo "
            <script>
                alert('Name is required');
                window.location.href = 'contact.php';
            </script>
            ";
        }elseif(empty($_POST['phone'])){
            echo "
            <script>
                alert('phone is required');
                window.location.href = 'contact.php';
            </script>
            ";
        }elseif(empty($_POST['email'])){
            echo "
            <script>
                alert('email is required');
                window.location.href = 'contact.php';
            </script>
            ";
        }elseif(empty($_POST['message'])){
            echo "
            <script>
                alert('message is required');
                window.location.href = 'contact.php';
            </script>
            ";
        }else{
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $sql = "insert into contact(name,phone,email,message) value ('$name', '$phone','$email','$message')";

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