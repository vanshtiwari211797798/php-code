<?php
    $conn = mysqli_connect('localhost', 'root', '', 'new_crud');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo "
                    <script>
                        alert('name field is required');
                    </script>
                ";
        }  else {
            $name = $_POST['name'];
            $sql = "insert into single (name) value ('$name')";
            if (mysqli_query($conn, $sql)) {
                echo "
                <script>
                    alert('Data inserted successfully');
                    window.location.href = 'sigread.php';
                </script>
            ";
            } else {
                echo mysqli_errno($conn);
            }
        }
    }
?>
<form action="" method="POST">
    <input type="text" name="name" id="name" placeholder="Enter name">
    <button type="submit">Create</button>
</form>