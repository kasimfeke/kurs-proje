<?php include 'admin/netting/connect.php';

$ayarsor=mysql_query("select * from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor);

$hizmetsor=mysql_query("select * from hizmetler");
$hizmetcek=mysql_fetch_assoc($hizmetsor);

$haksor=mysql_query("select * from hakkimizda");
$hakcek=mysql_fetch_assoc($haksor);

 ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $ayarcek['ayar_title']; ?></title>

	<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
			});
		});

	</script>
	
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="<?php echo $ayarcek['ayar_logo']; ?>" class="img-responsive" alt=""></a>
			</div>
			
			<div class="head-nav">
				<span class="menu"> </span>
				<ul class="cl-effect-1">

					<?php 
					$menusorgu=mysql_query("select * from menuler");
					while ($menucek=mysql_fetch_assoc($menusorgu)) {
						?>

						<li class="active"><a href="<?php echo $menucek['menu_url']; ?>"><?php echo $menucek['menu_ad']; ?></a></li>

						<?php } ?>
						
						<div class="clearfix"></div>
					</ul>
				</div>
				<!-- script-for-nav -->
				<script>
					$( "span.menu" ).click(function() {
						$( ".head-nav ul" ).slideToggle(300, function() {
									// Animation complete.
								});
					});
				</script>
				<!-- script-for-nav -->
				


				<div class="clearfix"> </div>
			</div>
		</div>