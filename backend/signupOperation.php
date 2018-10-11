<?php 
    require('dbConnect.php');
    $name = $_POST["name"];
    $user_role = $_POST["user_role"];
    $user_name = $_POST["user_name"];
    $user_password = $_POST["password"];
    $user_email = $_POST["email"]; 
    $query ="insert into users (name,user_role,user_name,user_password,user_email) values
     ('" .$name ."','" .$user_role ."','" .$user_name ."','" .$user_password ."','" .$user_email ."')";
    if(mysqli_query($conn,$query)) {
        echo "success";
        header("Location: http://localhost/manvi/trainersform.php");
    } else {
        echo mysqli_error($conn);
    }
?>