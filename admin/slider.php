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
                <h1 class="page-head-line">SLİDER</h1>
                <h1 class="page-subhead-line">Sitenizdeki sliderları buradan yönetebilirsiniz.</h1>
            </div>


            <div class="col-md-12">
                <a href="slider-ekle.php"><button class="btn btn-success">Slider Ekle</button></a>
                <hr>
            </div>

            <div class="col-md-12">
              <!--   Kitchen Sink -->
              <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli olan sliderlar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Slider Adı</th>
                                    <th style="width:40px;">Slider Resmi</th>
                                    <th>Slider Link</th>
                                    <th style="width:35px;">Slider Sırası</th>
                                    <th style="width:20px;"><center>Slider Sil</center></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                $slidersorgu=mysql_query("select * from slider");
                                while ($slidercek=mysql_fetch_assoc($slidersorgu)) {
                                    ?>

                                    <tr>
                                        <td><?php echo $slidercek['slider_id']; ?></td>
                                        <td><?php echo $slidercek['slider_ad']; ?></td>
                                        <td>
                                            <img width="300" src="<?php echo $slidercek['slider_resim_yol']; ?>" >
                                        </td>
                                        <td><?php echo $slidercek['slider_url']; ?></td>
                                        <td><?php echo $slidercek['slider_sira']; ?></td>
                                        <td><a href="netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok"><center><button class="btn btn-danger">Sil</button></center></a></td>
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