<?php
include 'header.php';
include 'sidebar.php';
?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENÜ EKLEME ALANI</h1>

                
                <?php 

                if ($_GET['durum']=="ok") { ?>
                
                <h1 style="color:green;" class="page-subhead-line">Menü başarı ile eklendi.</h1>

                <?php }

                elseif ($_GET['durum']=="no") { ?>
                
                <h1 style="color:red;" class="page-subhead-line">Menü eklenemedi.</h1>

                <?php }

                else
                    { ?>
                        <h1 class="page-subhead-line">Sitenize menü ekliyorsunuz..</h1>
                        <?php }

                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->


                <form action="netting/islem.php" method="POST">

                    <div class="form-group col-md-5">
                        <label>Menü Adı</label>
                        <input class="form-control" type="text" name="menu_ad" placeholder="Menü Adı Giriniz">
                    </div>

                    <div class="form-group col-md-7">
                        <label>Menü URL</label>
                        <input class="form-control" type="text" name="menu_url" value="http://">
                    </div>

                    <div class="form-group col-md-5">
                        <label>Menü Sırası</label>
                        <input class="form-control" type="number" name="menu_sira" placeholder="Menü Sırası Giriniz">
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-3">
                            <input style="width:100%" class="btn btn-success" type="submit" name="menukaydet" value="Kaydet">
                        </div>
                    </div>

                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>