<?php

include('db_connect.php');


$statusMsg = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $country = $conn->real_escape_string($_POST['country']);
    $message = $conn->real_escape_string($_POST['message']);

    
    $sql = "INSERT INTO users (full_name, email, gender, country, message)
            VALUES ('$full_name', '$email', '$gender', '$country', '$message')";

    if ($conn->query($sql) === TRUE) {
        $statusMsg = "<p style='color: green;'>Record added successfully!</p>";
    } else {
        $statusMsg = "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Reg Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #5cbbccff;
            padding: 40px;
        }
        form {
            background: #f4f49dff;
            padding: 40px;
            border-radius: 10px;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, select, textarea {
            background:  #bcdbf6ff;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">User Registration Form</h2>

<form method="POST" action="">
    <label>Full Name:</label>
    <input type="text" name="full_name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Gender:</label>
    <select name="gender" required>
        <option value="">Select</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
    </select>

    <label>Country:</label>
    <input type="text" name="country">

    <label>Message:</label>
    <textarea name="message" rows="4"></textarea>

    <button type="submit">Submit</button>
</form>

<div style="text-align:center; margin-top:20px;">
    <?php echo $statusMsg; ?>
</div>

</body>
</html>
