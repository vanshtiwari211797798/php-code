<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Form</title>
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
    input[type="date"],
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
  <h2 style="text-align: center;">Profile Form</h2>
  <form action="postProfile.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" >
    </div>
    <div class="form-group">
      <label for="fathername">Father's Name:</label>
      <input type="text" id="fathername" name="fathername" placeholder="Enter father's name" >
    </div>
    <div class="form-group">
      <label for="mothername">Mother's Name:</label>
      <input type="text" id="mothername" name="mothername" placeholder="Enter mother's name" >
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="text" id="dob" name="dob" >
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea id="address" name="address" rows="4" placeholder="Enter your address" ></textarea>
    </div>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
