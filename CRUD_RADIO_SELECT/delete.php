<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud2');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from info where id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "
                <script>
                    alert('Data deleted successfully');
                    window.location.href = 'read.php';
                </script>
            ";
    } else {
        echo mysqli_error($conn);
    }
} else {
    header('Location:read.php');
}
