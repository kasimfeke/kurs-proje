<?php
include 'header.php';
include 'sidebar.php';
?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SLİDER EKLEME ALANI</h1>

                
                <?php 

                if ($_GET['durum']=="ok") { ?>
                
                <h1 style="color:green;" class="page-subhead-line">Slider başarı ile eklendi.</h1>

                <?php }

                elseif ($_GET['durum']=="no") { ?>
                
                <h1 style="color:red;" class="page-subhead-line">Slider eklenemedi.</h1>

                <?php }

                else
                    { ?>
                        <h1 class="page-subhead-line">Sitenize slider ekliyorsunuz..</h1>
                        <?php }

                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->


                <form action="netting/islem.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group col-md-5">
                        <label>Slider Adı</label>
                        <input class="form-control" type="text" name="slider_ad" placeholder="Slider Adını Giriniz" required="">
                    </div>

                    <div class="form-group col-md-7">
                        <label>Slider URL</label>
                        <input class="form-control" type="text" name="slider_url" placeholder="Slider yönlendirmek için link giriniz">
                    </div>

                    <div class="form-group col-md-5">
                        <label>Slider Sırası</label>
                        <input class="form-control" type="number" name="slider_sira" placeholder="Slider Sırası Giriniz" required="">
                    </div>

                    <div class="form-group col-md-5">
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <b><span class="fileupload-new">Resim seç</span></b>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="slidegorsel">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-3">
                            <input style="width:100%" class="btn btn-success" type="submit" name="sliderkaydet" value="Kaydet">
                        </div>
                    </div>

                    

                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>