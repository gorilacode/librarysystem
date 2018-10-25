<?php

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $page; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL;?>members/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $page; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
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

      

      