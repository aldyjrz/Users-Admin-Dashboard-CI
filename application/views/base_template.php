<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $page_title?> | BSH Admin</title>
  <!-- page icon -->
  <link rel="icon" href="http://127.0.0.1/bsh-admin/pages/ic_bsh_black.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?=base_url()?>#" role="button"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url('dashboard')?>" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('dashboard')?>" class="brand-link">
      <img src="<?=base_url()?>dist/img/ic_gbs.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BSH ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=base_url()?>#" class="d-block">Adminnya Siapa Ya</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?=base_url()?>#" class="nav-link active">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fa fa-bars"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>users/list_member" class="nav-link active">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p>List Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>users/list_member" class="nav-link">
                  <i class="fa fa-search nav-icon"></i>
                  <p>Search Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>registers/add" class="nav-link">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p>Register Member</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="<?=base_url()?>registers/add_admin" class="nav-link">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p>Register Admin</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?=$view?>
<!-- jQuery -->
<script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url()?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url()?>plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>dist/js/adminlte.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>dist/js/demo.js"></script>
<script>
$(function() {
    $("#members").DataTable();
})

// edit member
$("#edit-form").submit(function(e) {
    e.preventDefault()
    var form = $(this)
    $.ajax({
        type: form.attr("method"),
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        success: (json) => {
            // detek error
            if (json.errors) {
                showError(json.errors)
            } else {
                showSuccess("Success", json.redirect)
            }
        },
        error: () => {
            showError("error")
        }
    })
})

// edit member
$("#edit-admin").submit(function(e) {
    e.preventDefault()
    var form = $(this)
    $.ajax({
        type: form.attr("method"),
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        success: (json) => {
            // detek error
            if (json.errors) {
                showError(json.errors)
            } else {
                showSuccess("Success", json.redirect)
            }
        },
        error: () => {
            showError("error")
        }
    })
})

// add member
$("#add-form").submit(function(e) {
    e.preventDefault()
    var form = $(this)
    $.ajax({
        type: form.attr("method"),
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        success: (json) => {
            // detek error
            if (json.errors) {
                showError(json.errors)
            } else {
                showSuccess("Success", json.redirect)
            }
        },
        error: () => {
            showError("error")
        }
    })
})

//add admin (table users)

// add member
$("#add-admin-form").submit(function(e) {
    e.preventDefault()
    var form = $(this)
    $.ajax({
        type: form.attr("method"),
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        success: (json) => {
            // detek error
            if (json.errors) {
                showError(json.errors)
            } else {
                showSuccess("Success", json.redirect)
            }
        },
        error: () => {
            showError("error")
        }
    })
})
//delete members not admin
function deleteMember(id) {
    $.ajax({
        type: "POST",
        url: "<?=base_url("users/delete")?>",
        data: {id: id},
        dataType: "json",
        success: (json) => {
            // detek error
            if (json.errors) {
                showError(json.errors)
            } else {
                showSuccess("Success", json.redirect)
            }
        },
        error: () => {
            showError("error")
        }
    })
}

function showSuccess(text, redirect) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: text
    })
    setTimeout(() => {
        window.location.replace(redirect)
    }, 2000)
}

function showError(text) {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: text
    })
}

</script>
</body>
</html>