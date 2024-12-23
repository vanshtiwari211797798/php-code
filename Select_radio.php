<?php
    print_r($_POST);
?>
<form action="" method="post">

    <select name="country" id="country">
        <option value="India">India</option>
        <option value="Pakistan">Pakistan</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
    </select>
    <input type="radio" name="gender" id="gender" value="male"> male
    <input type="radio" name="gender" id="gender" value="female"/>female
    <label for="cameraInput">Click to open camera:</label>
    <input type="file" id="cameraInput" accept="image/*" capture="user">
    
    <input type="submit" value="submit">


</form>