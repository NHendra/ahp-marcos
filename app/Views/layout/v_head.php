
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AHP MARCOS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>/template/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-red navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <?php if(! session()->get('logged_in')){ ?>
          <i class="far fa-user text-blue"></i>
          <span>Login Admin</span>
        <?php }else{ ?> 
          <i class="far fa-user text-warning"></i>
          <span>Logout Admin</span>
        <?php } ?>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right <?php if(session()->getFlashdata('slh')):?>
                    <?php echo 'show'; ?>
                <?php endif;?>
                <?php if(session()->getFlashdata('bnr')):?>
                  <?php echo 'show'; ?>
                <?php endif;?>">
          
        <?php if(! session()->get('logged_in')){ ?>
        <div class="card card-outline card-primary">
    <div class="card-body">
    <div class="card-header text-center">
      <h1><b>LOGIN</b></h1>
    </div>
      <form action="/login/auth" method="post">
        <div class="input-group mb-3">
          <input name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.card-body -->
  </div>
  <?php }else{ ?> 
    <div class="card card-outline card-danger">
    <div class="card-body">
    <div class="card-header text-center">
      <h4><b>Ganti Password</b></h4>
    </div>
    <?php if(session()->getFlashdata('slh')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('slh') ?></div>
                <?php endif;?>
                <?php if(session()->getFlashdata('bnr')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('bnr') ?></div>
                <?php endif;?>

    <form action="/login/ganti" method="post">
        <div class="input-group mb-3">
          <input name="passwordlama"  type="password" class="form-control" placeholder="Password Lama" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="passwordbaru" type="password" class="form-control" placeholder="Password Baru" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-block">Ganti</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <form action="/login/logout" method="post">
        <div class="input-group mb-3">
          
        </div>
        <div class="input-group mb-3">
         
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-danger ">Logout</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.card-body -->
  </div>
    <?php } ?>


        </div>
      </li>
      
      
    </ul>

    
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-red elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>" class="brand-link elevation-4">
      <img src="<?php echo base_url() ?>/template/dist/img/stiki.png" alt="Stiki Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AHP MARCOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <div class='nav-item'>
        <div class="info" >
        <li class="nav-header">MENU</li>
        </div>
        </div>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>" class="nav-link <?php if($url1=="dashboard"){echo " active";}?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url() ?>/pemahp" class="nav-link <?php if($url1=="pemahp"){echo " active";}?>">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Pembobotan AHP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>/perahp" class="nav-link <?php if($url1=="perahp"){echo " active";}?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Matrix AHP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>/marcos" class="nav-link <?php if($url1=="marcos"){echo " active";}?>">
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                AHP-MARCOS
              </p>
            </a>
          </li>

          <?php if(! session()->get('logged_in')){ ?>
 
        <?php }else{ ?> 

        

          <div class="info" >
        <li class="nav-header">ADMIN</li>
        </div>

          <li class="nav-item has-treeview <?php  if($url1=="admin"){echo "menu-open";}else{echo "menu-close";}?>">
          <a href="#" class="nav-link <?php if($url1=="admin"){echo " active";}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>/alternatif" class="nav-link<?php if($url2=="alternatif"){echo " active";}?>">
                  <i class="nav-icon fas fa-database"></i>
                    <p>
                    Data Alternatif
                    </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo base_url() ?>/kriteria" class="nav-link<?php if($url2=="kriteria"){echo " active";}?>">
                <i class="nav-icon fas fa-archive"></i>
                  <p>
                  Data Kriteria
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
          <?php } ?>




          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /.AHPchecker -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Main row -->