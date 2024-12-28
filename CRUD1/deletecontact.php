<?php
    $Id = $_GET['id'];
    if(isset($Id)){
        $conn = mysqli_connect('localhost','root','','crud1');
        $sql = "delete from contact where id = $Id";
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