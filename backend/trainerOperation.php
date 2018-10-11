<?PHP
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
    $selectSoftSkills = $_POST["selectSoftSkills"];
    $academic = $_POST["academic"];
    $professional = $_POST["professional"];
    $diplomaCertification = $_POST["diplomaCertification"];
    $awardsRewards = $_POST["awardsRewards"];
    $profJourney = $_POST["profJourney"];
    $totalExperience = $_POST["totalExperience"];
    $relevantExperience = $_POST["relevantExperience"];
    $selectOrgWorkedWith = $_POST["selectOrgWorkedWith"];
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
    $query = "insert into trainers ( trainerParentCategory, subCategory, selectSoftSkills, willingToTravel, academic, professional, diplomaCertification, awardsRewards, profJourney, totalExperience, relevantExperience, selectOrgWorkedWith, tcmember, enrollmentId, firstName, middleName, lastName, contact, emailId, fullPostalAddress, street, city, pincode, state ) values 
    ('" .$trainerParentCategory. "','" .$subCategory. "','" .$selectSoftSkills. "','" . $willingToTravel . "','" .$academic. "','" .$professional. "','" .$diplomaCertification. "',
    '" .$awardsRewards. "','" .$profJourney. "','" .$totalExperience. "','" .$relevantExperience. "','" .$selectOrgWorkedWith. "','" .$tcmember. "','" .$enrollmentId. "','" .$firstName. "','" .$middleName. "','" .$lastName. "','" .$contact. "',
    '" .$emailId. "','" .$fullPostalAddress. "','" .$street. "','" .$city. "','" .$pincode. "','" .$state. "')";
    //echo $query;
    if(mysqli_query($conn,$query)) {
        $last_id = $conn->insert_id;
        //Upload Identity
        $target_dir = "uploads/trainer";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $path_parts = pathinfo($_FILES["identity"]["name"]);
        $ext = $path_parts['extension'];
        $target_file = $target_dir ."Identity-".$last_id.".".$ext;
        
        $check = getimagesize($_FILES["identity"]["tmp_name"]);
        move_uploaded_file($_FILES["identity"]["tmp_name"], $target_file);   
        
        //Upload Gallery with Multiple Images
        uploadAllImages($last_id);
        echo $last_id;
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