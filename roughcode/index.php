<?php
$pageTitle = "YCT Library";


require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

require_once(ROOT_PATH . 'admin/inc/nav.php');

require_once(ROOT_PATH . 'admin/inc/sidebar.php');

require_once(ROOT_PATH . 'admin/inc/menubar.php');

$department = select_all('department');
$level = select_all('level');
$category = select_all('categories');

  // var_dump($department);
?>

          

          <ol class="breadcrumb">
            <div class="float-right">
              
            <button class="btn btn-secondary float-right" data-toggle="modal" data-target="#bookFormModal"> Add Book</button>
            </div>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Books Table
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTabl" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Book Title</th>
                      <th>ISBN No</th>
                      <th>Catgory</th>
                      <th>Department</th>
                      <th>Level</th>
                      <th>Author's</th>
                      <th>Year Published</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>$320,800</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   <!--  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div> -->


    <div class="modal fade skin-blue" id="bookFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" >
          <div class="modal-header" style="background-color: #3c8dbc;color: white;">
            <!--button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button-->
            <h4 class="modal-title text-center" id="myModalLabel"><b>Book Form</b></h4>
          </div>
          <div class="modal-body"> 
            <form id="bookForm" role="form">


              <span id="uploaded_image">
                
              </span>
              

              <div class="row">
                <!-- <img src="<?php echo BASE_URL; ?>assets/img/book.jpg" class="img_thumbnail" > -->
                <div class="col-md-6">
                  <label for="img_file">Select Book Img Cover</label>
                  <input type="file" id="img_file" name="img_file" accept="application/jpg">
                  <p class="help-bloc">Image File Only</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="pdf_file">Select Book</label>
                  <input type="file" id="pdf_file" name="pdf_file" accept="application/pdf">
                  <p class="help-bloc">PDF File Only</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bookTitle">Book Title</label>
                    <input type="text" class="form-control" name="bookTitle" id="bookTitle" placeholder="Book Title">
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="isbn">ISBN No</label>
                    <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN No">
                  </div>
                </div>
                
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="department">Department</label>
                    <select id="department" name="department" class="form-control">
                      <option value=" "> ~~ Select Department ~~ </option>
                      <?php
                        foreach ($department as $key => $value) {
                          echo "<option value='".$value['id']."'>".$value['departmentName']." </option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="level">Level</label>
                    <select id="level" name="level" class="form-control">
                      <option value=" "> ~~ Select Level ~~ </option>
                      <?php
                        foreach ($level as $key => $value) {
                          echo "<option value='".$value['id']."'>".$value['levels']." </option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="category">Categories</label>
                    <select id="category" name="category" class="form-control">

                      <option value=" "> ~~ Select Categories ~~ </option>
                      <?php
                        foreach ($category as $key => $value) {
                          echo "<option value='".$value['id']."'>".$value['categoryName']." </option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="author">Author's Name</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Author's Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="year">Year Published</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Year Published">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bookDescription">Book Description</label>
                    <textarea class="form-control" id="bookDescription" name="bookDescription">
                     </textarea>
                  </div>
                </div>
              </div>

              <button id="send" type="submit" class="btn btn-secondary pull-right"  ><i class="fa fa-check"></i> Submit </button>

            </form>

            
          </div> <!-- end content body -->  

        </div>
      </div>
    </div>

<script src="<?php echo BASE_URL; ?>backbone/view/viewTable.js"></script>
    
  </body>

</html>


 <div class="row">
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div  class="small-box bg-aqua">
            <div class="inner">
              <h3 id="cashview" class=""> </h3>
              <p>Total Contribution</p>
            </div>
            <div class="icon">
              <b>&#8358</b>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 id="loanview"></h3>

              <p>Loan Request</p>
            </div>
            <div class="icon">
              <i class="fa fa-pie-chart"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 id="usersview"></h3>

              <p>Members</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        
      </div>