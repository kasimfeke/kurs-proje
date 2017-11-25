<?php
include 'header.php';
include 'sidebar.php';
ob_start();
session_start();
?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SİTE GENEL AYARLARI</h1>

                
                <?php 

                if ($_GET['durum']=="ok") { ?>
                
                <h1 style="color:green;" class="page-subhead-line">Güncelleme başarı ile tamamlandı.</h1>

                <?php }

                elseif ($_GET['durum']=="no") { ?>
                
                <h1 style="color:red;" class="page-subhead-line">Güncelleme başarısız.</h1>

                <?php }

                else
                    { ?>
                        <h1 class="page-subhead-line">Sitenizin genel ayarlarını buradan düzenleyebilirsiniz.</h1>
                        <?php }

                        ?>
                        

                        

                    </div>
                </div>
                <!-- /. ROW  -->


                <form action="netting/islem.php" method="POST">

                    <div class="form-group col-md-5">
                        <label>Site Başlığı</label>
                        <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Site Açıklaması</label>
                        <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label>Telefon Numarası</label>
                        <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon']; ?>">
                    </div>

                    <div class="form-group col-md-8">
                        <label>Site Footer</label>
                        <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer']; ?>">
                    </div>

                    <div class="form-group col-md-8">
                        <label>Adres</label>
                        <input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']; ?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Mail</label>
                        <input class="form-control" type="email" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <input style="width:100%" class="btn btn-success" type="submit" name="ayarkaydet" value="Kaydet">
                    </div>
                    

                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>