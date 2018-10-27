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
	$query = "SELECT distinct orgworkedwithname FROM orgworkedwith WHERE orgworkedwithId='" . $id . "'";
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
} else if( $flag == 'addOrgWorkedWith') {
	$orgWorkedWithId = $_POST["orgWorkedWithId"];
	$orgWorkedWithName = $_POST["orgWorkedWithName"];
	echo $skillId ." ". $skillName;
	$query = "INSERT INTO orgworkedwith (orgworkedwithId,orgworkedwithname) VALUES ('$orgWorkedWithId','$orgWorkedWithName')";
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
		$param = ' where ';
		if($location !== '') {
			if (strpos($param, 'where') !== false) {
				$param = $param .' city like "%'.$location .'%"';
			} else {
				$param = $param .' or city like "%'.$location .'%"';
			}
			
		}
		if($skills !== '') {
			if (strpos($param, 'where') !== false) {
				$param = $param .' or selectSoftSkills like "%'.$skills .'%"';
			} else {
				$param = $param .' selectSoftSkills like "%'.$skills .'%"';
			}
		}
		if($experience !== '') {
			if (strpos($param, 'where') !== false) {
				$param = $param .' or totalExperience like "%'.$experience .'%" or relevantExperience like "%'.$experience .'%"';	
			} else {
				$param = $param .' totalExperience like "%'.$experience .'%" or relevantExperience like "%'.$experience .'%"';
			}
		}
			
		
		//echo $param;
		$query = "SELECT * FROM trainers " .$param;
		//echo $query;
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
	$query = "SELECT * FROM clients";
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
} else if ($flag == 'getAllPostedjobs') {
	$query = "SELECT * FROM postjob";
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
    $email = 'rajb2381991@gmail.com';
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
}

?>
