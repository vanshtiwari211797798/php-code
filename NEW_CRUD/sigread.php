<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="sigcreate.php">Create Data</a>
    <table border="2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'new_crud');
            $sql = "select * from single";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
                while ($record = mysqli_fetch_assoc($res)) {



            ?>
                    <tr>
                        <td><?= $record['id'] ?></td>
                        <td><?= $record['name'] ?></td>
                        <td><?= $record['created_At'] ?></td>
                        <td class="action-links">
                            <a href="sigupdat.php?id=<?= $record['id'] ?>">Update</a>
                            <a href="sigdelete.php?id=<?= $record['id'] ?>">Delete</a>
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