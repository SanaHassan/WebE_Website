<?php 

//ASSUMING THAT MAIL HAS NOT BEEN SENT
$mailSent = false;


// ASSUME THAT input contains nothing suspicious
	$suspect = false;

// Regular expressions to search for suspect phrases 
	$pattern = '/Content-type:|Bcc:|Cc:/i';

// Recursive function that checks for suspect phrases
// Third argument is passed by reference 

	function isSuspect($value,$pattern,&$suspect){
		 if (is_array($value)){
		 	foreach ($value as $item) {
		 		isSuspect($item,$pattern,$suspect);
		 	}
		 }
		 else{
		 	if (preg_match($pattern,$value)){
		 		$suspect = true;
		 	}
		 }
	}

// Check the $_POST array for suspect phrases 

	isSuspect($_POST,$pattern,$suspect);

//Processes the form only if no suspect phrases are found 

if (!$suspect):
	// CHECH THAT REQUIRED FIELDS HAVE BEEN FILLED IN
	// AND REASSIGN EXPECTED ELEMENTS TO SIMPLE VARIABLES
	foreach ($_POST as $key => $value) {
		$value = is_array($value) ? $value : trim($value);
		if(empty($value) && in_array($key, $required)){
			$missing[] = $key;
			$$key = '';
		}elseif(in_array($key, $expected)){
			$$key = $value;
		}
	}

	// VALIDATE USERS EMAIL
	if(!$missing && !empty($email)):
		$validemail = filter_input(INPUT_POST, 'email' ,FILTER_VALIDATE_EMAIL);
		if($validemail){
			$headers[] = "Reply-to: $validemail";
		}
		else
			$errors['email'] = true;
	endif;	

	// IF NO ERRORS CREATE THE HEADERS AND MESSAGE BODY
	if (!$errors && !$missing):

		$headers = implode("\r\n", $headers);
		// INITIALIZE MESSAGE
		$message = '';

		foreach ($expected as $field):
			if (isset($$field) && !empty($$field)){
				$val = $$field;
				}
			else
			{
				$val = 'Not Selected';
			}
			// IF AN ARRAY , EXPAND TO A COMMA-SEPERATED STRING
			if (is_array($val)){
				$val = implode(',' , $val);
			}
			// REPLACE underscores in the field with spaces
			$field = str_replace('_', ' ', $field);

			$message .= ucfirst($field) . ": $val \r\n\r\n";			
		endforeach;		

		$message = wordwrap($message,70);
		
		// $mailSent = mailSent($to, $subject, $message, $headers, $authorized);

		// if (!$mailSent){
		// 	$errors['mailfail'] = true;
		// }
	endif;	
endif;
?>





