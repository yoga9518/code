<?php if($_SESSION['stts']=="admin"){?>
<script type="text/javascript" src="<?php echo base_url();?>assets/artikel/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="">

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $judul_menu;?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <input class="form-control">
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-default">Posting</button>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-7">
                                <div align="right" class="form-group">
                                    <div align="left" class="form-group">
                                        <div class="col-md-8"><label>Ini Judul Artikel</label></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="form-group">

                                <textarea class="ckeditor" id="ckeditor" rows="50"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        Green Panel
                                    </div>
                                    <div class="panel-body">
                                        <p>Ini nantinya akan di pakai untuk keperluan kita</p>
                                    </div>
                                    <div class="panel-footer">
                                        Panel Footer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <?php } ?>