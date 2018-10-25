<?php
$pageTitle = "Add User";


require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(Session::exists('home')) {
      echo '<p>'. Session::flash('home') .'</p>';
    }

    $user = new Admin();

    if($user->isLoggedIn()) {
      // include(ROOT_PATH. 'inc/main_page/users_details.php');
      $fullName = $user->data()->firstName . ' '.$user->data()->lastName;
      $userName = $user->data()->userName;
      $userRole = $user->data()->userRole;
      // $amount = $user->data()->contribution_amount;
      // $fullname = $user->data()->firstname . ' '.$user->data()->lastname;
      // $mobile_no = $user->data()->mobile_no;
      // $staff_id = $user->data()->staff_id;
      // $priviledge = $user->data()->priviledge;

    } else {

      // echo '<p> You need to <a href="login.php"> Log In </a> or <a href="register.php"> Register </a></p>';
      Redirect::to(404);
    }

  include(ROOT_PATH ."admin/inc/main_page/header.php");

  include(ROOT_PATH ."admin/inc/main_page/nav.php");

  include(ROOT_PATH ."admin/inc/main_page/aside.php");

  include(ROOT_PATH ."admin/inc/main_page/top_bar.php");

?>

<!-- Content Wrapper. Contains page content -->
  
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-users"></i> <b>USERS</b>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#user" style="background-color: #3c8dbc;color: white;font-weight: bold;">
                  <i class="fa fa-user"></i> ADD USER</button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="tab-content no-padding">
              <div class="panel">
                <div class="panel-body ">
                  <div class="col-md-2 pull-right">
                    <form action="#" method="get">
                      <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Morris chart - Sales -->
             <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                	<tr style="background-color: #3c8dbc;color: white;font-weight: bold;">
                      <th class="text-center">First Name</th>
                      <th class="text-center">Last Name</th>
                      <th class="text-center">Username</th>
                      <th class="text-center">User Role</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
                <!-- <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><h3><b>Total</b></h3></th>
                  <td><h3><b>&#8358 150,000,000</b></h3></td>
                </tr> -->
            </table>
              
              
            </div>

            

            </div>
          </div>
        </section>
      </div>
    </section>

    <div class="modal fade skin-blue" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #3c8dbc;color: white;font-weight: bold;">
              <!--button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button-->
              <h4 class="modal-title text-center" id="myModalLabel"><b>ADD USER</b></h4>
            </div>
            <div class="modal-body">
              <form id="createUser" role="form">

                <!-- PERSONAL DETAILS SECTION -->
                <fieldset>
                <!-- <div class="row">
                  <div class="col-md-12">
                    <h4><b><strong style="color:#3c8dbc;">BOOK FORM</strong></b></h4>
                    <hr style="border-top: 1px solid #3c8dbc;">
                  </div>
                  
                </div> -->
                
                <!-- text input -->
                <!-- <div class="row">
                  	<div class="col-md-6">
	                  <label for="img_file">Select Book Img Cover</label>
	                  <input type="file" id="img_file" name="img_file" >
	                  <p class="help-bloc">Image File Only</p>
	                </div>
                  
	                <div class="col-md-6">
	                  <label for="pdf_file">Select Book</label>
	                  <input type="file" id="pdf_file" name="pdf_file" accept="application/pdf">
	                  <p class="help-bloc">PDF File Only</p>
	                </div>
                </div> -->

                

                <div class="row">
                  	<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="firstName">First Name</label>
	                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="lastName">Last Name</label>
	                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
	                  </div>
	                </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="userName">UserName</label>
                      <input type="email" class="form-control" name="userName" id="userName" placeholder="UserName">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role">User Role</label>
                      <select id="role" name="role" class="form-control">
                        <option value="">~~Select Role~~</option>
                      </select>
                    </div>
                  </div>
                </div>

                  
               
<!--                 <div class="row">
                  	<div class="col-md-6">
	                  <div class="form-group">
	                    <input type="hidden" class="form-control" name="img_show" id="img_show" placeholder="Book Title" hidden>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <input type="hidden" class="form-control" name="pdf_show" id="pdf_show" placeholder="ISBN No" >
	                  </div>
	                </div>
                </div> -->
              
                <!-- END OF BOOK FORM DETAILS SECTION -->

                <div class="pull-right">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button id="send" type="submit" class="btn btn-success"><i class="fa fa-user"></i> SUBMIT </button>
                </div>

              </form>
            </div>
            
          </div>
        </div>
      </div>


          
        <!-- right col -->
</div>
  <!-- /.content-wrapper -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/view/userRegistration.js" ></script>

<?php

include (ROOT_PATH . "admin/inc/main_page/footer.php");

?>