<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .table-container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        table th,
        table td {
            border: 1px solid #dddddd;
            padding: 8px 12px;
            text-align: center;
        }

        table th {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }

        img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h2>User Table</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'file_uploading');
                $sql = "select * from file";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($record = mysqli_fetch_assoc($res)) {

                ?>
                        <tr>
                            <td><?=$record['id']?></td>
                            <td><?=$record['name']?></td>
                            <td><img src="../uploads/<?=$record['image']?>" alt="User Image"></td>
                            <td><a href="delete.php?id=<?=$record['id']?>">Delete</a></td>
                            <td><a href="update.php?id=<?=$record['id']?>">Update</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>