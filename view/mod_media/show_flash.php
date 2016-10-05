<?php
if (!defined('IN_CONTEXT')) die('access violation error!');
$act =& ParamHolder::get('_m');
$act1 =& ParamHolder::get('sc_id');
?>

<!-- <div class="flash_image">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0">
        <param name="movie" value="<?php echo $flv_src; ?>" />
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <embed src="<?php echo $flv_src; ?>"<?php echo $str_flv_width.$str_flv_height; ?> quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
    </object>
</div> -->



<!-- banner -->
	<div id="home" class="banner a-banner">
		<!-- container -->
		<div class="container">
			<div class="header">
				<div class="head-logo">
					<a href="index.html"><img src="images/logo2.png" alt="" /></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom <?php if($act==""){echo "active";} ?>"><a href="index.php">Home<i><img src="images/nav-but1.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom <?php if($act1=="2"){echo "active";} ?>"><a href="index.php?_m=mod_static&_a=view&sc_id=2">About<i><img src="images/nav-but2.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom <?php if($act=="mod_product"){echo "active";} ?>"><a href="index.php?_m=mod_product&_a=prdlist">Services<i><img src="images/nav-but3.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom <?php if($act=="mod_article"){echo "active";} ?>"><a href="index.php?_m=mod_article&_a=fullist">News<i><img src="images/nav-but4.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom <?php if($act1=="1"){echo "active";} ?>"><a href="index.php?_m=mod_static&_a=view&sc_id=1">Mail Us<i><img src="images/nav-but5.png" alt=""/></i></a></li>
						<div class="clearfix"> </div>
					</ul>
					<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<?php
if ($showtitle) {
	echo '<div class="list_bot"></div><div class="blankbar"></div>';
}
?>