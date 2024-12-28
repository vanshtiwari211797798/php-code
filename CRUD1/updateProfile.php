<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud1');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "
            <script>
                alert('name is required');
            </script>
        ";
    } elseif (empty($_POST['fathername'])) {
        echo "
        <script>
            alert('fathername is required');
        </script>
    ";
    } elseif (empty($_POST['mothername'])) {
        echo "
        <script>
            alert('mothername is required');
        </script>
    ";
    } elseif (empty($_POST['dob'])) {
        echo "
        <script>
            alert('dob is required');
        </script>
    ";
    } elseif (empty($_POST['address'])) {
        echo "
        <script>
            alert('address is required');
        </script>
    ";
    } else {
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $sql = "update profile set name='$name', fathername='$fathername', mothername='$mothername', dob='$dob',address='$address' where id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "
            <script>
                alert('profile updated');
                window.location.href = 'read.php';
            </script>
        ";
        }
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from profile where id = $id";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $record = mysqli_fetch_assoc($res);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Profile Form</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    padding: 20px;
                }

                form {
                    max-width: 400px;
                    margin: auto;
                    border: 1px solid #ccc;
                    padding: 20px;
                    border-radius: 8px;
                    background-color: #f9f9f9;
                }

                .form-group {
                    margin-bottom: 15px;
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                }

                input[type="text"],
                input[type="date"],
                textarea {
                    width: 100%;
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }

                textarea {
                    resize: none;
                }

                button {
                    width: 100%;
                    padding: 10px;
                    background-color: #4CAF50;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }

                button:hover {
                    background-color: #45a049;
                }
            </style>
        </head>

        <body>
            <h2 style="text-align: center;">Profile Form</h2>
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="uid" value="<?= $record['id'] ?>">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?= $record['name'] ?>" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="fathername">Father's Name:</label>
                    <input type="text" id="fathername" name="fathername" value="<?= $record['fathername'] ?>" placeholder="Enter father's name">
                </div>
                <div class="form-group">
                    <label for="mothername">Mother's Name:</label>
                    <input type="text" id="mothername" name="mothername" value="<?= $record['mothername'] ?>" placeholder="Enter mother's name">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="text" id="dob" value="<?= $record['dob'] ?>" name="dob">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" rows="4" placeholder="Enter your address"><?= $record['address'] ?></textarea>
                </div>
                <button type="submit">Update Account</button>
            </form>
        </body>

        </html>
<?php
    }
}
?>