<?php
$pageTitle = "Login Portal";

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/index_page/header.php');
?>


<body class="hold-transition login-page">

  <div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body" style="color: #fff;">
    <div class="login-logo">
    <p href="<?php echo BASE_URL; ?>index.php">AlwaysTyping University </p>
      <h4 class="login-box-msg">Admin Login Portal</h4>
  </div>
  <!-- /.login-logo -->
<?php

// echo "<div class='alert btn-danger' role='alert'> Incorrect Username or Password </div>";
if(Input::exists()) {
    
    if(Token::check(Input::get('token'))){

      $validate = new Validation();
      $validation = $validate->check($_POST, array(
        'userName' => array('required' => true),
        'password' => array('required' => true)

      ));

      if($validation->passed()) {
        $user = new Admin();

        $remember = (Input::get('remember') === 'on') ? true : false;
        $login = $user->login(Input::get('userName'), Input::get('password'), $remember);
        
          if($login > 0) {

            if($user->data()->status == 'active'){
               if($login) {
                Redirect::to('pages/index.php');
              }
            } else {
              echo "<div class='alert label-danger text-center' role='alert'> You have been made Inactive </div>";
            }

          }else {
            echo "<div class='alert label-danger text-center' role='alert'> Incorrect Username or Password </div>";
          }


      } else {
?>
          <div class="alert btn-danger" role="alert">
            <?php
            foreach($validation->errors() as $error) { 
              echo $error, '<br>'; } 
            ?>
          </div>
<?php
      }

    }
  }
  
?>



    <form method="POST" action="">
      <div class="form-group has-feedback">
        <input type="text" name="userName" id="userName" class="form-control" placeholder="Username">
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
          <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <div class="form-group">
    <p style="color:#fff;">Click here to <a href="<?php echo BASE_URL; ?>index.php" class="text-center">Home</a></p>
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
  </body>

</html>
