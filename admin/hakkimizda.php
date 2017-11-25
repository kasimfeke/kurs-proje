<?php
include 'header.php';
include 'sidebar.php';
ob_start();
session_start();
?>

<head><script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script></head>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">HAKKIMIZDA SAYFASI GÜNCELLEME ALANI</h1>

                
                <?php 

                if ($_GET['durum']=="ok") { ?>
                
                <h1 style="color:green;" class="page-subhead-line">Güncelleme başarı ile tamamlandı.</h1>

                <?php }

                elseif ($_GET['durum']=="no") { ?>
                
                <h1 style="color:red;" class="page-subhead-line">Güncelleme başarısız.</h1>

                <?php }

                else
                    { ?>
                        <h1 class="page-subhead-line">Hakkımızda sayfasını buradan düzenleyebilirsiniz.</h1>
                        <?php }

                        ?>
                    </div>
                </div>
                <!-- /. ROW  -->

                <form action="netting/islem.php" method="POST">
                    <div class="form-group col-md-5">
                        <label>Sayfa Başlığı</label>
                        <input class="form-control" type="text" name="hakkimizda_baslik" value="<?php echo $hakcek['hakkimizda_baslik']; ?>" required="">
                    </div>
                    <div class="form-group col-md-7">
                        <label>Sayfa Açıklaması</label><br>
                        <textarea class="ckeditor" type="text" name="hakkimizda_yazi" cols="65" rows="7"><?php echo $hakcek['hakkimizda_yazi']; ?></textarea>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <input style="width:100%" class="btn btn-success" type="submit" name="hakkimizdakaydet" value="Kaydet">
                    </div>
                    

                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>