<?php
$pageTitle = "Registration Portal";

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

require_once(ROOT_PATH . 'admin/inc/main_page/header.php');
?>

<body class="hold-transition register-page">

    <div class="register-box">

      <div class="register-box-body">
        <h4 class="login-box-msg" style="color:white;">Congratulation you have been Successfully Registered, Please Click the Button to Login </h4>
          <form id="createUser">
            <a href="<?php echo BASE_URL?>login.php" class="btn btn-success btn-block" id="send">login Page</a>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/view/studentRegistration.js" ></script>

  </body>

</html>
