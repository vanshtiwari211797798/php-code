<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['fname'])) {
        echo "<script>
                alert('Please enter first name');
                window.location.href = 'Create.php';
            </script>";
    } elseif (empty($_POST['lname'])) {
        echo "<script>
            alert('Please enter last name');
             window.location.href = 'Create.php';
        </script>";
    } elseif (empty($_POST['phone'])) {
        echo "<script>
            alert('Please enter phone number');
             window.location.href = 'Create.php';
        </script>";
    } elseif (empty($_POST['email'])) {
        echo "<script>
            alert('Please enter email');
             window.location.href = 'Create.php';
        </script>";
    } else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sql = "insert into users(fname, lname, phone, email) values('$fname', '$lname','$phone','$email')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Data inserted successfully');
             window.location.href = 'Read.php';
        </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
}
