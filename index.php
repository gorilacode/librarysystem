<?php
$pageTitle = "YCT Library";

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

require_once(ROOT_PATH . 'inc/index/header.php');

require_once(ROOT_PATH . 'inc/index/nav.php');

$book = select_all('booktable');
?>


      <!-- Page Features -->
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
            $output = $output.'<a href="'.BASE_URL.'login.php" class="btn btn-success">Read</a>';
            $output = $output.'</div>';
            $output = $output.'</div>';
            $output = $output.'</div>';

            echo $output;
          }
        ?>


      </div>

        
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php
require_once(ROOT_PATH . 'inc/index/footer.php');
?>
