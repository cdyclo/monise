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
                                    <li class="breadcrumb-item active">Data Aktifitas Sales</li>
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
                                        <h3 class="card-title">Data Aktifitas Harian Sales Force</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Sales Force</th>
                                                    <th>STO</th>
                                                    <th>Nama Pelanggan</th>                                                    
                                                    <th>Alamat</th>
                                                    <th>No. Hp</th>
                                                    <th>Layanan/Produk</th>                                                  
                                                    <th>Foto</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ana</td>
                                                    <td>STO Cengkareng</td>
                                                    <td>Cindy</td>
                                                    <td>Jl. Tomang Tinggi Raya</td>
                                                    <td>082155694461</td>
                                                    <td>Indihome 50 Mbps</td>

                                                    <td style="width: 200px;text-align: center;"> 
                                                        <a href="../a.jpg" data-toggle="lightbox" data-title="video produk">
                                                            <img src="../a.jpg" style="width: 40%;" class="img-fluid mb-2" alt="white sample"/>
                                                        </a>
                                                    </td>
                                                    <td>23 Desember 2021, 15.00 WIB</td>
                                                    <td>Penawaran</td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#ubah" href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>  
                                                        <a data-toggle="modal" data-target="#hapus" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>2</td>
                                                    <td>Ana</td>
                                                    <td>STO Cengkareng</td>
                                                    <td>Cindy</td>
                                                    <td>Jl. Tomang Tinggi Raya</td>
                                                    <td>082155694461</td>
                                                    <td>Indihome 50 Mbps</td>

                                                    <td style="width: 200px;text-align: center;"> 
                                                        <a href="../a.jpg" data-toggle="lightbox" data-title="video produk">
                                                            <img src="../a.jpg" style="width: 40%;" class="img-fluid mb-2" alt="white sample"/>
                                                        </a>
                                                    </td>
                                                    <td>23 Desember 2021, 15.00 WIB</td>
                                                    <td>Deal</td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#ubah" href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>  
                                                        <a data-toggle="modal" data-target="#hapus" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ana</td>
                                                    <td>STO Cengkareng</td>
                                                    <td>Cindy</td>
                                                    <td>Jl. Tomang Tinggi Raya</td>
                                                    <td>082155694461</td>
                                                    <td>Indihome 50 Mbps</td>

                                                    <td style="width: 200px;text-align: center;"> 
                                                        <a href="../a.jpg" data-toggle="lightbox" data-title="video produk">
                                                            <img src="../a.jpg" style="width: 40%;" class="img-fluid mb-2" alt="white sample"/>
                                                        </a>
                                                    </td>
                                                    <td>23 Desember 2021, 15.00 WIB</td>
                                                    <td>Penawaran</td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#ubah" href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>  
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
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Nama Sales Force</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Nama Sales Force">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan Alamat">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">No. HP</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="#" class="form-control" required placeholder="Masukkan No. HP">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">STO</label>
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
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Foto Barang</label>
                                        <div class="col-sm-9">

                                            <input required accept=".jpg, .jpeg,.png" type="file" name="#" class="form-control">
                                            <label style="background-color: blue; font-size: 13; color: white;" class="label label-info">Format Foto .jpg, .jpeg, .png (maks 100 kb)</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="text-align: left;">Status</label>
                                        <div class="col-sm-9">
                                            <select title="Tidak ada yang dipilih" required name="level" class="form-control select2 required" style="width: 100%;">
                                                <option selected="selected" value="">- Pilih Status -</option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>

                                            </select>
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
                    </div>

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
