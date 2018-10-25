<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

  require_once(ROOT_PATH . 'core/init.php');

  // $nexcop_account_no = "NACT".rand(100000,999999);


if (Input::exists()){
	// if(Token::check(Input::get('token'))){
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
						"firstName"		=>array('required'=>true),
						"lastName"			=>array('required'=>true),
						"matricNo"			=>array('required'=>true),
						"school"					=>array('required'=>true),
						"department"	=>array('required'=>true),
      "inputEmail"	=>array('required'=>true),
      "course"					=>array('required'=>true),
						"level"						=>array('required'=>true),
						"phone"						=>array('required'=>true),
						"password"			=>array('required'=>true)
						)
				);
		if ($validation->passed()){

			$members = new Members();
			
			// $password = 'password';
			$salt = Hash::salt(32);
			// $balance = 0;
			
			

			try{
				$members->create('studentrecord',array(

							"firstName"				=>	Input::get('firstName'),
							"lastName"					=>	Input::get('lastName'),
							"matricNo"					=> Input::get('matricNo'),
							"school"							=>	Input::get('school'),
							"department"			=>	Input::get('department'),
							"email"								=>	Input::get('inputEmail'),
							"course"							=>	Input::get('course'),
							"level"								=>	Input::get('level'),
							"phoneNo"						=>	Input::get('phone')


				));

				$members->create('studentlogin',array(
							"matricNo"				=>	Input::get('matricNo'),	
							"password"   		=> Hash::make(Input::get('password'), $salt),
							"salt"									=> $salt,
							"department"			=>	Input::get('department'),

				));

				
				$_POST[] = array();
				echo 'created';
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