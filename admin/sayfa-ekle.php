<?php
include 'header.php';
include 'sidebar.php';
?>

<head><script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script></head>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SAYFA EKLEME ALANI</h1>

                
                <?php 

                if ($_GET['durum']=="ok") { ?>
                
                <h1 style="color:green;" class="page-subhead-line">Sayfa başarı ile eklendi.</h1>

                <?php }

                elseif ($_GET['durum']=="no") { ?>
                
                <h1 style="color:red;" class="page-subhead-line">Sayfa eklenemedi.</h1>

                <?php }

                else
                    { ?>
                        <h1 class="page-subhead-line">Sitenize sayfa ekliyorsunuz..</h1>
                        <?php }

                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->


                <form action="netting/islem.php" method="POST">

                    <div class="form-group col-md-5">
                        <label>Sayfa Adı</label>
                        <input class="form-control" type="text" name="sayfa_ad" placeholder="Sayfa Adı Giriniz">
                    </div>

                    <div class="form-group col-md-7">
                        <label>Sayfa İçeriği</label>
                        <textarea name="sayfa_yazi" class="ckeditor"></textarea>
                    </div>

                    <div class="form-group col-md-5">
                        <label>Sayfa Sırası</label>
                        <input class="form-control" type="number" name="sayfa_sira" placeholder="Sayfa Sırasını Giriniz">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Ana Sayfada Göster</label>
                        <select name="sayfa_anasayfa" class="form-control">
                            <option value="0">Hayır</option>
                            <option value="1">Evet</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-3">
                            <input style="width:100%" class="btn btn-success" type="submit" name="sayfakaydet" value="Sayfa Kaydet">
                        </div>
                    </div>


                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>