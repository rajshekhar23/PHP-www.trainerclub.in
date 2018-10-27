<?PHP
    session_start();
    require('dbConnect.php');
    $user_id = $_SESSION["trainerId"];
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
        $selectSoftSkillsOther = $_POST["selectSoftSkillsOther"];
    }
    
    $academic = $_POST["academic"];
    $professional = $_POST["professional"];
    $diplomaCertification = $_POST["diplomaCertification"];
    $awardsRewards = $_POST["awardsRewards"];
    $profJourney = $_POST["profJourney"];
    $totalExperience = $_POST["totalExperience"];
    $relevantExperience = $_POST["relevantExperience"];
    if(isset($_POST["selectOrgWorkedWith"])) {
        $selectOrgWorkedWith = $_POST["selectOrgWorkedWith"];
    } else {
        $selectOrgWorkedWithOther = $_POST["selectOrgWorkedWithOther"];
    }
    
    $tcmember = $_POST["tcmember"];
    $enrollmentId = $_POST["enrollmentId"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $contact = $_POST["contact"];
    $emailId = $_POST["emailId"];
    $fullPostalAddress = $_POST["fullPostalAddress"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $state = $_POST["state"];
    $user_id = $_SESSION["trainerId"];
    $query = "update trainers set trainerParentCategory='". $trainerParentCategory ."', subCategory='". $subCategory ."', selectSoftSkills='". $selectSoftSkills ."',
    willingToTravel='". $willingToTravel ."', academic='".$academic."', professional='".$professional."', diplomaCertification='".$diplomaCertification."', awardsRewards='".$awardsRewards."',
    profJourney='".$profJourney."', totalExperience='".$totalExperience."', relevantExperience='".$relevantExperience."', selectOrgWorkedWith='".$selectOrgWorkedWith."',
    tcmember='".$tcmember."', enrollmentId='".$enrollmentId."', firstName='".$firstName."', middleName='".$middleName."', lastName='".$lastName."', contact='".$contact."',
    emailId='".$emailId."', fullPostalAddress='".$fullPostalAddress."', street='".$street."', city='".$city."', pincode='".$pincode."', state='".$state."' where trainer_id='". $user_id."'";
    $query;
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        //Upload Identity
        $target_dir = "uploads/trainer";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        if(isset($_FILES["identity"]["name"])) {
            $path_parts = pathinfo($_FILES["identity"]["name"]);
            $ext = $path_parts['extension'];
            if (file_exists($target_dir ."trainerIdentity-".$user_id.".".$ext)) {
                unlink($target_dir ."trainerIdentity-".$user_id.".".$ext);
            }
            $target_file = $target_dir ."trainerIdentity-".$user_id.".".$ext;
            
            $check = getimagesize($_FILES["identity"]["tmp_name"]);
            move_uploaded_file($_FILES["identity"]["tmp_name"], $target_file);    
        }
        
        //Upload Gallery with Multiple Images
        uploadAllImages($last_id);        
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