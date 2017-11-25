<?php
include 'header.php';
include 'sidebar.php';
$sayfa_id=$_GET['sayfa_id'];
$sayfasorgu=mysql_query("select * from sayfalar where sayfa_id='$sayfa_id'");
$sayfacek=mysql_fetch_assoc($sayfasorgu);
?>

<head><script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script></head>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SAYFA DÜZENLEME ALANI</h1>

                
                <?php 

                if ($_GET['durum']=="ok") { ?>
                
                <h1 style="color:green;" class="page-subhead-line">Sayfa başarı ile düzenlendi.</h1>

                <?php }

                elseif ($_GET['durum']=="no") { ?>
                
                <h1 style="color:red;" class="page-subhead-line">Sayfa düzenlenemedi.</h1>

                <?php }

                else
                    { ?>
                        <h1 class="page-subhead-line">Düzenleme yaptıktan sonra kaydedin</h1>
                        <?php }
                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->


                <form action="netting/islem.php" method="POST">

                    <input class="form-control" type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id']; ?>">

                    <div class="form-group col-md-5">
                        <label>Sayfa Adı</label>
                        <input class="form-control" type="text" name="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad']; ?>">
                    </div>

                    <div class="form-group col-md-7">
                        <label>Sayfa İçeriği</label>
                        <textarea name="sayfa_yazi" class="ckeditor"><?php echo $sayfacek['sayfa_yazi']; ?></textarea>
                    </div>

                    <div class="form-group col-md-5">
                        <label>Sayfa Sırası</label>
                        <input class="form-control" type="number" name="sayfa_sira" value="<?php echo $sayfacek['sayfa_sira']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Ana Sayfada Göster</label>
                        <select name="sayfa_anasayfa" class="form-control">

                            <?php 
                            if ($sayfacek['sayfa_anasayfa']==0) { ?>
                            <option value="0">Hayır</option>
                            <option value="1">Evet</option>
                            <?php } 
                            elseif($sayfacek['sayfa_anasayfa']==1) { ?>
                            <option value="1">Evet</option>
                            <option value="0">Hayır</option> 
                            <?php } ?>


                        </select>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-3">
                            <input style="width:100%" class="btn btn-success" type="submit" name="sayfaduzenle" value="Sayfa Düzenle">
                        </div>
                    </div>


                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>