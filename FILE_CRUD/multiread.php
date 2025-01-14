<table border="2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Img</th>
            <th>update</th>
            <th>Remove</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'multiple');
        $sql = "select * from multi";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($record = mysqli_fetch_assoc($res)) {
        ?>
                <tr>
                    <td><?= $record['id'] ?></td>
                    <td>
                        <?php
                        $images = explode(",", $record['image']);
                        foreach ($images as $image) {
                        ?>
                            <p><img src="../upload/<?= $image ?>" height="30px" alt=""></p>
                        <?php
                        }
                        ?>
                    </td>
                    <td><a href="updatemulti.php?id=<?= $record['id'] ?>">Update</a></td>
                    <td><a href="deletemulti.php">Remove</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>