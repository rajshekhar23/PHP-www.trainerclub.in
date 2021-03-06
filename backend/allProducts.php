<?php
require_once('dbConnect.php');
include_once('PHPMailer/PHPMailer.php');
include_once('PHPMailer/SMTP.php');
include_once('PHPMailer/Exception.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
session_start();
$flag = $_POST["flag"];
if ($flag == 'loadAllSoftSkills') {
	$id = $_POST['id'];
	$query = "SELECT distinct skillname FROM skills WHERE skillId='" . $id . "'";
	//echo $query;
	$result = $conn->query($query);
	$res = [];
	if (mysqli_num_rows($result) > 0) {
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$res[] = $row;
		}
		echo json_encode($res);
	} else {
		echo json_encode($res);
	}
} else if( $flag == 'loadAllOrgWorkedWith') {
	$id = $_POST['id'];
	$query = "SELECT distinct technicalSkillsName FROM technicalSkills WHERE technicalSkillsId='" . $id . "'";
	//echo $query;
	$result = $conn->query($query);
	$res = [];
	if (mysqli_num_rows($result) > 0) {
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$res[] = $row;
		}
		echo json_encode($res);
	} else {
		echo json_encode($res);
	}
} else if( $flag == 'addSkill') {
	$skillId = $_POST["skillId"];
	$skillName = $_POST["skillName"];
	echo $skillId ." ". $skillName;
	$query = "INSERT INTO skills(skillId,skillname) VALUES ('$skillId','$skillName')";
    if(mysqli_query($conn,$query)) {
		echo 'success';
	} else {
		echo mysqli_error($conn);
	}
} else if( $flag == 'addTechnicalSkills') {
	$technicalSkillsId = $_POST["technicalSkillsId"];
	$technicalSkillsName = $_POST["technicalSkillsName"];
	$query = "INSERT INTO technicalSkills (technicalSkillsId,technicalSkillsName) VALUES ('$technicalSkillsId','$technicalSkillsName')";
    if(mysqli_query($conn,$query)) {
		echo 'success';
	} else {
		echo mysqli_error($conn);
	}
} else if ($flag == 'readAllTrainersList') {
	if( isset($_POST["location"]) || isset($_POST["industry"]) || isset($_POST["skills"]) || isset($_POST["experience"]) ) {
		$location = $_POST["location"];
		$industry = $_POST["industry"];
		$skills = $_POST["skills"];
		$experience = $_POST["experience"];
		$param = 'where ';
		$query = 'SELECT * FROM trainers';
		if($location !== '') {
			if (strpos($query, 'where') !== false) {
				$query .= " OR city like '%$location%'";
			} else {
				$query .= " where city like '%$location%'";
			}
		}
		if($skills !== '') {
			if (strpos($query, 'where') !== false) {
				$query .= " OR selectSoftSkills like '%$skills%'";
			} else {
				$query .= " where selectSoftSkills like '%$skills%'";
			}
		}

		if($experience !== '') {
			if (strpos($query, 'where') !== false) {
				$query .= " OR totalExperience like '%$experience%' OR relevantExperience like '%$experience%'";
			} else {
				$query .= " where totalExperience like '%$experience%' OR relevantExperience like '%$experience%'";
			}
		}
		if($industry !== '') {
			if (strpos($query, 'where') !== false) {
				$query .= " OR technicalSkills like '%$industry%'";
			} else {
				$query .= " where technicalSkills like '%$industry%'";
			}
		}
		//$query = "SELECT * FROM trainers where city like $location OR selectSoftSkills like $skills";// OR totalExperience like '%".$experience."%' 
		//OR relevantExperience like '%".$experience."%'";
	} else {
		$query = "SELECT * FROM trainers";
	}
	//echo $query;
	$result = $conn->query($query);
	$res = [];
	if (mysqli_num_rows($result) > 0) {
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$res[] = $row;
		}
		echo json_encode($res);
	} else {
		echo json_encode($res);
	}
} else if ($flag == 'readAllClientsList') {
/* 	$query = "SELECT * FROM clients";
	$result = $conn->query($query);
	$res = [];
	if (mysqli_num_rows($result) > 0) {
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$res[] = $row;
		}
		echo json_encode($res);
	} else {
		echo json_encode($res);
	} */
	$target_dir = "../backend/uploads/client";
	$res = array();
	if (is_dir($target_dir)){
		if ($dh = opendir($target_dir)){
			while (($file = readdir($dh)) !== false){
				if($file !== '.' || $file !== '..') {
					array_push($res,$file);
				}
				
			}
			echo json_encode($res);
			closedir($dh);
		}
	}
} else if ($flag == 'getAllPostedjobs') {
	if(isset($_POST["id"])) {
		$query = "SELECT * FROM postjob order by id DESC";
	} else {
		$query = "SELECT * FROM postjob order by id DESC LIMIT 5";
	}
	
/* 	if(isset($_SESSION['trainerId'])) {
		$query = "SELECT * FROM postjob where trainerId=".$_SESSION['trainerId']." and appliedStatus !=1";
	} else {
	}
 */	$result = $conn->query($query);
	$res = [];
	if (mysqli_num_rows($result) > 0) {
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$res[] = $row;
		}
		echo json_encode($res);
	} else {
		echo json_encode($res);
	}
} else if($flag == 'bookSelectedTrainers') {
	if (isset($_SESSION['clientId'])) {
		$selectedTrainers = $_POST['selectedTrainers'];
		$query = "SELECT * FROM trainers where trainer_id IN (".$selectedTrainers.")";
		//echo $query;
		$result = $conn->query($query);
		$res = [];
		if (mysqli_num_rows($result) > 0) {
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$res[] = $row;
			}
			echo json_encode($res);
		} else {
			echo json_encode($res);
		}		
	} else {
		echo json_encode('SESSION INACTIVE');
	}
} else if($flag == 'sendMailWithSelectedTrainers') {
	$data = $_POST['data'];
    $email = 'info@trainersclub.in';
    $mail = new PHPMailer\PHPMailer\PHPMailer(); // create a new object
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "trainersclubdummy@gmail.com"; // GMAIL username
    $mail->Password = "manvi@123"; // GMAIL password
    //Typical mail data
    $mail->AddAddress($email);
    //$mail->AddCC('jain4manvi@gmail.com');
    $mail->SetFrom('trainersclubdummy@gmail.com','Trainer Club');
    $mail->Subject = "Booked Trainers Details";
	$mail->Body = $data;
	$mail->IsHTML(true);
    $mail->WordWrap = 50;
    $mail->Priority = 1;
    try{
        $mail->Send();
        echo "Please check your mail for plan details!";
    } catch(Exception $e){
        //Something went bad
        echo "Fail - " . $mail->ErrorInfo;
    }
} else if($flag == 'applyJob') {
	$jobId = $_POST['jobId'];
	if (isset($_SESSION['trainerId'])) {
		$trainerId = $_SESSION['trainerId'];
		$query = "update postjob set appliedStatus=1, trainerId=". $trainerId ." where id=" .$jobId;
		$result = $conn->query($query);
		if ($result > 0) {
			echo json_encode($result);
		}	
	} else {
		echo json_encode('Please do login as Trainer');
	}
} else if($flag == 'getJobDesc') {
	$jobId = $_POST["jobId"];
	$query = "SELECT jobDescription FROM postjob where id=".$jobId;
	//echo $query;
	$result = $conn->query($query);
	$res = [];
	if (mysqli_num_rows($result) > 0) {
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$res[] = $row;
		}
		echo json_encode($res);
	} else {
		echo json_encode($res);
	}
}

?>
