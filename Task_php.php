<?php
    $connection = mysqli_connect('localhost','root','','task1');
    if($connection){
        echo 'Connection successfully';
    }else{
        echo 'connection error';
        echo mysqli_connect_errno();
    }

    // $sql = 'create table student(id int(20) primary key, name varchar(20), phone varchar(12), email varchar(50))';

    // if(mysqli_query($connection,$sql)){
    //     echo 'table created successfully';
    // }else{
    //     echo mysqli_error($connection);
    // }
    
    // $sql = 'create table teacher(id int(20) primary key, name varchar(20), phone varchar(12), email varchar(50))';

    // if(mysqli_query($connection,$sql)){
    //     echo 'table created successfully';
    // }else{
    //     echo mysqli_error($connection);
    // }

    
    // $sql = 'create table employee(id int(20) primary key, name varchar(20), phone varchar(12), email varchar(50))';

    // if(mysqli_query($connection,$sql)){
    //     echo 'table created successfully';
    // }else{
    //     echo mysqli_error($connection);
    // }


    
    // $sql = 'create table doctors(id int(20) primary key, name varchar(20), phone varchar(12), email varchar(50))';

    // if(mysqli_query($connection,$sql)){
    //     echo 'table created successfully';
    // }else{
    //     echo mysqli_error($connection);
    // }
    

    
    // $sql = 'create table users(id int(20) primary key, name varchar(20), phone varchar(12), email varchar(50))';

    // if(mysqli_query($connection,$sql)){
    //     echo 'table created successfully';
    // }else{
    //     echo mysqli_error($connection);
    // }

        // $sql = "insert into users(id,name,phone,email) values(6,'rajan','9800264580','vansh@gmail.com');";

    // if(mysqli_query($connection,$sql)){
    //     echo 'inserted successfully';
    // }else{
    //     echo mysqli_error($connection);
    // }

    // $sql = "insert into users(id,name,phone,email) values(6,'rajan','9800264580','vansh@gmail.com');";
    // $sql .= "insert into users(id,name,phone,email) values(7,'neha','9800264580','vansh@gmail.com');";
    // $sql .= "insert into users(id,name,phone,email) values(8,'shristi','9800264580','vansh@gmail.com');";
    // $sql .= "insert into users(id,name,phone,email) values(9,'sadhvi','9800264580','vansh@gmail.com');";
    // if(mysqli_multi_query($connection,$sql)){
    //     echo 'data inserted';
    // }else{
    //     echo mysqli_error($connection);
    // }

    // $sql = "insert into teacher(id,name,phone,email) values(6,'rajan','9800264580','vansh@gmail.com');";
    // $sql .= "insert into teacher(id,name,phone,email) values(7,'neha','9800264580','vansh@gmail.com');";
    // $sql .= "insert into teacher(id,name,phone,email) values(8,'shristi','9800264580','vansh@gmail.com');";
    // $sql .= "insert into teacher(id,name,phone,email) values(9,'sadhvi','9800264580','vansh@gmail.com');";
    // if(mysqli_multi_query($connection,$sql)){
    //     echo 'data inserted';
    // }else{
    //     echo mysqli_error($connection);
    // }

    // $sql = "insert into student(id,name,phone,email) values(6,'rajan','9800264580','vansh@gmail.com');";
    // $sql .= "insert into student(id,name,phone,email) values(7,'neha','9800264580','vansh@gmail.com');";
    // $sql .= "insert into student(id,name,phone,email) values(8,'shristi','9800264580','vansh@gmail.com');";
    // $sql .= "insert into student(id,name,phone,email) values(9,'sadhvi','9800264580','vansh@gmail.com');";
    // if(mysqli_multi_query($connection,$sql)){
    //     echo 'data inserted';
    // }else{
    //     echo mysqli_error($connection);
    // }

    // $sql = "insert into employee(id,name,phone,email) values(6,'rajan','9800264580','vansh@gmail.com');";
    // $sql .= "insert into employee(id,name,phone,email) values(7,'neha','9800264580','vansh@gmail.com');";
    // $sql .= "insert into employee(id,name,phone,email) values(8,'shristi','9800264580','vansh@gmail.com');";
    // $sql .= "insert into employee(id,name,phone,email) values(9,'sadhvi','9800264580','vansh@gmail.com');";
    // if(mysqli_multi_query($connection,$sql)){
    //     echo 'data inserted';
    // }else{
    //     echo mysqli_error($connection);
    // }

    // $sql = "insert into doctors(id,name,phone,email) values(6,'rajan','9800264580','vansh@gmail.com');";
    // $sql .= "insert into doctors(id,name,phone,email) values(7,'neha','9800264580','vansh@gmail.com');";
    // $sql .= "insert into doctors(id,name,phone,email) values(8,'shristi','9800264580','vansh@gmail.com');";
    // $sql .= "insert into doctors(id,name,phone,email) values(9,'sadhvi','9800264580','vansh@gmail.com');";
    // if(mysqli_multi_query($connection,$sql)){
    //     echo 'data inserted';
    // }else{
    //     echo mysqli_error($connection);
    // }

    $sql='select * from users';
    $result = mysqli_query($connection,$sql);
    echo mysqli_num_rows($result); ////it return how many row are return 
    echo '<pre>';
    // print_r(mysqli_fetch_all($result,MYSQLI_ASSOC));
    print_r(mysqli_fetch_assoc($result));
?>