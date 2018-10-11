<?php
require_once('dbConnect.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

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
	$query = "SELECT * FROM trainers";
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
}

?>
