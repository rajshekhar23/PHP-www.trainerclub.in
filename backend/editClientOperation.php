<?PHP
    session_start();
    require('dbConnect.php');
    $clientname = $_POST["clientname"];
    $clientemail = $_POST["clientemail"];
    $clientcontact = $_POST["clientcontact"];
    $clientaddress = $_POST["clientaddress"];
    $client_id = $_SESSION["clientId"];
    $query = "update clients set clientname='".$clientname."', clientemail='".$clientemail."', clientcontact='".$clientcontact."', clientaddress='".$clientaddress."' where client_id='".$client_id."'";
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        $target_dir = "uploads/client/";
        $path_parts = pathinfo($_FILES["identity"]["name"]);
        $ext = $path_parts['extension'];
        $target_file = $target_dir ."clientIdentity-".$client_id.".".$ext;
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        $check = getimagesize($_FILES["identity"]["tmp_name"]);
        move_uploaded_file($_FILES["identity"]["tmp_name"], $target_file);
        echo $client_id;
    } else {
        echo mysqli_error($conn);
    }
?>