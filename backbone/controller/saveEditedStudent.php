<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

  require_once(ROOT_PATH . 'core/init.php');


if (Input::exists()){
	// if(Token::check(Input::get('token'))){
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
						"id"				=>array('required'=>true),
						"firstName"			=>array('required'=>true),
						"lastName"			=>array('required'=>true),
						"matricNo"			=>array('required'=>true),
						"email"				=>array('required'=>true),
						"phoneNo"			=>array('required'=>true),
						"department"		=>array('required'=>true),
						"programme"			=>array('required'=>true),
						"school"			=>array('required'=>true),
						"level"				=>array('required'=>true)
						)
				);
		if ($validation->passed()){

			$members = new Members();


			$id 		= Input::get('id');
			$firstName 	= Input::get('firstName');
			$lastName 	= Input::get('lastName');
			$matricNo 	= Input::get('matricNo');
			$email 		= Input::get('email');
			$phoneNo 	= Input::get('phoneNo');
			$department = Input::get('department');
			$programme 	= Input::get('programme');
			$school 	= Input::get('school');
			$level 		= Input::get('level');

			$balance = select_single_balance('accounts', $nexcop_account_no);

			$balance;
			
			$subtract = $balance - $amount_received;

			try{
				$results = $db->prepare("UPDATE studentsrecord SET amount_received = ? WHERE id = ? ");
	            $results->bindParam(1, $amount_received);
	            $results->bindParam(2, $id);

	            $results->execute();
				
			}catch(Exception $e){
				die($e->getMessage());
			}


		}else{
			foreach($validation->errors() as $error){
				echo $error, "<br>";
				$_POST[] = array();
			}
		}
	// }
}else{
	echo "no input found";
}