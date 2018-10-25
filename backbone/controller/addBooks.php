<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

  require_once(ROOT_PATH . 'core/init.php');

  // $nexcop_account_no = "NACT".rand(100000,999999);


if (Input::exists()){
	// if(Token::check(Input::get('token'))){
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
						"pdf_show"				=>array('required'=>true),
						"img_show"				=>array('required'=>true),
						"bookTitle"				=>array('required'=>true),
						"isbn"					=>array('required'=>true),
						"department"			=>array('required'=>true),
                        "level"					=>array('required'=>true),
                        "category"				=>array('required'=>true),
						"author"				=>array('required'=>true),
						"year"					=>array('required'=>true),
						"bookDescription"		=>array('required'=>true)
						)
				);
		if ($validation->passed()){

			$members = new Members();
			
			// $password = 'password';
			// $salt = Hash::salt(32);
			// $balance = 0;
			
			

			try{
				$members->create('booktable',array(

							"bookTitle"				=>	Input::get('bookTitle'),
							"isbn"					=>	Input::get('isbn'),
							"category"				=> 	Input::get('category'),
							"level"					=>	Input::get('level'),
							"department"			=>	Input::get('department'),
							"fileName"				=>	Input::get('pdf_show'),
							"imgFileName"			=>	Input::get('img_show'),
							"bookDescription"		=>	Input::get('bookDescription'),
							"year"					=>	Input::get('year'),
							"dateAdded"   			=>  date('Y-m-d H:i:s'),
							"author"				=>	Input::get('author')


				));

				// $members->create('accounts',array(

				// 			"account_no"				=>	$nexcop_account_no,
				// 			"account_name"				=>	Input::get('firstname').' '.Input::get('lastname'),
				// 			"account_balance"			=> 	$balance

				// ));

				
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