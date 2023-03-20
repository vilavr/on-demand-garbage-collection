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
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitReservation'], $_POST['nameFirst'], $_POST['nameLast'], $_POST['age'], $_POST['email'], $_POST['dateArrive'])) {

	// array for errors
	$error_messages = array();

	// form data writed to variables
	$nameFirst = sanitize($_POST['nameFirst']);
	$nameLast = sanitize($_POST['nameLast']);
	$age = sanitize($_POST['age']);
	$email = sanitize($_POST['email']);
	$dateArrive = sanitize($_POST['dateArrive']);

	// Validation
	// First name check: contains only letters
	if (!preg_match("/^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,30}$/", $nameFirst)) {
		$error_messages[] = "Invalid first name. Please enter only letters";
	}
	// Middle name check: contains only letters
	if (!empty($_POST['nameMiddle'])) {
		$nameMiddle = sanitize($_POST['nameMiddle']);
		if (!preg_match("/^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,30}$/", $nameMiddle)) {
			$error_messages[] = "Invalid middle name. Please enter only letters";
		}
	}
	// Last name check: contains only letters
	if (!preg_match("/^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,30}$/", $nameLast)) {
		$error_messages[] = "Invalid last name. Please enter only letters";
	}
	// Salutation check: predefined salutations only	
	if (!empty($_POST['salute'])) {
		$salutation = sanitize($_POST['salute']);
		if (!preg_match("/^([Mm]r|[Mm]s|[Mm]rs|[Ss]ir|[Pp]rof|[Dd]r)$/", $salutation)) {
			$error_messages[] = "A hacker spotted";
		}
	}
	// Age check: older than 17, 
	//			  younger than 99
	if (!is_numeric($age) || $age < 18 || $age > 98) {
		$error_messages[] = "You should be older than 17 and younger than 99 to proceed";
	}

	// Email check: contains @ symbol somewhere in the middle
	if (!preg_match("/^[\w\-\.]{1,50}@([\w-]{1,50}\.){1,50}[\w-]{2,4}$/", $email)) {
		$error_messages[] = "Sorry, the email validation you provided is incorrect. Please enter a valid email address in the format of 'example@example.com'";
	}
	// Date check:
	$dateComponents = explode('-', $dateArrive);
	$year = $dateComponents[0];
	$month = $dateComponents[1];
	$day = $dateComponents[2];
	if ($dateArrive < '2023-01-01' || $dateArrive > '2033-01-01' || !checkdate($month, $day, $year)) {
		if (!checkdate($month, $day, $year)) {
			$error_messages[] = "Not existing date";
		} else {
			$error_messages[] = "Date is beyond the scope. Should be between 2023-01-01 and 2033-01-01";
		}
	}
	// Phone check (if provided)
	if (!empty($_POST['phone'])) {
		$phone = sanitize($_POST['phone']);
		if (!preg_match("/^[0-9\-\+]{7,15}$/", $phone)) {
			$error_messages[] = "Invalid phone number. Phone number must contain only numbers and '+' or '-'";
		}
	}
	if (!empty($_POST['comment'])) {
		$comment = sanitize($_POST['comment']);
		if (!preg_match("/^[\w\s\.,'\-\#\@\;\$\%\^\:\=\(\)\~\&\€\>\+=\*\/\<\?!{}\[\]]{1,200}$/", $comment)) {
			$error_messages[] = "Somethig strange in comments";
		}
	}


	// If validation don't fail
	if (empty($error_messages)) {
		$data = array();
		$data[0] = $nameFirst;
		if (!empty($_POST['nameMiddle'])) {
			$data[1] = $nameMiddle;
		} else {
			$data[1] = ' ';
		}
		$data[2] = $nameLast;
		if (!empty($_POST['salute'])) {
			$data[3] = $salutation;
		} else {
			$data[3] = ' ';
		}
		$data[4] = $age;
		$data[5] = $email;
		if (!empty($_POST['phone'])) {
			$data[6] = $phone;
		} else {
			$data[6] = ' ';
		}
		$data[7] = $dateArrive;
		if (!empty($_POST['comment'])) {
			$data[8] = $comment;
		} else {
			$data[8] = ' ';
		}

		// Initializing file
		$fileName = dirname(__FILE__) . "/data.csv";
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