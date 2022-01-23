<!DOCTYPE html>
<html lang="en">
    <head>

        <title>AdminLTE 3 | Dashboard 2</title>

        <?php
        include './css.php';
        include './js.php';
        ?>
    </head>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="../template/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
            </div>

            <!-- Navbar -->
            <?php
            include './navigasi_admin.php';
            ?>
            <!-- /.navbar -->



            <!-- Content Wrapper. Contains page content -->
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
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Info boxes -->
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Data Sentral Telepon Otomat</span>
                                        <span class="info-box-number">
                                            10
                                            <small> STO </small>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Layanan / Produk</span>
                                        <span class="info-box-number">10</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix hidden-md-up"></div>

                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-plus"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Sales Force</span>
                                        <span class="info-box-number">25</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Data Aktifitas Sales</span>
                                        <span class="info-box-number">50</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Monthly Recap Report</h5>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                           
                                           
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                          
                                            <!-- /.col -->
                                            <div class="col-md-6">
                                                <p class="text-center">
                                                    <strong>Goal Completion</strong>
                                                </p>

                                                <div class="progress-group">
                                                    STO TGA
                                                    <span class="float-right"><b>70</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: 70%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                               <div class="progress-group">
                                                    STO PIK
                                                    <span class="float-right"><b>75</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                                
                                               
                                                <div class="progress-group">
                                                    STO CENGKARENG
                                                    <span class="float-right"><b>65</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" style="width: 65%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                                
                                                 <div class="progress-group">
                                                    STO KEDOYA
                                                    <span class="float-right"><b>85</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" style="width: 85%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                                
                                                  <div class="progress-group">
                                                    STO SLIPI
                                                    <span class="float-right"><b>80</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: 80%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                                  <div class="progress-group">
                                                    STO PALMERAH
                                                    <span class="float-right"><b>83</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" style="width: 83%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                                
                                                  <div class="progress-group">
                                                    STO SEMANGGI
                                                    <span class="float-right"><b>78</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" style="width: 78%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                                
                                                  <div class="progress-group">
                                                    STO MERUYA
                                                    <span class="float-right"><b>73</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" style="width: 73%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                                
                                            </div>
                                            <!-- /.col -->
                                            
                                             <!-- /.col -->
                                            <div class="col-md-6">
                                                <p class="text-center">
                                                    <strong>Goal Completion Top 8 Sales</strong>
                                                </p>

                                                <div class="progress-group">
                                                    Nilawati Puspita Ningrum
                                                    <span class="float-right"><b>50</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                                <div class="progress-group">
                                                    Nashfati Ikramina
                                                    <span class="float-right"><b>65</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class="progress-group">
                                                    <span class="progress-text">Yudha Cipta</span>
                                                    <span class="float-right"><b>55</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class="progress-group">
                                                    Jumbri Agustin
                                                    <span class="float-right"><b>78</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="progress-group">
                                                    Irfani Widya Pratidina
                                                    <span class="float-right"><b>67</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                                <div class="progress-group">
                                                    Dipo Sakti
                                                    <span class="float-right"><b>73</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class="progress-group">
                                                    <span class="progress-text">Ana</span>
                                                    <span class="float-right"><b>62</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class="progress-group">
                                                    Cindy Triana Rulyta
                                                    <span class="float-right"><b>55</b>/100</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- ./card-body -->
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-sm-3 col-6">
                                                <div class="description-block border-right">                                                   
                                                    <h5 class="description-header text-success">15</h5>
                                                    <span class="description-text">DATA PENAWARAN</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-3 col-6">
                                                <div class="description-block border-right">                                                   
                                                    <h5 class="description-header text-success">25</h5>
                                                    <span class="description-text">DATA NEGOSIASI</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                         <div class="col-sm-3 col-6">
                                                <div class="description-block border-right">                                                   
                                                    <h5 class="description-header text-success">34</h5>
                                                    <span class="description-text">DATA AKTIFITAS</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                             <div class="col-sm-3 col-6">
                                                <div class="description-block border-right">                                                   
                                                    <h5 class="description-header text-success">95</h5>
                                                    <span class="description-text">DATA TERCAPAI</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                 
                                   
                                        <!-- USERS LIST -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Members</h3>

                                                <div class="card-tools">
                                                    <span class="badge badge-danger">Sales Force</span>
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                 
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body p-0">
                                                <ul class="users-list clearfix">
                                                    <li>
                                                        <img src="../template/dist/img/user1-128x128.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">Alexander Pierce</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                    <li>
                                                        <img src="../template/dist/img/user8-128x128.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">Norman</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                    <li>
                                                        <img src="../template/dist/img/user7-128x128.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">Jane</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                    <li>
                                                        <img src="../template/dist/img/user6-128x128.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">John</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                    <li>
                                                        <img src="../template/dist/img/user2-160x160.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">Alexander</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                    <li>
                                                        <img src="../template/dist/img/user5-128x128.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">Sarah</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                    <li>
                                                        <img src="../template/dist/img/user4-128x128.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">Nora</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                    <li>
                                                        <img src="../template/dist/img/user3-128x128.jpg" alt="User Image">
                                                        <a class="users-list-name" href="#">Nadia</a>
                                                        <span class="users-list-date">STO Cengkareng</span>
                                                    </li>
                                                   
                                                </ul>
                                                <!-- /.users-list -->
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer text-center">
                                                <a href="javascript:">View All Users</a>
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!--/.card -->
                           
 
                        <!-- /.row -->
                    </div><!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

           
            <?php 
            include './footer.php';
            ?>
            
            
        </div>
        <!-- ./wrapper -->


    </body>
</html>
