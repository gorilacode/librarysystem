<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo BASE_URL;?>assets/dashboard/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i><b><?php echo strtoUpper($priviledge); ?></b></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($page == 'Home Page'){ echo 'active';}?> treeview">
          <a href="<?php echo BASE_URL?>members/index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Statements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page == 'Transactions Page'){ echo 'active';}?> treeview">
              <a href="<?php echo BASE_URL;?>members/pages/transactions.php">
                <i class="fa fa-files-o"></i>
                <span>View Transactions</span>
                <span class="pull-right-container">
              </a>
              
            </li>
            <li class="<?php if($page == 'Loans Page'){ echo 'active';}?> treeview">
              <a href="<?php echo BASE_URL;?>members/pages/loans.php">
                <i class="fa fa-files-o"></i>
                <span>View Loan Request</span>
                <span class="pull-right-container">
              </a>
              
            </li>
            <li class="<?php if($page == 'Users Page'){ echo 'active';}?> treeview">
              <a href="<?php echo BASE_URL;?>members/pages/users.php">
                <i class="fa fa-files-o"></i>
                <span>View Users</span>
                <span class="pull-right-container">
                
              </a>
              
            </li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo BASE_URL; ?>logout.php"><i class="fa fa-circle-o"></i> Log Out</a></li>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>