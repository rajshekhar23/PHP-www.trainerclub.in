<?PHP
    session_start();
    require('dbConnect.php');
    $trainerParentCategory = $_POST["trainerParentCategory"];
    $subCategory = $_POST["subCategory"];    
    if(isset($_POST["willingTravelInternational"]))
        $willingTravelInternational = $_POST["willingTravelInternational"];
    else 
        $willingTravelInternational = '';

    if(isset($_POST["willingTravelNational"]))
        $willingTravelNational = $_POST["willingTravelNational"];
    else 
        $willingTravelNational = '';

    $willingToTravel = $willingTravelNational ." | ".$willingTravelInternational;
    
    if(isset($_POST["selectSoftSkills"])) {
        $selectSoftSkills = $_POST["selectSoftSkills"];
    } else {
        $selectSoftSkills = $_POST["selectSoftSkillsText"];
    }
    if(isset($_POST["selectSoftSkills"])) {
        $technicalSkills = $_POST['technicalSkills'];
    } else {
        $technicalSkills = $_POST['selectTechnicalSkillsText'];
    }    
    $academic = $_POST["academic"];
    $professional = $_POST["professional"];
    $diplomaCertification = $_POST["diplomaCertification"];
    $awardsRewards = $_POST["awardsRewards"];
    $profJourney = $_POST["profJourney"];
    $totalExperience = $_POST["totalExperience"];
    $relevantExperience = $_POST["relevantExperience"];
    $selectOrgWorkedWith = $_POST['orgWorkedWithList'];    
    $tcmember = $_POST["tcmember"];
    $enrollmentId = $_POST["enrollmentId"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $contact = $_POST["contact"];
    $alternatecontact = $_POST["alternatecontact"];
    $emailId = $_POST["emailId"];
    $fullPostalAddress = $_POST["fullPostalAddress"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $state = $_POST["state"];
    $user_id = $_SESSION["trainerId"];
    //$user_id = 7;
    $folder = 'uploads/trainer/'.$user_id.'/';
    deleteDirectory($folder);
    $target_dir = $folder."/identity/";
    deleteDirectory($target_dir);
    $query = "insert into trainers (trainer_id, trainerParentCategory, subCategory, selectSoftSkills, technicalSkills, willingToTravel, academic, professional, diplomaCertification, awardsRewards, profJourney, totalExperience, relevantExperience, selectOrgWorkedWith, tcmember, enrollmentId, firstName, middleName, lastName, contact, alternatecontact, emailId, fullPostalAddress, street, city, pincode, state ) values 
    ('" .$user_id. "','" .$trainerParentCategory. "','" .$subCategory. "','" .$selectSoftSkills. "','". $technicalSkills ."','" . $willingToTravel . "','" .$academic. "','" .$professional. "','" .$diplomaCertification. "',
    '" .$awardsRewards. "','" .$profJourney. "','" .$totalExperience. "','" .$relevantExperience. "','" .$selectOrgWorkedWith. "','" .$tcmember. "','" .$enrollmentId. "','" .$firstName. "','" .$middleName. "','" .$lastName. "','" .$contact. "','" .$alternatecontact. "',
    '" .$emailId. "','" .$fullPostalAddress. "','" .$street. "','" .$city. "','" .$pincode. "','" .$state. "')";
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        //Upload Identity
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        // upload aadhar Identity
        $path_parts = pathinfo($_FILES["aadharIdentity"]["name"]);
        $ext = $path_parts['extension'];
        $target_file = $target_dir ."AadharIdentity-".$user_id.".".$ext;
        $check = getimagesize($_FILES["aadharIdentity"]["tmp_name"]);
        move_uploaded_file($_FILES["aadharIdentity"]["tmp_name"], $target_file);   

        // upload Pan Identity
        $path_parts = pathinfo($_FILES["panIdentity"]["name"]);
        $ext = $path_parts['extension'];
        $target_file = $target_dir ."PanIdentity-".$user_id.".".$ext;        
        $check = getimagesize($_FILES["panIdentity"]["tmp_name"]);
        move_uploaded_file($_FILES["panIdentity"]["tmp_name"], $target_file);   
        
        //upload cancelled check identity
        $path_parts = pathinfo($_FILES["canceledCheckIdentity"]["name"]);
        $ext = $path_parts['extension'];
        $target_file = $target_dir ."CancelledCheckIdentity-".$user_id.".".$ext;        
        $check = getimagesize($_FILES["canceledCheckIdentity"]["tmp_name"]);
        move_uploaded_file($_FILES["canceledCheckIdentity"]["tmp_name"], $target_file);           

        //Upload Gallery with Multiple Images
        uploadAllImages($user_id);        
        echo $user_id;
    } else {
        echo mysqli_error($conn);
    }

    function deleteDirectory($dir) {
        if (!file_exists($dir)) {
            return true;
        }
    
        if (!is_dir($dir)) {
            return unlink($dir);
        }
    
        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
    
            if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }
    
        }
        return rmdir($dir);
    }

    function uploadAllImages($last_id) {
        if(count($_FILES['gallery']['name']) > 0) {
            for($i=0; $i<count($_FILES['gallery']['name']); $i++) {
                $tmpFilePath = $_FILES['gallery']['tmp_name'][$i];
                if($tmpFilePath != "") {
                    $shortname = $_FILES['gallery']['name'][$i];
                    if (!file_exists('uploads/trainer/'.$last_id)) {
                        mkdir('uploads/trainer/'.$last_id, 0777, true);
                    }
                    $filePath = "uploads/trainer/$last_id/" . $last_id.'-'. $i .'-'.$_FILES['gallery']['name'][$i]; 
                    if(move_uploaded_file($tmpFilePath, $filePath)) {
                        $files[] = $shortname;
                    }
                }
            }
        }
    } 
?>