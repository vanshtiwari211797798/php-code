<?php
   echo Date('Y'); //current year
   echo Date('m'); // current month
   echo Date('d'); // current date, if small d then print date like this formet 18 else enter D then print ( wed ) format.
   echo "<br/>";
   echo 'current date is'. "&nbsp;". Date('Y-m-d'); // current date is
   echo "<br/>";
   echo 'current hours is'. "&nbsp;". Date('H-i-s-a'); // current hours minutes and second -> i for minutes, h for hours and s for seconds
   echo date_default_timezone_get(); //getting the time zone according to the xampp server
    date_default_timezone_set("asia/kolkata"); //set 
   echo "<br>";
   echo date_default_timezone_get();
   echo "<br>";
   echo 'current hours is'. "&nbsp;". Date('H-i-s-a') ."<br/>"; // current hours minutes and second -> i for minutes, h for hours and s for seconds
   echo  'current date and time is ' .date("d/m/Y h:i:s:a") ."<br/>"; // current year, month, date, hours, minutes and seconds
   echo date("05-05-2020-a");// -> mktime is also used liked this;
   $a = mktime(11, 05, 41, 12, 17, 2025);
   echo "<br/>";
   echo date("Y-m-d h:i:s:a",$a) ."<br>";


//    String to time conversion using strtotime methods

    $b= strtotime("10:20a 12 june");
    echo date("Y-m-d h:i:s:a",$b) ."<br>";
   
?>