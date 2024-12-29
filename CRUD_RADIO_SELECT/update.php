<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud2');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['country'])) {
        echo "
            <script>
                alert('country is required');
            </script>
        ";
    } elseif (empty($_POST['gender'])) {
        echo "
        <script>
            alert('gender is required');
        </script>
    ";
    } else {
        $id = $_POST['uid'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $sql = "update info set country='$country', gender='$gender' where id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "
            <script>
                alert('Data updated successfully');
                window.location.href ='read.php';
            </script>
        ";
        }
    }
}

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "select * from info where id='$id'";
    $record = mysqli_query($conn, $sql);
    if (mysqli_num_rows($record) > 0) {
        $res = mysqli_fetch_assoc($record);
        $Id = $res['id'];
        $Country = $res['country'];
        $Gender = $res['gender'];


?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form with Country and Gender</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f9;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }

                .form-container {
                    background: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    max-width: 400px;
                    width: 100%;
                }

                h2 {
                    text-align: center;
                    margin-bottom: 20px;
                    color: #333;
                }

                .form-group {
                    margin-bottom: 15px;
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                }

                select,
                button {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    font-size: 16px;
                }

                select:focus,
                button:focus {
                    outline: none;
                    border-color: #007bff;
                }

                button {
                    background: #007bff;
                    color: #fff;
                    cursor: pointer;
                    border: none;
                }

                button:hover {
                    background: #0056b3;
                }
            </style>
        </head>

        <body>
            <div class="form-container">
                <h2>Simple Form</h2>
                <form action="" method="post">
                    <input type="hidden" value="<?= $Id ?>" name="uid">
                    <!-- Country Selection -->
                    <div class="form-group">
                        <label for="country">Select Country</label>
                        <select id="country" name="country" required>
                            <option value="">-- Choose a Country --</option>
                            <option value="India" <?= $Country == 'India' ? 'selected' : '' ?>>India</option>
                            <option value="USA" <?= $Country == 'USA' ? 'selected' : '' ?>>USA</option>
                            <option value="UK" <?= $Country == 'UK' ? 'selected' : '' ?>>UK</option>
                            <option value="Australia" <?= $Country == 'Australia' ? 'selected' : '' ?>>Australia</option>
                            <option value="Canada" <?= $Country == 'Canada' ? 'selected' : '' ?>>Canada</option>
                        </select>
                    </div>

                    <!-- Gender Selection -->
                    <div class="form-group">
                        <label for="gender">Select Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="">-- Choose a Gender --</option>
                            <option value="Male" <?= $Gender == 'Male' ? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?= $Gender == 'Female' ? 'selected' : '' ?>>Female</option>
                            <option value="Other" <?= $Gender == 'Other' ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </body>

        </html>
<?php
    }
} else {
    header('Location:read.php');
}
?>