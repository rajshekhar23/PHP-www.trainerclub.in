<?php 
    session_start();
    require('dbConnect.php');
    $name = $_POST["name"];
    $user_role = $_POST["user_role"];
    $user_name = $_POST["user_name"];
    $user_password = $_POST["password"];
    $user_email = $_POST["email"]; 
    $query ="insert into users (name,user_role,user_name,user_password,user_email) values
     ('" .$name ."','" .$user_role ."','" .$user_name ."','" .$user_password ."','" .$user_email ."')";
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;        
        $query = "select * from users where user_name='" .$user_name. "' and user_password='" .$user_password ."' and user_role='". $user_role ."'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);
        if( $rows > 0) {
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_role'] = $user_role;
        }
        if($user_role == 'Trainer') {
            $_SESSION['trainerId'] = $last_id;
            header("Location: ../trainersform.php");
        } else {
            $_SESSION['clientId'] = $last_id;
            header("Location: ../clientsform.php");
        }
    } else {
        echo mysqli_error($conn);
    }
?>