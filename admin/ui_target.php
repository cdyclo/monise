<!DOCTYPE html>
<html lang="en">
    <head>

        <title>AdminLTE 3 | Monise</title>


        <?php
        include './css.php';
        include './js.php';
        ?>


    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">


            <?php
            include './navigasi_admin.php';
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>DataTables</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Data Target STO</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">


                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Target Penjualan Per STO</h3>

                                        <a class="btn btn-primary btn-sm float-sm-right"  href="#" data-toggle="modal" data-target="#tambah">
                                            <i class="fa fa-plus fa-sm" ></i>&nbsp; Tambah</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Bulan Target</th>
                                                    <th>Nama STO</th>
                                                    <th>Jumlah Target (Deal)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Januari 2022</td>
                                                    <td>CGK</td>
 <td>100</td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#ubah" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>  
                                                        <a data-toggle="modal" data-target="#hapus" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                                    </td>
                                                </tr>

                                                
<tr>
                                                    <td>2</td>
                                                    <td>Januari 2022</td>
                                                    <td>PLM</td>
 <td>100</td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#ubah" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>  
                                                        <a data-toggle="modal" data-target="#hapus" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                                    </td>
                                                </tr>



                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->


                    <div class="modal fade" id="tambah">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content bg-lightblue">
                                <div class="modal-header">
                                    <h4 class="modal-title">Create Data</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Bulan Target</label>
                                       <div class="col-sm-9">
                                            <select title="Tidak ada yang dipilih" required name="level" class="form-control select2 required" style="width: 100%;">
                                                <option selected="selected" value="">- Pilih Bulan -</option>
                                                <option value="#">JANUARI</option>
                                                <option value="#">FEBRUARI</option>
                                                <option value="#">MARET</option>
                                                <option value="#">APRIL</option>
                                                <option value="#">MEI</option>
                                                <option value="#">JUNI</option>
                                                <option value="#">JULI</option>
                                                <option value="#">AGUSTUS</option>
                                                <option value="#">SEPTEMBER</option>
                                                <option value="#">OKTOBER</option>
                                                <option value="#">NOVEMBER</option>
                                                <option value="#">DESEMBER</option>

                                            </select>
                                        </div>
                                    </div>

                                    
                                     <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Nama STO</label>
                                        <div class="col-sm-9">
                                            <select title="Tidak ada yang dipilih" required name="level" class="form-control select2 required" style="width: 100%;">
                                                <option selected="selected" value="">- Pilih STO Sales -</option>
                                                <option value="#">TGS</option>
                                                <option value="#">PIK</option>
                                                <option value="#">CGK</option>
                                                <option value="#">KDY</option>
                                                <option value="#">SLP</option>
                                                <option value="#">PLM</option>
                                                <option value="#">SGI</option>
                                                <option value="#">MRY</option>

                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Jumlah Target Deal</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Jumlah">
                                        </div>
                                    </div>
                                   


                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline-light">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->



                    <div class="modal fade" id="ubah">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content bg-light">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Data</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Bulan Target</label>
                                       <div class="col-sm-9">
                                            <select title="Tidak ada yang dipilih" required name="level" class="form-control select2 required" style="width: 100%;">
                                                <option selected="selected" value="">- Pilih Bulan -</option>
                                                <option value="#">JANUARI</option>
                                                <option value="#">FEBRUARI</option>
                                                <option value="#">MARET</option>
                                                <option value="#">APRIL</option>
                                                <option value="#">MEI</option>
                                                <option value="#">JUNI</option>
                                                <option value="#">JULI</option>
                                                <option value="#">AGUSTUS</option>
                                                <option value="#">SEPTEMBER</option>
                                                <option value="#">OKTOBER</option>
                                                <option value="#">NOVEMBER</option>
                                                <option value="#">DESEMBER</option>

                                            </select>
                                        </div>
                                    </div>

                                    
                                     <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Nama STO</label>
                                        <div class="col-sm-9">
                                            <select title="Tidak ada yang dipilih" required name="level" class="form-control select2 required" style="width: 100%;">
                                                <option selected="selected" value="">- Pilih STO Sales -</option>
                                                <option value="#">TGS</option>
                                                <option value="#">PIK</option>
                                                <option value="#">CGK</option>
                                                <option value="#">KDY</option>
                                                <option value="#">SLP</option>
                                                <option value="#">PLM</option>
                                                <option value="#">SGI</option>
                                                <option value="#">MRY</option>

                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Jumlah Target Deal</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Jumlah">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline-dark">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->


                    <div class="modal fade" id="hapus">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title">Apakah Anda Yakin Akan Menghapus Data?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form method="post" enctype="multipart/form-data" action="#" class="form-horizontal">                    
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-danger">Ya</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>



                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php
            include './footer.php';
            ?>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->


        <!-- Page specific script -->
        <script>
            $(function () {
                $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </body>
</html>
