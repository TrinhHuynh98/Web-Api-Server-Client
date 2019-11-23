<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>

    <link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>template/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/fonts/fontawesome/css/font-awesome.min.css">
  
    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>template/css/style.css">
    <meta charshet="utf-8" />
  </head>
  <body>
  <header role="banner">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="index.html"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>home">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>posts/index">Blogs</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>pages/store">Store</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>#">Contact</a>
              </li>

              <?php if(!$this->session->userdata('login')): ?>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>user/register">Register</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>user/login">Login</a>
              </li>

              <?php endif; ?>

              <?php if($this->session->userdata('login')): ?>

              <li class="nav-item" >
                <a class="nav-link" href="<?php echo base_url(); ?>user/dashboard"> <?php echo $this->session->userdata('username'); ?></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
              </li>

              <?php endif; ?>

            </ul>

          </div>
        </div>
      </nav>  
    </header>
 
  


 

  <!-- Flash Messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_updated')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('category_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
    <?php endif; ?>
