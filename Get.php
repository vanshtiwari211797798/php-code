<?php
    // get method contains the data of the form in the array format when the method is get, get method show the data in query string
    print_r($_GET);
    // Difference b/w $_SERVER AND $_REQUEST
    // $_SERVER is a super global variable which holds the information about headers, paths, and script locations.
    // $_REQUEST is a super global variable which is widely used to collect data after submitting an HTML form.

    // Difference b/w $_GET AND $_POST
    // $_GET is an associative array of variables passed to the current script via the URL parameters.
    // $_POST is an associative array of variables passed to the current script via the HTTP POST method.
    // get method is alway write in upper case  
?>


<form action=""n>
        <label for="first">Name</label>
        <input type="text" name="name" id="first">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone">
        <input type="submit" value="submit">
</form>