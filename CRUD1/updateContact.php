<?php
$conn = mysqli_connect('localhost','root','','file_task');
// updated query here
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        echo "
            <script>
                alert('name is required');
            </script>
        ";

    }elseif(empty($_FILES['image']['name'])){
        echo "
        <script>
            alert('img is required');
        </script>
    ";
    }else{
        $id = $_POST['uid'];
        $old = $_POST['oldimg'];
        $name = $_POST['name'];
        $sql = "update user set name='$name', phone='$phone' where id=$id";
        echo $id, $name, $phone, $email, $message;
        if(mysqli_query($conn,$sql)){
            echo "
            <script>
                alert('Contact updated');
                window.location.href='readcontact.php';
            </script>
        ";
        }
    }
}


// set the data in form
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from user where id=$id";
    $res = mysqli_query($conn, $sql);
   if(mysqli_num_rows($res) > 0){
    $record = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 20px;
    }
    form {
      max-width: 400px;
      margin: auto;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 8px;
      background-color: #f9f9f9;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    textarea {
      resize: none;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2 style="text-align: center;">Contact Form</h2>
  <form  method="POST">
    <input type="hidden" name="uid" value="<?=$record['id']?>">
    <input type="hidden" name="oldimg" value="<?=$record['image']?>">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?=$record['name']?>" placeholder="Enter your name" >
    </div>
    <div class="form-group">
      <label for="phone">img:</label>
      <input type="file" multiple id="phone" name="image[]"  />
    </div>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
<?php
   }
}
?>