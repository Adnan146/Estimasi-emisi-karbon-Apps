<?php
include("config_fb.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>
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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Aksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Link Picture</th>
                                            <th>Judul Aksi </th>
                                            <th>Deskripsi Aksi </th>
                                            <th>Tanggal Aksi</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $data = $db->retrieve("aksi");
                                        $data = json_decode($data, 1);
                                        if(is_array($data)){
                                            foreach($data as $id => $aksi){
                            
                                                echo "<tr>
                                                <td><img src='{$aksi['image']}' width='50px'></td>
                                                <td>{$aksi['title']}</td>
                                                <td>{$aksi['deskripsi']}</td>
                                                <td>{$aksi['date']}</td>
                                                <td>{$aksi['link']}</td>
                                                <td>
                                                <a href='aksi-edit.php?id=$id' class='btn-sm btn-primary'><span class='fas fa-edit'></a>
                                                <a href='aksi-hapus.php?id=$id' class='btn-sm btn-danger'><span class='fas fa-trash'></a>
                                                </td>
                                               
                                            </tr>";
                                            }
                                        }
                                        ?>
                            </div>
                        
                        </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </div>
    <!-- End of Page Wrapper -->