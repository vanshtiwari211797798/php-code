<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Table</title>
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

        th,
        td {
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

        .delete-btn {
            color: white;
            background-color: red;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>
    <h2>Profile Table</h2>
    <a href="profile.php">Create Contact</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Update</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'crud1');
            $sql = "select * from profile";
            $data = mysqli_query($conn, $sql);
            if (mysqli_num_rows($data) > 0) {
                while ($record = mysqli_fetch_assoc($data)) {


            ?>
                    <tr>
                        <td><?= $record['id'] ?></td>
                        <td><?= $record['name'] ?></td>
                        <td><?= $record['fathername'] ?></td>
                        <td><?= $record['mothername'] ?></td>
                        <td><?= $record['dob'] ?></td>
                        <td><?= $record['address'] ?></td>
                        <td><a href="updateProfile.php?id=<?= $record['id'] ?>">Edit</a></td>
                        <td><button class="delete-btn" onclick="handleDeleteAndNavigate(<?= $record['id'] ?>)">Delete</button></td>
                    </tr>

            <?php
                }
            }
            ?>
        </tbody>
    </table>

    <script>
        const handleDeleteAndNavigate = (id) => {
            let confirm = window.confirm("Are you sure to delete the item");
            if (confirm) {
                window.location.href = `delete.php?id=${id}`;
            } else {
                alert("Please allow and try again");
            }

        }
    </script>
</body>

</html>