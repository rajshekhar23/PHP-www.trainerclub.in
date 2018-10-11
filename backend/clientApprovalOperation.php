<?PHP
    require('dbConnect.php');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comments = $_POST["comments"];
    $query = "insert into contact (name, email, subject, comments) values ('". $name ."','". $email ."','". $subject ."','". $comments ."')";
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        echo $last_id;
    } else {
        echo mysqli_error($conn);
    }
?>