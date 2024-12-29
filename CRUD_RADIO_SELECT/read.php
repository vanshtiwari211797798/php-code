<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table with Internal CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .action-link a {
            color: #007BFF;
            text-decoration: none;
            margin: 0 5px;
        }

        .action-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h2>Sample Table</h2>
    <a href="create.php">Create</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'crud2');
            $sql = "Select * from info";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
                while ($record = mysqli_fetch_assoc($res)) {


            ?>
                    <tr>
                        <td><?= $record['id']?></td>
                        <td><?= $record['country']?></td>
                        <td><?= $record['gender']?></td>
                        <td class="action-link">
                            <a href="update.php?id=<?= $record['id']?>">Update</a>
                            <a href="delete.php?id=<?= $record['id']?>">Delete</a>
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