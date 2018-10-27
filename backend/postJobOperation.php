<?PHP
    session_start();
    require('dbConnect.php');
    $salaryMinRange = $_POST['salaryMinRange'];
    $salaryMaxRange = $_POST['salaryMaxRange'];
    $city = $_POST['city'];
    $salaryPeriod = $_POST['salaryPeriod'];
    $positionType = $_POST['positionType'];
    $industryType = $_POST['industryType'];
    $jobTitle = $_POST['jobTitle'];
    $jobDescription = $_POST['jobDescription'];
    $user_id = $_SESSION["clientId"];
    //$user_id = 7;
    $query = "insert into postjob (clientId, jobTitle,industryType,positionType,salaryPeriod,city,salaryMinRange,salaryMaxRange,jobDescription) values (
        '" . $user_id ."','" . $jobTitle ."','" . $industryType ."','" . $positionType ."','" . $salaryPeriod ."','" . $city ."','" . $salaryMinRange ."','" . $salaryMaxRange ."','". $jobDescription ."');";
    //print_r($_POST,true);
    //echo $query;
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        uploadAllImages($user_id);        
        echo $user_id;
    } else {
        echo mysqli_error($conn);
    }

    function uploadAllImages($last_id) {
        if(count($_FILES['gallery']['name']) > 0) {
            for($i=0; $i<count($_FILES['gallery']['name']); $i++) {
                $tmpFilePath = $_FILES['gallery']['tmp_name'][$i];
                if($tmpFilePath != "") {
                    $shortname = $_FILES['gallery']['name'][$i];
                    if (!file_exists('uploads/postjobs/'.$last_id)) {
                        mkdir('uploads/postjobs/'.$last_id, 0777, true);
                    }
                    $filePath = "uploads/postjobs/$last_id/" . $last_id.'-'. $i .'-'.$_FILES['gallery']['name'][$i]; 
                    if(move_uploaded_file($tmpFilePath, $filePath)) {
                        $files[] = $shortname;
                    }
                }
            }
        }
    } 
?>