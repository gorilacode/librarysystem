<?php
$pageTitle = "Students Table";


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
              <h3 class="box-title"><i class="fa fa-users"></i> <b>STUDENTS</b>
              </h3>
              <!-- tools box -->
              <!-- <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#user" style="background-color: #3c8dbc;color: white;font-weight: bold;">
                  <i class="fa fa-user"></i> </button>
              </div> -->
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
                      <th class="text-center">First Names</th>
                      <th class="text-center">Last Names</th>
                      <th class="text-center">Matric No</th>
                      <th class="text-center">Emails</th>
                      <th class="text-center">Phone No</th>
                      <th class="text-center">Departments</th>
                      <th class="text-center">Programme</th>
                      <th class="text-center">Schools</th>
                      <th class="text-center">Levels</th>
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


      <div class="modal fade skin-blue" id="disbuse-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #3c8dbc;color: white;">
                <h4 class="modal-title" id="myModalLabel" ><b>STUDENT EDIT FORM</b></h4>
              </div>
              <div class="modal-body">
                <form id="createDisbuse" role="form">
                  <input type="text" id="id" name="id" hidden>
                  <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                    <label>First Name</label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Staff ID" disable>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Full Name"  >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Matric No.</label>
                    <input type="text" id="matricNo" name="matricNo" class="form-control" placeholder="Enter Email Address"  >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter the Amount to be Deducted"  >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Phone No</label>
                    <input type="text" id="phoneNo" name="phoneNo" class="form-control" placeholder="Enter the Amount to be Deducted"  >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Department</label>
                    <input type="text" id="department" name="department" class="form-control" placeholder="Enter the Amount to be Deducted"  >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Programme</label>
                    <input type="text" id="programme" name="programme" class="form-control" placeholder="Enter the Amount to be Deducted"  >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>School</label>
                    <input type="text" id="school" name="school" class="form-control" placeholder="Enter the Amount to be Deducted"  >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Level</label>
                    <input type="text" id="level" name="level" class="form-control" placeholder=""  >
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button id="submit_disbuse" type="submit" class="btn btn-primary">SAVE</button>
                </div>
                </form>

              </div>
              
            </div>
          </div>
        </div>


          
        <!-- right col -->
</div>
  <!-- /.content-wrapper -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/view/viewStudentsTable.js" ></script>

<?php

include (ROOT_PATH . "admin/inc/main_page/footer.php");

?>