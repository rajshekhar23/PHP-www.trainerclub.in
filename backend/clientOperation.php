<?PHP
    require('dbConnect.php');
    $clientname = $_POST["clientname"];
    $clientemail = $_POST["clientemail"];
    $clientcontact = $_POST["clientcontact"];
    $clientaddress = $_POST["clientaddress"];
//    print_r($_POST);
    $query = "insert into clients ( clientname, clientemail, clientcontact, clientaddress ) values
    ('" .$clientname. "','" .$clientemail. "','" .$clientcontact. "','" .$clientaddress. "')";
  //  echo $query;
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        $target_dir = "uploads/client";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $path_parts = pathinfo($_FILES["identity"]["name"]);
        $ext = $path_parts['extension'];
        $target_file = $target_dir ."Identity-".$last_id.".".$ext;
        
        $check = getimagesize($_FILES["identity"]["tmp_name"]);
        move_uploaded_file($_FILES["identity"]["tmp_name"], $target_file);
        echo $last_id;
    } else {
        echo mysqli_error($conn);
    }
?>