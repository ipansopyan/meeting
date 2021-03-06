
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo $base_url?>Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo $base_url?>Public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo $base_url?>Public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo $base_url?>Public/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>



              </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#"><?php echo $_SESSION['name'] ?></a>
        </li>
        <li class="breadcrumb-item active"> <a  href="?meeting=logout">logout</a> </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
           <p><?php echo $_SESSION['pesan'] ?></p>
         </div>
        <div class="card-body">


          <form class='form-inline form-horizontal' method="post" action="?meeting=update" >
            <table>
              <tr>
                <input type="hidden" name="meeting_id" value="<?php echo $meeting['id'] ?>">
                <td><label for="title">Ttitle</label></td>
                <td>&nbsp;&nbsp;</td>
                <td><input value="<?php echo $meeting['title']; ?>" required name="title" type="text" class="form-control" id="title"></td>
              </tr>
              <tr>
                <td><label for="description">Description</label></td>
                <td>&nbsp;&nbsp;</td>
                <td><textarea required name="description" class='form-control'><?php echo $meeting['description']; ?></textarea>
                </td>
              </tr>
              <tr>
                <td><label for="time">Time</label></td>
                <td>&nbsp;&nbsp;</td>
                <td><input value="<?php echo $meeting['waktu']; ?>" required name="time" type="text" class="form-control" id="time"></td>
              </tr>
              <tr>
                <td><label for="place">Place</label></td>
                <td>&nbsp;&nbsp;</td>
                <td><input value="<?php echo $meeting['place']; ?>" required name="place" type="text" class="form-control" id="place"></td>
              </tr>
              <tr>
                <td><button required type="submit" name="submit" value="submit" class="btn btn-xs btn-primary">submit</button></td>
                <td></td>
              </tr>


            </table>
          </form>





        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo $base_url?>Public/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $base_url?>Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo $base_url?>Public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo $base_url?>Public/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo $base_url?>App/view/asset/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo $base_url?>Public/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo $base_url?>Public/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
