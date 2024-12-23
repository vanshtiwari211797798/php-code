<?php

echo "My name is " . $_POST['name'] . "<br>";
echo "My phone number is " . $_POST['phone'] . "<br>";
echo "My gender is " . $_POST['gender'] . "<br>";
// $_POST //it contains the data of the form in the array format when the method is post, when the method is get then it will show the data in query string
// 
?>
<form action="" method="post">
    <label for="first">Name</label>
    <input type="text" name="name" id="first">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <label>
        <input type="radio" name="gender" value="male" /> Male
    </label>
    <label>
        <input type="radio" name="gender" value="female" /> Female
    </label>
    <input type="submit" value="submit">
</form>