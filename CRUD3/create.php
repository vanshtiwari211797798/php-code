<?php
$conn = mysqli_connect('localhost', 'root','','crud1');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['country'])){
            echo "
                <script>
                    alert('country is required');
                </script>
            ";
        }elseif(empty($_POST['sub'])){
            echo "
            <script>
                alert('subject is required');
            </script>
        ";
        }else{
            $country = $_POST['country'];
            $data = $_POST['sub'];
            $sub = implode(",", $data);
            $sql = "insert into info (country, sub) value ('$country','$sub')";
            if(mysqli_query($conn, $sql)){
                echo "
                <script>
                    alert('Data inserted successfully');
                </script>
            ";
            }
        }
    }
?>


<form action="" method="POST">
select country
    <select name="country" >
    <option value="">select country</option>
        <option value="india">india</option>
        <option value="pakistan">pakistan</option>
        <option value="nepal">nepal</option>
    </select><br>
    subject:
    <br>
    <input type="checkbox" name="sub[]" value="math" id="">math
    <input type="checkbox" name="sub[]" value="science">science
    <input type="checkbox" name="sub[]" value="physics">physics <br>
    <button type="submit">Submit</button>
</form>
