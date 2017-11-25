<div class="col-md-3 bann-left">
	<!--  <div class="b-search">
		<form>
			<input type="text" value="Ara.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			<input type="submit" value=""> 
		</form>
	</div> -->
	<h3>Son Yazılar</h3>
	<?php 
	$sayfasorgu=mysql_query("select * from sayfalar");
	while ($sayfacek=mysql_fetch_assoc($sayfasorgu)) { ?>
	<div class="blo-top">
		<li><a href="single.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><?php echo $sayfacek['sayfa_ad']; ?></a></li>
	</div>
	<?php } ?>
</div>