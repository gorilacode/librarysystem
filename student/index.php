<?php
$pageTitle = "YCT Library";

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

    


// $book = select_all('booktable');

$book = select_related_books("booktable", "*", "department" , $department);
?>


      <!-- Page Features -->
      <!-- div class="row text-center">
        <div id="bookview">
          
        </div>
        

      </div> -->

      <div class="text-center">
        <h3 class="my-4">Books Louge</h3>
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

    <!-- Modal -->
    


</div>

<script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/view/studentView.js" ></script>

<?php
require_once(ROOT_PATH . 'inc/index/footer.php');
?>
