<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }

        .action-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h2>User Data Table</h2>
    <a href="create.php">Create DataBase</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date of Birth</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Subjects</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'new_crud');
            $sql = "select * from users";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
                while ($record = mysqli_fetch_assoc($res)) {



            ?>
                    <tr>
                        <td><?= $record['id'] ?></td>
                        <td><?= $record['name'] ?></td>
                        <td><?= $record['phone'] ?></td>
                        <td><?= $record['email'] ?></td>
                        <td><?= $record['password'] ?></td>
                        <td><?= $record['dob'] ?></td>
                        <td><?= $record['country'] ?></td>
                        <td><?= $record['gender'] ?></td>
                        <td><?= $record['subject'] ?></td>
                        <td><?= $record['message'] ?></td>
                        <td class="action-links">
                            <a href="update.php?id=<?= $record['id'] ?>">Update</a>
                            <a href="delete.php?id=<?= $record['id'] ?>">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>