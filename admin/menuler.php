<?php 

ob_start();
session_start();

include 'header.php';
include 'sidebar.php'; 

if (!isset($_SESSION['admin_kadi'])) {
    header('Location:login.php');
}

?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENÜLER</h1>
                <h1 class="page-subhead-line">Site menülerini buradan yönetebilirsiniz.</h1>
            </div>


            <div class="col-md-12">
                <a href="menu-ekle.php"><button class="btn btn-success">Menü Ekle</button></a>
                <hr>
            </div>

            <div class="col-md-12">
              <!--   Kitchen Sink -->
              <div class="panel panel-default">
                <div class="panel-heading">
                    Menüler
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Menü Adı</th>
                                    <th>Menü URL</th>
                                    <th style="width:35px;">Menü Sırası</th>
                                    <th style="width:20px;"><center>Menü Düzenle</center></th>
                                    <th style="width:20px;"><center>Menü Sil</center></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                $menusorgu=mysql_query("select * from menuler");
                                while ($menucek=mysql_fetch_assoc($menusorgu)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $menucek['menu_id']; ?></td>
                                        <td><?php echo $menucek['menu_ad']; ?></td>
                                        <td><?php echo $menucek['menu_url']; ?></td>
                                        <td><?php echo $menucek['menu_sira']; ?></td>
                                        <td><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><center><button class="btn btn-primary">Düzenle</button></center></a></td>
                                        <td><a href="netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><center><button class="btn btn-danger">Sil</button></center></a></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>

        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>

<?php include 'footer.php'; ?>