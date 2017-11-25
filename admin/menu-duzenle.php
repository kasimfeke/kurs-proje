<?php
include 'header.php';
include 'sidebar.php';


$menu_id=$_GET['menu_id'];
$menusorgu=mysql_query("select * from menuler where menu_id='$menu_id'");
$menucek=mysql_fetch_assoc($menusorgu);


?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENÜ DÜZENLEME ALANI</h1>

                
                <?php 

                if ($_GET['durum']=="ok") { ?>
                
                <h1 style="color:green;" class="page-subhead-line">Menü başarı ile düzenlendi.</h1>

                <?php }

                elseif ($_GET['durum']=="no") { ?>
                
                <h1 style="color:red;" class="page-subhead-line">Menü düzenlenemedi.</h1>

                <?php }

                else
                    { ?>
                        <h1 class="page-subhead-line">Menü düzenliyorsunuz..</h1>
                        <?php }

                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->


                <form action="netting/islem.php" method="POST">

                    <div class="form-group col-md-5">
                        <label>Menü Adı</label>
                        <input class="form-control" type="text" name="menu_ad" value="<?php echo $menucek['menu_ad']; ?>">
                    </div>

                    <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">

                    <div class="form-group col-md-7">
                        <label>Menü URL</label>
                        <input class="form-control" type="text" name="menu_url" value="<?php echo $menucek['menu_url']; ?>">
                    </div>

                    <div class="form-group col-md-5">
                        <label>Menü Sırası</label>
                        <input class="form-control" type="number" name="menu_sira" value="<?php echo $menucek['menu_sira']; ?>">
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-3">
                            <input style="width:100%" class="btn btn-success" type="submit" name="menuduzenle" value="Düzenle">
                        </div>
                    </div>

                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>