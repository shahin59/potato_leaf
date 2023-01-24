<?php
# create database connection
session_start();
include 'config.php';

if (!empty($_POST["name"])) {
    $query = "SELECT * FROM user WHERE user_name='" . $_POST["name"] . "'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<span style='color:red'> Sorry User already exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> User available for Registration .</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}
?>

<?php
if (!empty($_POST["email"])) {
    $query = "SELECT * FROM user WHERE email ='" . $_POST["email"] . "'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<span style='color:red'> Sorry email already exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> Email available for Registration .</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}



?>