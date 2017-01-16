<?php if ($_SESSION['stts'] == "admin") { ?>
    <!--    <script type="text/javascript" src="<?php //echo base_url();  ?>assets/artikel/ckeditor.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/portal/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="">

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $judul_menu; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">

                            </div>
                            <form action="#" method="post">
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <label>Judul</label>
                                        <input class="form-control" name="judul" type="text" size="80">
                                        <p></p>
                                        <label>Artikel</label>
                                        <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
                                        <p></p>
                                        <input type="submit" name="posting" value="POSTING">

                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="panel panel-green">
                                            <div class="panel-heading">
                                                stts
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="<?php echo base_url(); ?>assets/portal/jquery-1.12.1.js"></script>
        <script>
            var roxyFileman = '<?php echo base_url(); ?>assets/portal/ckeditor/plugins/fileman/index.html';
            $(function () {
                CKEDITOR.replace('editor1', {filebrowserBrowseUrl: roxyFileman,
                    filebrowserImageBrowseUrl: roxyFileman + '?type=image',
                    removeDialogTabs: 'link:upload;image:upload'});
            });
        </script>
    <?php } ?>