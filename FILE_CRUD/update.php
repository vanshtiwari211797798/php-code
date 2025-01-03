<?php
$conn = mysqli_connect('localhost', 'root', '', 'file_uploading');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['uid'];
    $old_img = $_POST['uimg'];
    $name = $_POST['name'];
    if (empty($_FILES['image']['name'])) {
        $filename = $old_img;
    } else {
        $filename = time() . $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname, "../uploads/$filename");
    }
    $sql = "update file set name='$name', image='$filename' where id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "
                <script>
                    alert('Updated successfully');
                    window.location.href='read.php';
                </script>
            ";
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from file where id=$id";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $record = mysqli_fetch_assoc($res);

?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="uid" value="<?= $record['id'] ?>">
            <input type="hidden" name="uimg" value="<?= $record['image'] ?>">
            Name: <input type="text" value="<?= $record['name'] ?>" name="name" id="name" placeholder="enter name"><br>
            Image: <input type="file" name="image" id="name">
            <img height="50px" width="50px" style="border-radius: 50%;" src="../uploads/<?= $record['image'] ?>" alt="">
            <button type="submit">Update</button>
        </form>
<?php

    }
}
?>