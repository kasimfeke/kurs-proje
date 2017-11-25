<?php include 'header.php';
$sayfa_id=$_GET['sayfa_id'];
$sayfasorgu=mysql_query("select * from sayfalar where sayfa_id='$sayfa_id'");
$sayfacek=mysql_fetch_assoc($sayfasorgu);
?>
<div class="container">
	<div class="content-top">
		<div class="single-top">
			<center><h3 style="font-size:35px; font-weight:bold;"><?php echo $sayfacek['sayfa_ad']; ?></h3></center>

			<p class="sin"><?php echo $sayfacek['sayfa_yazi']; ?></p>
			<div class="artical-links">
				<ul>
					<li><small> </small><span><?php echo $sayfacek['sayfa_tarih']; ?></span></li>
				</ul>
			</div>
		</div>
	</div>
	<?php include 'sidebar.php'; ?>
</div>

<div class="footer">
	<?php include 'footer.php' ?>
</div>