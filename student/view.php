<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(Session::exists('home')) {
      echo '<p>'. Session::flash('home') .'</p>';
    }

    $user = new User();

    if($user->isLoggedIn()) {
      // include(ROOT_PATH. 'inc/main_page/users_details.php');
      $department = $user->data()->department;
      // $acct = $user->data()->nexcop_account_no;
      // $amount = $user->data()->contribution_amount;
      // $fullname = $user->data()->firstname . ' '.$user->data()->lastname;
      // $mobile_no = $user->data()->mobile_no;
      // $staff_id = $user->data()->staff_id;
      // $priviledge = $user->data()->priviledge;

    } else {

      // echo '<p> You need to <a href="login.php"> Log In </a> or <a href="register.php"> Register </a></p>';
      Redirect::to(404);
    }

include(ROOT_PATH . 'inc/index/header.php');

include(ROOT_PATH . 'student/inc/navbar.php');


if (isset($_GET["id"])) {
 $id = $_GET["id"];
  # code...
}

// $book = select_all('booktable');

$book = select_all_limit('booktable', $department);

$single = select_single("booktable", $id);
?>

<div class="text-center">
        <h3 class="my-4">Books Preview</h3>
      </div>
      <!-- <?php echo $department; ?> -->

      <div class="row text-center">
        <?php
          foreach ($single as $key => $value) {
            $output = "";
            $output = $output.'<div class="modal-body" style="background-color: #fff">';
            $output = $output.'<div class="row">';
            $output = $output.'<div class="col-md-8">';
            $output = $output.'<img class="img-fluid img-thumbnail" src="'.BASE_URL."upload/images/".$value["imgFileName"].'" alt="">';
            $output = $output.'</div>';
            $output = $output.'<div class="col-md-4">';
            $output = $output.'<div style="text-align: left;" >';
            $output = $output.'<h5 class="my-3">Book Title</h5>';
            $output = $output.'<p>'.$value["bookTitle"].'</p>';
            $output = $output.'<h5 class="my-3">Description</h5>';
            $output = $output.'<p>'.$value["bookDescription"].'</p>';
            $output = $output.'<h5 class="my-3">Author</h5>';
            $output = $output.'<p>'.$value["author"].'</p>';
            $output = $output.'<h5 class="my-3">Year</h5>';
            $output = $output.'<p>'.$value["year"].'</p>';
            $output = $output.'<h5 class="my-3">ISBN</h5>';
            $output = $output.'<p>'.$value["isbn"].'</p>';
            $output = $output.'</div>';
            $output = $output.'<a href="'.BASE_URL."upload/pdfs/".$value["fileName"].'" class="btn btn-success">Read / Download</a>';
            $output = $output.'</div>';
            $output = $output.'</div>';
            $output = $output.'</div>';

            echo $output;
          }
        ?>

                


      </div >

      <div class="text-center">
        <h3 class="my-4">Related Books</h3>
      </div>
      <!-- <?php echo $department; ?> -->

      <div class="row text-center">
        <?php
          foreach ($book as $key => $value) {
            $output = "";
            $output = $output.'<div class="col-lg-3 col-md-6 mb-4">';
            $output = $output.'<div class="card">';
            $output = $output.'<img class="card-img-top img-thumbnail" src="'.BASE_URL."upload/images/".$value["imgFileName"].'" alt="" >';
            $output = $output.'<div class="card-body">';
            $output = $output.'<h5 class="card-title">'.$value["bookTitle"].'</h5>';
            $output = $output.'<p>'.$value["author"].'</p>';
            $output = $output.'</div>';
            $output = $output.'<div class="card-footer">';
            $output = $output.'<a href="'.BASE_URL."student/view.php?id=".$value["id"].'" class="btn btn-success">Preview</a>';
            $output = $output.'</div>';
            $output = $output.'</div>';
            $output = $output.'</div>';

            echo $output;
          }
        ?>


      </div>


      </div>
      <!-- /.row -->

      

    </div>
    <!-- /.container -->

<?php
require_once(ROOT_PATH . 'inc/index/footer.php');
?>