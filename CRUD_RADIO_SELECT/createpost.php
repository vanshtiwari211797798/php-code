<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud2');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['country'])) {
        echo "
                <script>
                    alert('country must be required');
                    window.location.href = 'create.php';
                </script>
            ";
    } elseif (empty($_POST['gender'])) {
        echo "
            <script>
                alert('gender must be required');
                window.location.href = 'create.php';
            </script>
        ";
    } else {
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $sql = "insert into info (country, gender) value ('$country','$gender')";
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    alert('data inserted successfully');
                    window.location.href = 'read.php';
                </script>
            ";
        }
    }
}
