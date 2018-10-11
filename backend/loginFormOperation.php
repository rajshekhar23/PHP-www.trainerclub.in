<?PHP
    require('dbConnect.php');
    $flag = $_POST['flag'];
    if($flag == 'checkAuth') {
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        echo $user_name ." *********************** ". $user_password;
        $query = "select * from users where user_name='"+ $user_name +"' and user_password='"+ $user_password +"'";
        echo $query;
        $result = mysqli_query($conn,$query);
        echo $result;
        if($result > 0) {
            echo "success";
        } else {
            echo $query;
        }
    }
?>