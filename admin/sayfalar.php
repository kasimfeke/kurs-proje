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
                <h1 class="page-head-line">SAYFALAR</h1>
                <h1 class="page-subhead-line">Site sayfalarını buradan yönetebilirsiniz.</h1>
            </div>


            <div class="col-md-12">
                <a href="sayfa-ekle.php"><button class="btn btn-success">Sayfa Ekle</button></a>
                <hr>
            </div>

            <div class="col-md-12">
              <!--   Kitchen Sink -->
              <div class="panel panel-default">
                <div class="panel-heading">
                    Sayfalar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">Eklendiği Tarih</th>
                                    <th>Sayfa Adı</th>
                                    <th class="col-md-2">Ana Sayfada Göster</th>
                                    <th style="width:20px;"><center>Menü Düzenle</center></th>
                                    <th style="width:20px;"><center>Menü Sil</center></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                $sayfasorgu=mysql_query("select * from sayfalar");
                                while ($sayfacek=mysql_fetch_assoc($sayfasorgu)) {
                                    ?>

                                    <tr>
                                        <td><?php echo $sayfacek['sayfa_id']; ?></td>
                                        <td><?php echo $sayfacek['sayfa_tarih']; ?></td>
                                        <td><?php echo $sayfacek['sayfa_ad']; ?></td>
                                        <td>
                                            <?php if($sayfacek['sayfa_anasayfa']==0)
                                                {echo "Hayır";}
                                                elseif($sayfacek['sayfa_anasayfa']==1) {echo "Evet";}
                                                else {echo "Hatalı";}
                                             ?>
                                                
                                        </td>
                                        <td><a href="sayfa-duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><center><button class="btn btn-primary">Düzenle</button></center></a></td>
                                        <td><a href="netting/islem.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>&sayfasil=ok"><center><button class="btn btn-danger">Sil</button></center></a></td>
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