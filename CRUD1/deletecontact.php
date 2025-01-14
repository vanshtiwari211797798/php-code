<?php
    $Id = $_GET['id'];
    if(isset($Id)){
        $conn = mysqli_connect('localhost','root','','file_task');
        $sql = "delete from user where id = $Id";
        if(mysqli_query($conn, $sql)){
            echo "
                <script>
                    alert('Deleted successfully');
                    window.location.href = 'readcontact.php';
                </script>
            ";
        }else{
            echo mysqli_error($conn);
    }
    }
?>