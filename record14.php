<!DOCTYPE HTML>
<html>
<head>
<title>Registration Form</title>
</head>

<body bgcolor="yellow">
<center><h1><u>REGISTRATION FORM</u></h1></center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $dob = $_POST["dob"];
    $phone = $_POST["Phone"];
    $address = $_POST["Address"];
    $course = $_POST["course"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

    if (empty($name) || empty($email) || empty($password) || empty($phone) || empty($gender)) {
        echo "<script>alert('Please fill all required fields!');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address!');</script>";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<script>alert('Phone number must be 10 digits!');</script>";
    } elseif (strlen($password) < 6) {
        echo "<script>alert('Password must be at least 6 characters!');</script>";
    } else {
        echo "<script>alert('Form submitted successfully!');</script>";
    }
}
?>

<form method="post" action="">
 Name:<input type="text" name="Name"><br><br>

 Email ID:<input type="email" name="Email"><br><br>

 Password:<input type="password" name="Password"><br><br>

 Date of Birth:<input type="date" name="dob"><br><br>

 Phone Number:<input type="number" name="Phone"><br><br>

 Address:<textarea name="Address" rows="2" cols="30"></textarea><br><br>

 Course:
 <select name="course">
   <option value="MCA">MCA</option>
   <option value="MBA">MBA</option>
   <option value="B.Tech">B.Tech</option>
   <option value="CS">CS</option>
 </select><br><br>

 Gender:
 <input type="radio" name="gender" value="Male">Male
 <input type="radio" name="gender" value="Female">Female
 <input type="radio" name="gender" value="Other">Other
 <br><br>

 <center>
   <input type="submit" value="Submit">
   <input type="reset" value="Reset">
 </center>
</form>

</body>
</html>

