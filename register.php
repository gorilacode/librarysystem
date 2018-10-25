<?php
$pageTitle = "Registration Portal";

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

require_once(ROOT_PATH . 'admin/inc/main_page/header.php');
?>

<body class="hold-transition register-page">

    <div class="register-box">
      <div class="login-box-body" style="color: #fff;">
        <div class="login-logo">
        <p href="../../index2.html">AlwaysTyping University </p>
          <h4 class="login-box-msg">Student Reg, Portal</h4>
      </div>
          <form id="createUser">
            <div class="form-group has-feedback">
              <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
            </div>
            <div class="form-group has-feedback">
              <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required="required">
            </div>
            <div class="form-group has-feedback">
              <input type="text" id="matricNo" name="matricNo" class="form-control" placeholder="Matric No." required="required">
            </div>
            <div class="form-group has-feedback">
              <input type="text" id="school" name="school" class="form-control" placeholder="school" required="required">
            </div>

            <div class="form-group has-feedback">
              <select id="department" name="department" class="form-control">
              </select>
            </div>
            <div class="form-group has-feedback">
              <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required="required">
            </div>
            <div class="form-group has-feedback">
              <input type="text" id="course" name="course" class="form-control" placeholder="Course" required="required">
            </div>
            <div class="form-group has-feedback">
              <select id="level" name="level" class="form-control">
              </select>
            </div>
            <div class="form-group has-feedback">
              <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone No." required="required">
            </div>
            <div class="form-group has-feedback">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <button type="submit" class="btn btn-success btn-block" id="send">Register</button>
          </form>
          <div class="text-center">
            <p>If already have an account.<a class="d-block small mt-6" href="<?php echo BASE_URL; ?>login.php">Login Page</a></p>
            <a class="d-block small mt-3" href="<?php echo BASE_URL; ?>index.php">Home Page</a>
          </div>
      </div>
    </div>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/view/studentRegistration.js" ></script>

  </body>

</html>
