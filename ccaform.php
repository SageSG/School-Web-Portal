
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!empty($_POST['form'])) {
    //database connection
    echo "hello";
    $servername = "localhost";
    $username = "sqldev";
    $password = "password";
    $dbname = "project";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $email = $errorMsg = "";
    $success = true;
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $admin = $_POST["anumber"];
    $faculty = $_POST["slct1"];
    $course = $_POST["slct2"];
    $contact = $_POST["cnumber"];
    $intro = $_POST["intro"];
    
    $stmt = $conn->prepare("INSERT INTO form(fname,lname,anumber,slct1,slct2,cnumber,intro) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("ssissis", $fname, $lname,$admin,$faculty,$course,$contact,$intro);
    $stmt->execute();
    //result
    echo "New records created successfully";
    //close connection
    $stmt->close();
    $conn->close();
}
/*
$email = $errorMsg = "";
$success = true;
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$admin = $_POST["anumber"];
$faculty = $_POST["slct1"];
$course = $_POST["slct2"];
$contact = $_POST["cnumber"];
$intro = $_POST["intro"];

if (empty($_POST["email"])) {
    $errorMsg .= "Email is required.<br>";
    $success = false;
} else {
    $email = sanitize_input($_POST["email"]);

//    Additional check to make sure e-mail address is well-formed.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg .= "Invalid email format.";
        $success = false;
    }
}
*/

?>