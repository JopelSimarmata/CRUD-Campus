<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>



  <?php require __DIR__ . "/layouts/link.php" ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/logo.png" alt="Information System" height="60" width="60">
    <p>Information System 2023</p>
  </div>

  <!-- navbar -->
  <?php require __DIR__ . "/layouts/nav-side.php" ?>
  <!-- navbar -->

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->

<!-- CONTENT -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <!-- small box -->
            <a href='/mahasiswa/enroll' class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>New Enroll</p>
              </div>
            </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-md-6 col-12">
            <!-- small box -->
            <a href='#' class="small-box bg-primary">
              <div class="inner">
                <h3>0<sup style="font-size: 20px"></sup></h3>

                <p>List Course</p>
              </div>
            </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-md-6 col-12">
            <!-- small box -->
            <a href='#' class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </a>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
  </div>

<!-- CONTENT -->


   


  <!-- /.content-wrapper -->

  <?php require __DIR__ . "/layouts/footer.php" ?>

  



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
