<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabel <?php echo $tabel; ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-body">
                            <!-- Button trigger modal -->
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                Tambah Data
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah data <?php echo $tabel; ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group input-group">

                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>File input</label>
                                                <input type="file">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Nama Lengkap</th>
                                        <th>Registrasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $data = $this->model_user->getAll('ys_login');
                                    $no = 1;
                                    //echo var_dump($data);
                                    foreach ($data->result_array() as $d) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['username']; ?></td>
                                            <td><?php echo $d['stts']; ?></td>
                                            <td class="center"><?php echo $d['nama_lengkap']; ?></td>
                                            <td class="center"><?php echo $d['waktu_daftar']; ?></td>
                                            <td width="65" class="center">
                                                <button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>   

                                </tbody>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Tambah data <?php echo $tabel; ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group input-group">

                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>File input</label>
                                                    <input type="file">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </table>

                        </div>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>