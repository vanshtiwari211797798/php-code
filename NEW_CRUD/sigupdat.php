<?php
$conn = mysqli_connect('localhost', 'root', '', 'new_crud');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "
                    <script>
                        alert('name field is required');
                    </script>
                ";
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sql = "update single set name='$name' where id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    alert('Data Updated successfully');
                    window.location.href = 'sigread.php';
                </script>
            ";
        } else {
            echo mysqli_errno($conn);
        }
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from single where id=$id";
    $record = mysqli_query($conn, $sql);
    if (mysqli_num_rows($record) > 0) {
        $res = mysqli_fetch_assoc($record);
?>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $res['id']?>">
            <input type="text" name="name" id="name" value="<?= $res['name']?>" placeholder="Enter name">
            <button type="submit">Update</button>
        </form>
<?php
    }
}
?>