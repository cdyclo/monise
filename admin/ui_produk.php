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
                                    <li class="breadcrumb-item active">Data Layanan/Produk</li>
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
                                        <h3 class="card-title">Data Layanan & Produk</h3>

                                        <a class="btn btn-primary btn-sm float-sm-right"  href="#" data-toggle="modal" data-target="#tambah">
                                            <i class="fa fa-plus fa-sm" ></i>&nbsp; Tambah</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Layanan/Produk</th>
                                                    <th>Kategori</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Indihome</td>
                                                    <td>Layanan</td>

                                                    <td>
                                                        <a data-toggle="modal" data-target="#ubah" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>  
                                                        <a data-toggle="modal" data-target="#hapus" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Orbit</td>
                                                    <td>Produk</td>

                                                    <td>
                                                        <a data-toggle="modal" data-target="#ubah" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>  
                                                        <a data-toggle="modal" data-target="#hapus" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Orbit</td>
                                                    <td>Produk</td>

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
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Nama Layanan/Produk</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Nama Layanan/Produk">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Kategori</label>
                                        <div class="col-sm-9">
                                            <select title="Tidak ada yang dipilih" required name="level" class="form-control select2 required" style="width: 100%;">
                                                <option selected="selected" value="">- Pilih Status -</option>
                                                <option value="#">Layanan</option>
                                                <option value="#">Produk</option>

                                            </select>
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
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Nama STO</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Nama STO">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Singkatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Singkatan">
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
