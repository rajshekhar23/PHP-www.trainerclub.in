<?PHP
    session_start();
    require('dbConnect.php');
    //print_r($_POST);
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
    if(isset($_POST["technicalSkills"])) {
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
    $folder = 'uploads/trainer/'.$user_id.'/';
    deleteDirectory($folder);
    $target_dir = $folder."/identity/";
    deleteDirectory($target_dir);
    //sleep(2);
    $query = "update trainers set trainerParentCategory='". $trainerParentCategory ."', subCategory='". $subCategory ."', selectSoftSkills='". $selectSoftSkills ."',
    technicalSkills='". $technicalSkills ."',willingToTravel='". $willingToTravel ."', academic='".$academic."', professional='".$professional."', diplomaCertification='".$diplomaCertification."', awardsRewards='".$awardsRewards."',
    profJourney='".$profJourney."', totalExperience='".$totalExperience."', relevantExperience='".$relevantExperience."', selectOrgWorkedWith='".$selectOrgWorkedWith."',
    tcmember='".$tcmember."', enrollmentId='".$enrollmentId."', firstName='".$firstName."', middleName='".$middleName."', lastName='".$lastName."', contact='".$contact."',
    alternatecontact='".$alternatecontact."',emailId='".$emailId."', fullPostalAddress='".$fullPostalAddress."', street='".$street."', city='".$city."', pincode='".$pincode."', state='".$state."' where trainer_id='". $user_id."'";
    $query;
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        //Upload Identity
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // upload Profile Picture
        $path_parts = pathinfo($_FILES["profile"]["name"]);
        $ext = $path_parts['extension'];
        $target_file = $target_dir ."ProfilePicture-".$user_id.".".$ext;
        $check = getimagesize($_FILES["profile"]["tmp_name"]);
        move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);   
        
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
                    $folder = 'uploads/trainer/'.$last_id.'/';
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $filePath = $folder."/" . $last_id.'-'. ($i+1) .'-'.$_FILES['gallery']['name'][$i]; 
                    if(move_uploaded_file($tmpFilePath, $filePath)) {
                        $files[] = $shortname;
                    }    
/*                     if (file_exists($folder)) {
                        // clear directory
                        //echo "exist";
                        $files = glob($folder . '/*');
                        foreach($files as $file) {
                            if(is_file($file)) {
                                unlink($file);
                            }
                        }
                    }
 */
                }
            }
        }
    } 
?>