<?php
$conn = mysqli_connect('localhost', 'root', '', 'allDataBase');

    session_start();
    if(isset($_SESSION['user'])){
        header('Location:read.php');
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="select * from users where email='$email' and password='$password'";
        $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['user']=$email;
            header('Location:Read.php');
        }
        else{
            echo "<script>
            alert('email or password not match');
            </script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            /* background-color: #6a0dad; */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;

        }

    .main-container {
            min-height: 400px;
            width: 100%;
            max-width: 800px;
            background-color: #eeeeee;
            border-radius: 20px;
            align-items: center;
            margin-top: 70px;
        }

        .reg-heading {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 800;
            line-height: 24px;
            font-weight: 500;
            letter-spacing: 3px;
            background-color: #002233;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #ffffff;
            border-radius: 10px 10px 0px 0px;
        }

        .main-container:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* ------------------------------------------------------- */
        .input-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 5px;
            margin-right: 30px;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            width: 48%;
            margin-bottom: 5px;
        }


        /* ------------------------------------------------------------ */

        .reg-label {
            font-size: 18px;
            font-weight: 500;
            padding-left: 20px;
            color: #002233;
        }


        .reg-input {
            box-sizing: border-box;
            padding: 10px 5px;
            margin-left: 20px;
            margin-bottom: 5px;
            font-size: 17px;
            outline: none;
            font-weight: 500;
            border-top: none;
            border-left: none;
            border-right: none;
            background: none;
        }


        .reg-input:hover {
            transform: translate(3px, 1px);
        }


        .button {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .reg-button {
            width: 30%;
            padding: 13px 20px;
            border-radius: 20px;
            font-weight: 400;
            font-size: 16px;
            background-color: #002233;
            color: #ffffff;
            border: none;
            letter-spacing: 2px;
        }

        .reg-button:hover {
            cursor: pointer;
            background-color: #45a049;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .reg-link {
            background: #002233;
            padding-bottom: 20px;
            border-radius: 0px 0px 10px 10px;
        }

        .reg-h5 {
            text-align: center;
            margin-top: 30px;
            font-size: 17px;
            font-weight: 400;
            color: #ffffff;
            letter-spacing: 2px;
            padding-top: 20px;
        }

        .reg-link a {
            color: #ffffff;
            letter-spacing: 2px;
        }

        @media (max-width: 600px) {
            .main-container {
                width: 90%;
            }

            .input-row {
                width: 90%;
            }



            .input-box {
                width: 100%;
                margin-left: 10px;
            }

            .reg-input {
                margin-left: 10px;
            }

            .reg-button {
                width: 98%;
                margin-left: 0px;
                margin-right: 0px;
            }
        }
    </style>
</head>
<body>
   <div class="main-container">
        <!-- Form Section Start -->
            <form action="" method="post">
                <h2 class="reg-heading"> login</h2>
                <div class="input-row">
                    
                </div>    
                <div class="input-row">
                    <div class="input-box"> 
                        <label for="name" class="reg-label">Email:</label>
                        <input type="email" class="reg-input"  name="email">
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Password:</label>
                        <input type="password" class="reg-input" name="password">    
                    </div>
                </div>
               
                <div class="button">
                    <div class="button">
                     <button type="submit" class="reg-button">Login</button>
                    </div> 
                </div>
                <div class="reg-link">
                 <h5 class="reg-h5">Already Have a Account? <a href="#">Login</a></h5>
                </div> 
            </form>  
        <!-- Form Section End -->
    </div>
</body>
</html>