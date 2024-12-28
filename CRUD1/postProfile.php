<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud1');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "
                <script>
                    alert('Name field is required');
                    window.location.href = 'profile.php';
                </script>
            ";
    } elseif (empty($_POST['fathername'])) {
        echo "
            <script>
                alert('fatherName field is required');
            </script>
        ";
    } elseif (empty($_POST['mothername'])) {
        echo "
            <script>
                alert('mother field is required');
            </script>
        ";
    } elseif (empty($_POST['dob'])) {
        echo "
        <script>
            alert('dob field is required');
        </script>
    ";
    } elseif (empty($_POST['address'])) {
        echo "
        <script>
            alert('address field is required');
        </script>
    ";
    } else {
        $name = $_POST['name'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];

        $sql = "insert into profile(name, fathername, mothername, dob, address) value ('$name', '$fathername', '$mothername', '$dob','$address')";
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    alert('Form submitted successfully');
                    window.location.href = 'read.php';
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }
}
