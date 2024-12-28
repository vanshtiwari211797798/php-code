<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Table</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f4f4f4;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>
  <h2>Contact Table</h2>
  <a href="contact.php">Create Contact</a>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Message</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $conn = mysqli_connect('localhost','root','','crud1');
            $sql = 'select * from contact';
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                while($record = mysqli_fetch_assoc($res)){

     
        ?>
      <tr>
        <td><?= $record['name']?></td>
        <td><?= $record['phone']?></td>
        <td><?= $record['email']?></td>
        <td><?= $record['message']?></td>
        <td><button onclick="handleDelete(<?= $record['id']?>)">Delete</button></td>
      </tr>
      <?php
                   }
                }
      ?>
    </tbody>
  </table>

  <script>
    const handleDelete = (Id) => {
        window.location.href = `deletecontact.php?id=${Id}`;
    }
  </script>
</body>
</html>
