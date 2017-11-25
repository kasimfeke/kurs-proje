<?php
ob_start();
session_start();
?>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse" >
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        Hoşgeldin <?php echo $_SESSION['admin_kadi']; ?>
                        <br />
                        <small>Last Login : 2 Weeks Ago </small>
                    </div>
                </div>
            </li>

            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Ana Sayfa</a>
            </li>
            
            <li>
                <a href="ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
            </li>

            <li>
                <a href="menuler.php"><i class="fa fa-dashboard "></i>Menüler</a>
            </li>
            
            <li>
                <a href="slider.php"><i class="fa fa-dashboard "></i>Slider</a>
            </li>
            <li>
                <a href="hizmetler.php"><i class="fa fa-dashboard "></i>Hizmetler</a>
            </li>
            <li>
                <a href="hakkimizda.php"><i class="fa fa-dashboard "></i>Hakkımızda</a>
            </li>
            <li>
                <a href="sayfalar.php"><i class="fa fa-dashboard "></i>Sayfalar</a>
            </li>
        </ul>

    </div>

</nav>