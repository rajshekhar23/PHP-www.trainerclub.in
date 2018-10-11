<?php 
    session_start();
    require('dbConnect.php');
    //$flag = $_POST["flag"];
    //if($flag == 'checkAuth') {
        $user_name = $_POST["user_name"];
        $user_password = $_POST["user_password"];
        $user_role = $_POST["user_role"];
        $query = "select * from users where user_name='" .$user_name. "' and user_password='" .$user_password ."' and user_role='". $user_role ."'";
        //echo $query;
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);
        //echo $rows;
        //echo mysqli_error($conn);
        if( $rows > 0) {
            //echo "success";
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_role'] = $user_role;
            //setcookie("user_role", $user_role);
            header('Location: http://localhost/manvi/index.php');
        } else {
            //echo "ssss".mysqli_error($conn);
            //session_unset();
            //session_destroy();
            //print_r($_SESSION);
            //print_r($_COOKIE["user_role"]);
            header('Location: http://localhost/manvi/index.php');
        }
   // }

?>