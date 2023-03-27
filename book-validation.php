<?php

// Function to sanitize user inputs
function sanitize($input)
{
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);
	return $input;
}

// For submitted form: if all mandatory inputs are filled - validate them and write to csv
if ($_SERVER['REQUEST_METHOD'] === 'POST' && 
isset($_POST['submitBooking'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['street'], 
$_POST['house'], $_POST['index'], $_POST['datepicker'], $_POST['time'], $_POST['service_type']) &&
!empty($_POST['name'] && $_POST['surname'] && $_POST['email'] && $_POST['street'] && 
$_POST['house'] && $_POST['index'] && $_POST['datepicker'] && $_POST['time'] && $_POST['service_type'])) {
	// array for errors
	$error_messages = array();

	// form data writed to variables
	$name = sanitize($_POST['name']);
	$surname = sanitize($_POST['surname']);
	$email = sanitize($_POST['email']);
	$street = sanitize($_POST['street']);
	$house = sanitize($_POST['house']);
	$index = sanitize($_POST['index']); 
	$date = sanitize($_POST['datepicker']);
	$time = sanitize($_POST['time']);
	$service = sanitize($_POST['service_type']);
	// Validation
	// First name check: contains only letters
	if (!preg_match("/^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{1,30}$/", $name)) {
		$error_messages[] = "Invalid first name. Please enter only letters.";
	}
	// Last name check: contains only letters
	if (!preg_match("/^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{1,30}$/", $surname)) {
		$error_messages[] = "Invalid last name. Please enter only letters.";
	}

	// Email check: contains @ symbol somewhere in the middle and .smth in the end
	if (!preg_match("/^[\w\-\.]{1,50}@([\w-]{1,50}\.){1,50}[\w-]{2,4}$/", $email)) {
		$error_messages[] = "Sorry, the email validation you provided is incorrect. Please enter a valid email address in the format of 'example@example.com'.";
	}
	// Street check
	if (!preg_match("/^[\w\s\.,'\-\#\;\^\:\=\(\)\~\&\>\+=\*\/\<\?!{}\[\]]+$/", $street)) {
		$error_messages[] = "Invalid street name.";
	}
	// House check
	if (!preg_match("/^[\w\s\.,'\-\#\;\^\:\=\(\)\~\&\>\+=\*\/\<\?!{}\[\]]+$/", $house)) {
		$error_messages[] = "Invalid street number.";
	}
	// Index check
	if (!preg_match("/^\d{5}$/", $index)) {
		$error_messages[] = "Invalid index.";
	}
	// Date check:
	$dateComponents = explode('/', $date);
	$current_date = date('m/d/Y');
	$year = $dateComponents[2];
	$month = $dateComponents[0];
	$day = $dateComponents[1];
	// Should not be in the past
	if ($date < $current_date) {
		$error_messages[] = "Invalid date. Date provided is in the past.";
	}
	// Should exist
	if (!checkdate($month, $day, $year)) {
		$error_messages[] = "Invalid date. Not existing date.";
	}

	// Time check
	if (!in_array($time, array('time1', 'time2', 'time3', 'time4', 'time5'))) {
		$error_messages[] = "Invalid time. Not existing time.";
	}

	// Service check
	if (!in_array($_POST['service_type'], array('regular', 'recycling', 'bulk'))) {
		$error_messages[] = "Incorrect service provided.";
	}
	if (!isset($_POST['selector']) || empty($_POST['selector'])) {
		$error_messages[] = "Please select at least one item weight";
	} else {
		foreach ($_POST['selector'] as $selected) {
			if (!in_array($selected, array('option1', 'option2', 'option3', 'option4', 'option5'))) {
				$error_messages[] = "Invalid item weight selected";
				break;
			}
		}
	}

	if (isset($_POST['selector']) && !empty($_POST['comment'])) {
		$comment = sanitize($_POST['comment']);
		if (!preg_match("/^[\w\s\.,'\-\#\@\;\$\%\^\:\=\(\)\~\&\€\>\+=\*\/\<\?!{}\[\]]+$/", $comment)) {
			$error_messages[] = "Something strange in comments.";
		}
	}
	
	if (isset($_POST['selector']) && !empty($_POST['phone'])) {
		$phone = sanitize($_POST['phone']);
		if (!preg_match("/^[0-9\-\+ ]{7,15}$/", $phone)) {
			$error_messages[] = "Invalid phone number. There can only be +, - or numbers.";
		}
	}
	
	// If validation don't fail
	if (empty($error_messages)) {
		$data = array();
		$data[0] = $name;
		$data[1] = $surname;
		$data[2] = $email;
		$data[3] = $street;
		$data[4] = $house;
		$data[5] = $index;
		$data[6] = $date;
		$data[7] = $time;
		$data[8] = $service;
		if (!empty($_POST['selector'])) {
			$data[9] = sanitize($_POST['selector']);
		} else {
			$data[9] = ' ';
		}
		if (!empty($_POST['phone'])) {
			$data[10] = $phone;
		} else {
			$data[10] = ' ';
		}
		if (!empty($_POST['comment'])) {
			$data[11] = $comment;
		} else {
			$data[11] = ' ';
		}

		// Initializing file
		$fileName = dirname(__FILE__) . "/booking-data.csv";
		if (!file_exists($fileName)) {
			// create file if it does not exist
			$file = fopen($fileName, "w");
			if (!$file) {
				$error_messages[] = "Error creating or opening CSV file!";
			}
			fclose($file);
		}


		// Open the file, mode a+ 
		//						creates a file if it does't exist
		//						existing data in file preserves
		$file = fopen($fileName, "a+") or $error_messages[] = "Error opening the file";

		// Change file permissions
		chmod($fileName, 0666);

		// Put data into the csv file, separator ';'
		fputcsv($file, $data, ";", '"');

		// Revert pointer to the beginning of the file for further reading
		fseek($file, 0);

		// Close the file
		fclose($file);
	}
}

?>