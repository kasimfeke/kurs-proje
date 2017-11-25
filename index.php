<?php include 'header.php'; ?>
<div class="container">
	<div class="col-md-9 bann-right">
		<!-- banner -->
		<div class="banner">		
			<div class="header-slider">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider">
							<?php 
							$slidersor=mysql_query("select * from slider order by slider_sira DESC");
							while ($slidercek=mysql_fetch_assoc($slidersor)) {
								?>
								<li><img src="uploads/<?php echo $slidercek['slider_resim_yol']; ?>" class="img-responsive" alt="uploads/<?php echo $slidercek['slider_ad']; ?>"></li>
								<?php } ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- banner -->	
			<!-- nam-matis -->
			<?php 
			$sayfasorgu=mysql_query("select * from sayfalar where sayfa_anasayfa='1' order by sayfa_sira ASC");
			while ($sayfacek=mysql_fetch_assoc($sayfasorgu)) { ?>
			<div class="nam-matis">
				<div class="nam-matis-top">
					<div class="col-md-6 nam-matis-1">
						<h3><a href="single.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><?php echo $sayfacek['sayfa_ad']; ?></a></h3>
						<p><?php echo substr($sayfacek['sayfa_yazi'],0,265); ?></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php } ?>
			<!-- nam-matis -->	
		</div>
		<?php include 'sidebar.php'; ?>
		<div class="clearfix"> </div>
	</div>
	<div class="footer">
		<?php include 'footer.php'; ?>
	</div>