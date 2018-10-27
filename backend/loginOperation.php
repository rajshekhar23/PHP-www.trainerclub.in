<?php 
    session_start();
    require('dbConnect.php');
    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];
    $user_role = $_POST["user_role"];
    $query = "select * from users where user_name='" .$user_name. "' and user_password='" .$user_password ."' and user_role='". $user_role ."'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);
    if( $rows > 0) {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_role'] = $user_role;
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($user_role == 'Trainer') {
            $_SESSION['trainerId'] = $row["id"];
            //header('Location: ../trainerProfile.php?trainerId='.$row["id"]);
            echo 'trainerProfile.php?trainerId='.$row["id"];
        } else {
            $_SESSION['clientId'] = $row["id"];
            //header('Location: ../clientProfile.php?clientId='.$row["id"]);
            echo 'clientProfile.php?clientId='.$row["id"];
        }        
    } else {
        echo 'failed';
    }
?>