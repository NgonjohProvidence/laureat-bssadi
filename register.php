<?php
include 'connect.php';

if(isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    $birthDate = $_POST['birthDate'];
    $gender = $_POST['gender'];
    $classLevel = $_POST['classLevel'];
    $previousSchool = $_POST['prevschool'];
    $description = $_POST['description'];

$sql="insert into students (fname, lname, DOB, sex, class, Fschool, description) values ('$name', '$surname', '$birthDate', '$gender', '$classLevel', '$previousSchool', '$description')";
$query=mysqli_query($conn, $sql);

if ($query) {
    echo "<script>alert('Registration successful!'); window.location.href='registration.html';</script>";
} else {
    echo "<h2>Error during registration: " . mysqli_error($conn) . "</h2>";


}
}