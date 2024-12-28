<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Delete Button</title>
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .table-container {
            margin: 50px auto;
            max-width: 800px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #007bff;
            color: #fff;
        }

        th,
        td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }

        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        th {
            font-size: 1.1em;
        }

        td {
            font-size: 1em;
        }

        .delete-btn {
            padding: 8px 12px;
            font-size: 0.9em;
            color: #fff;
            background-color: #dc3545;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <a href="Create.php">Create Data</a>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'crud');
                $sql = 'select * from users';
                $res = mysqli_query($conn, $sql);
                // for count row use mysqli_num_row($res)
                if (mysqli_num_rows($res) > 0) {
                    while ($record = mysqli_fetch_assoc($res)) {
                        // print_r($record); //for all
                        // print_r($record['fname']); //based on key

                ?>
                        <tr>
                            <td><?= $record['fname']?></td>
                            <td><?= $record['lname']?></td>
                            <td><?= $record['phone']?></td>
                            <td><?= $record['email']?></td>
                            <td><button class="delete-btn"><a href="delete.php?id=<?= $record['id']?>">Delete</a></button></td>
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