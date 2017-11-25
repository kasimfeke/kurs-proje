<?php include 'header.php' ?>
<div class="container">
	<div class="contact">
		<div class="contact_top">
			<div class="main-head-section">

				<h3>İletişim Bilgileri</h3>
			</div>
			<div class="col-md-8 text-center">
				<form>
					<div class="form_details">
						<address>
							<p>E-mail: <a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"><?php echo $ayarcek['ayar_mail']; ?></a></p>
							<p>Telefon: <?php echo $ayarcek['ayar_telefon']; ?></p>
							<p><?php echo $ayarcek['ayar_adres']; ?></p>
						</address>
					</div>
				</div>
			</form>
		</div>	
		<div class="clearfix"> </div>

	</div>
</div>
</div>
<div class="container">
	<?php include 'footer.php' ?>
</div>