<?php
$conn = mysqli_connect('localhost', 'root', '', 'new_crud');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "
                    <script>
                        alert('name field is required');
                    </script>
                ";
    } elseif (empty($_POST['phone'])) {
        echo "
                <script>
                    alert('phone field is required');
                </script>
            ";
    } elseif (empty($_POST['email'])) {
        echo "
                <script>
                    alert('email field is required');
                </script>
            ";
    } elseif (empty($_POST['password'])) {
        echo "
                <script>
                    alert('password field is required');
                </script>
            ";
    } elseif (empty($_POST['dob'])) {
        echo "
                <script>
                    alert('dob field is required');
                </script>
            ";
    } elseif (empty($_POST['country'])) {
        echo "
                <script>
                    alert('country field is required');
                </script>
            ";
    } elseif (empty($_POST['gender'])) {
        echo "
                <script>
                    alert('gender field is required');
                </script>
            ";
    } elseif (empty($_POST['subject'])) {
        echo "
                <script>
                    alert('subject field is required');
                </script>
            ";
    } elseif (empty($_POST['message'])) {
        echo "
                <script>
                    alert('message field is required');
                </script>
            ";
    } else {
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $subData = $_POST['subject'];
        $subject = implode(',', $subData);
        $message = $_POST['message'];

        $sql = "UPDATE users SET name = '$name', phone = '$phone', email = '$email', password = '$password', dob = '$dob', country = '$country', gender = '$gender', subject = '$subject', message = '$message'  WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    alert('Data Updated successfully');
                    window.location.href = 'read.php';
                </script>
            ";
        } else {
            echo mysqli_errno($conn);
        }
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from users where id=$id";
    $record = mysqli_query($conn, $sql);
    if (mysqli_num_rows($record) > 0) {
        $res = mysqli_fetch_assoc($record);
        $country = $res['country'];
        $gender = $res['gender'];
        $subjectArray = $res['subject'];
        $subject = explode(',', $subjectArray);
        // $subject1 = $subject[0];
        // $subject2 = $subject[1];
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Example</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    background-color: #f9f9f9;
                }

                .form-container {
                    max-width: 400px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #fff;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }

                .form-container h2 {
                    margin-bottom: 15px;
                    text-align: center;
                }

                .form-group {
                    margin-bottom: 15px;
                }

                .form-group label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                }

                .form-group input,
                .form-group textarea,
                select,
                .form-group button {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;

                    border-radius: 4px;
                }

                .form-group textarea {
                    resize: none;
                }

                .form-group .checkbox-group,
                .form-group .radio-group {
                    display: flex;
                    gap: 10px;
                }

                .form-group button {
                    background-color: #28a745;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                }

                .form-group button:hover {
                    background-color: #218838;
                }
            </style>
        </head>

        <body>
            <div class="form-container">
                <h2>Registration Form</h2>
                <form method="POST">
                    <input type="hidden" id="uid" name="uid" value="<?= $res['id'] ?>">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?= $res['name'] ?>" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" value="<?= $res['phone'] ?>" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?= $res['email'] ?>" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" value="<?= $res['password'] ?>" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" value="<?= $res['dob'] ?>" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="select">select country</label>
                        <select name="country" id="">
                            <option value="">Select Country---></option>
                            <option value="india" <?= $country == 'india' ? 'selected' : '' ?>>india</option>
                            <option value="nepal" <?= $country == 'nepal' ? 'selected' : '' ?>>nepal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Choose Your Gender</label>
                        <div class="radio-group">
                            <label><input type="radio" name="gender" value="male" <?= $gender == 'male' ? 'checked' : '' ?>> Male</label>
                            <label><input type="radio" name="gender" value="female" <?= $gender == 'female' ? 'checked' : '' ?>> Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <!-- in_array('hindi',$array_name), it check that hindi value is exist in the array if is available then return true else false -->
                        <input type="checkbox" name="subject[]" value="hindi" <?= in_array('hindi', $subject) ? 'checked' : '' ?>> hindi
                        <input type="checkbox" name="subject[]" value="english" <?= in_array('english', $subject) ? 'checked' : '' ?>> english

                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Write your message here..."><?= $res['message'] ?></textarea>
                    </div>
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