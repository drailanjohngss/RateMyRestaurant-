<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rate MY Restaurant - Admin Dashboard</title>

    <!-- Bootstrap core CSS-->
    <?= $this->Html->css('bootstrap.min.css') ?>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/admin/vendor/fontawesome-free/css/all.min.css') ?>

    <!-- Page level plugin CSS-->
    <?= $this->Html->css('/admin/vendor/datatables/dataTables.bootstrap4.css') ?>

    <!-- Custom styles for this template-->
    <?= $this->Html->css('/admin/css/sb-admin.css') ?>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Rate My Restaurant Admin</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#"><?= $loginUser['first_name'] ?></a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a> -->
            <?= $this->Html->link('Logout', '/logout', [
                'class' => 'dropdown-item',
                'data-toggle' => 'modal',
                'data-target' => '#logoutModal'
                ]) ?>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item <?= $getAction == '/admin' ? 'active' : '' ?>">
            <?= $this->Html->link('<i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span>',
            [
                'controller' => 'Admin',
                'action' => 'index'
            ],
            [
                'escape' => false,
                'class' => 'nav-link'
            ]
            ) ?>
          </a>
        </li>
        <li class="nav-item <?= $getAction == '/restaurants/add' ? 'active' : '' ?>">
            <?= $this->Html->link('<i class="fas fa-fw fa-chart-area"></i><span>Add Restaurant</span>',
            [
                'controller' => 'Restaurants',
                'action' => 'add'
            ],
            [
                'escape' => false,
                'class' => 'nav-link'
            ]
            ) ?>
        </li>
        <li class="nav-item <?= $getAction == '/restaurants' ? 'active' : '' ?>">
            <?= $this->Html->link('<i class="fas fa-fw fa-table"></i><span>View Restaurant</span>',
            [
                'controller' => 'Restaurants',
                'action' => 'index'
            ],
            [
                'escape' => false,
                'class' => 'nav-link'
            ]
            ) ?>
        </li>
        <li class="nav-item <?= $getAction == '/users' ? 'active' : '' ?>">
            <?= $this->Html->link('<i class="fas fa-fw fa-table"></i><span>Users</span>',
            [
                'controller' => 'Users',
                'action' => 'index'
            ],
            [
                'escape' => false,
                'class' => 'nav-link'
            ]
            ) ?>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

        <?= $this->fetch('content') ?>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © RateMyRestaurant 2018</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <?= $this->Html->link('Logout', '/logout', ['class' => 'btn btn-primary']) ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?= $this->Html->script('/admin/vendor/jquery/jquery.min.js') ?>
    <?= $this->Html->script('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
    <!-- Core plugin JavaScript-->
    <?= $this->Html->script('/admin/vendor/jquery-easing/jquery.easing.min.js') ?>

    <!-- Page level plugin JavaScript-->
    <?= $this->Html->script('/admin/vendor/chart.js/Chart.min.js') ?>
    <?= $this->Html->script('/admin/vendor/datatables/jquery.dataTables.js') ?>
    <?= $this->Html->script('/admin/vendor/datatables/dataTables.bootstrap4.js') ?>
    <!-- Custom scripts for all pages-->
    <?= $this->Html->script('/admin/js/sb-admin.min.js') ?>
    <!-- Demo scripts for this page-->
    <?= $this->Html->script('/admin/js/demo/datatables-demo.js') ?>
    <?= $this->Html->script('/admin/js/demo/chart-area-demo.js') ?>

  </body>

</html>
