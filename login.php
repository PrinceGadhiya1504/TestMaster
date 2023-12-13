<?php

$conn = mysqli_connect("localhost", "root", "", "myDb");
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);


$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

while ($row = mysqli_fetch_assoc($result)) {
    if ($username == $row['username'] && $password == $row['password']) {
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['username'];
        print_r($row);
        header("Location: dashboard.php");
    } else {
        echo '<script>alert("Erong username or password")</script>';
        break;
    }
}
header("Location: index.html");
?>