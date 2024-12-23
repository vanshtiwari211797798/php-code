<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //isset function is used to check if the value is set or not, if i want to validate the form button then i will use isset function
    if (isset($_POST['submit'])) {
        if (empty($_POST['name'])) {
            echo "name is required";
        } else if (empty($_POST['email'])) {
            echo "email is required";
        } else {
            echo $_POST['name'] . "<br>";
            echo $_POST['email'];
        }
    }
}


?>
<form action="" method="post">
    <!-- here three input type name phone email -->
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="submit" name="submit">

</form>