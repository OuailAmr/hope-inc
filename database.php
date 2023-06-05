<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the data from the form input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $password_comfirmation = $_POST['password2'];

    $hashedPw = base64_encode($password);

    // Sanitize the data to prevent SQL injection attacks
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    if(preg_match("/^[a-zA-Z0-9]*$/",$password) == 0 && strlen($password)>7){
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $check_result = mysqli_query($conn, $check_query);
    }else{
        header('Location: index.php?error=invalidpw');
    }
    
    if(mysqli_num_rows($check_result) > 0){
        // if the email already exists, redirect back to the form page with an error message
        header('Location: index.php?error=existinginfo');
        exit();
    }


    // Write an SQL query to insert the data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPw')";



    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>