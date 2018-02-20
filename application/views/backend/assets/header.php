<header class="main-header">
  <!-- Logo -->
  <a class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>i</b>SJT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>i</b>SEJAHTERA</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url()."assets/images/user.png"; ?>" class="user-image" alt="User Image">
            <!-- <span class="fa fa-user" style="height: 100%; width: auto;"></span> -->
            <span class="hidden-xs">Welcome, <?php echo $this->session->userdata('username'); ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url()."assets/images/user.png"; ?>" class="img-circle" alt="User Image">

              <p>
                Your name : 
                <?php echo $this->session->userdata('username'); ?>
                <!-- admin
                <small>Join at: 20/06/2017</small> -->
              </p>
            </li>
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url()."welcome/logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>