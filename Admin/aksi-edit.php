<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Artikel</h6>
                        </div>
                        <div class="card-body">
                        <?php
                            include("config_fb.php");
                            include("firebaseRDB.php");

                            $db = new firebaseRDB($databaseURL);
                            $id = $_GET['id'];
                            $retrieve = $db->retrieve("aksi/$id");
                            $data = json_decode($retrieve, 1);

                            ?>

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="aksi-edit-action.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Judul Aksi</label>
                                        <div class="col-sm-8">
                                            <input name="title" type="text" id="title" class="form-control" value="<?php echo $data['title']?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Link Picture</label>
                                        <div class="col-sm-8">
                                            <input name="image" class="form-control" id="image" type="text" value="<?php echo $data['image']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Deskripsi Aksi</label>
                                        <div class="col-sm-8">
                                            <input name="deskripsi" class="form-control" id="deskripsi" type="text" value="<?php echo $data['deskripsi']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tanggal Aksi</label>
                                        <div class="col-sm-8">
                                            <input name="date" class="form-control" type="text" id="date" type="text" value="<?php echo $data['date']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Link Aksi</label>
                                        <div class="col-sm-8">
                                            <input name="link" class="form-control" id="link" type="text" value="<?php echo $data['link']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>