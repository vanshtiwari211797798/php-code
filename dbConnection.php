<?php
// mysqli_connect() function opens a new connection to the MySQL server. it contain 4 parameters (host, username, password, dbname), paramiter always pass in string.
// localhost ip address is 127.0.0.1  / localhost it is a default ip address of localhost. address is used to connect the server.
echo "<pre>";
   $conn  = mysqli_connect('localhost','root','','app25');
    // print_r($conn);
    if($conn){
        echo "Connection is successfull";
    }else{
        echo "Connection is not successfull";
        echo mysqli_connect_error(); // it is used to show the error message. and show why 
    }
    // $sql = "Create table student(
    //     id int(11) primary key,
    //     name varchar(255),
    //     email varchar(255)
    // )";
    // $sql = "drop table student"; // it drop the table
    // echo mysqli_query($conn,$sql); // it contain 2 parameters (connection, query). it is used to execute the query.
    // if(mysqli_query($conn,$sql)){
    //     echo "Table is created successfully";
    // }else{
    //     echo "Table is not created successfully";
    //     echo mysqli_error($conn);
    // }
    // echo "Table is created successfully";

    // $sql = "insert into student(id,name,email) values(1,'vansh','vansh@gmail.com')"; //this is ddl query
    // if(mysqli_query($conn,$sql)){
    //     echo "Data is inserted successfully";
    // }else{
    //     echo "Data is not inserted successfully";
    //     echo mysqli_error($conn);
    // }
    
    $sql = "insert into student(id,name,email) values(2,'vansh','vansh@gmail.com');"; //this is ddl query
    $sql .= "insert into student(id,name,email) values(3,'vansh','vansh@gmail.com');"; //this is ddl query
    $sql .= "insert into student(id,name,email) values(4,'vansh','vansh@gmail.com');    "; //this is ddl query
    echo $sql;
    // mysqli_multi_query($conn,$sql); // it is used to execute the multiple query.
    if(mysqli_multi_query($conn,$sql)){
        echo "Data is inserted successfully";
    }else{
        echo "Data is not inserted successfully";
        echo mysqli_error($conn);
    }
    // if(mysqli_query($conn,$sql)){
    //     echo "Data is inserted successfully";
    // }else{
    //     echo "Data is not inserted successfully";
    //     echo mysqli_error($conn);
    // }
?>