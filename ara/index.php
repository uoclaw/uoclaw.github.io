<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/ar-section-home.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Language" content="en-CA">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="metaInformation" -->
<meta name="keywords" content="">
<meta name="description" content="">
<!-- InstanceEndEditable -->

<meta name="author" content="">
<meta name="copyright" content="&copy; University of Ottawa">

<?php include("http://web5.uottawa.ca/assets-templates/inc/head.html"); ?>

<!-- theme -->
<link type="text/css" rel="stylesheet" media="screen" href="http://web5.uottawa.ca/assets-templates/themes/08/main.css">

<!-- site-specific style sheet -->
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-ar.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/main.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/home-page.css">

<!-- include page tools -->
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/print.js"></script>
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/send-to-friend.js"></script>

<!-- InstanceBeginEditable name="head" -->
<!-- page variables -->
<script type="text/javascript">
<!--

-->
</script><!-- /page variables -->

<!-- InstanceEndEditable -->
</head>

<body class="en">

<div id="main-container" class="section-home landing-page has-sidebar">
	<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="#main-content">Skip to content</a></li>
		<li><a id="skip-to-localnav" href="#local-nav">Skip to links</a></li>
		<li><a id="ch-lang-url" href="http://www.juriglobe.uottawa.ca/index.php" rel="alternate" lang="fr" hreflang="fr">Français</a></li>
	</ul>
	<!-- /#page-links -->
	<!-- InstanceEndEditable -->
	<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-en.html"); ?>
	
	<div id="section-container">
		
	<div id="section-header">
		<!-- InstanceBeginEditable name="sectionHeader" -->
		<h1 id="section-title"><span>Section Header</span></h1>
		<!-- InstanceEndEditable -->
	</div>
	<!-- /#section-header -->
		
	<div id="page-tools">
		
	<div id="quickpicks">
	<ul>
		<?php virtual("/assets/inc/quickpicks-en.html"); ?>
		<?php include("http://web5.uottawa.ca/assets-templates/inc/quickpicks-en.html"); ?>
	</ul>
	</div><!-- /#quickpicks -->
	</div>
	<!-- /#page-tools -->
		
		
	<div id="section-details">
		<!-- InstanceBeginEditable name="Navigation" -->
		<?php virtual("/assets/inc/nav-ar.html"); ?>
		
		<!-- InstanceEndEditable -->
	</div>
	
	<div id="main-content">
	<?php 
echo "<h4 align=right>";
echo "<a href=", str_replace("/ara/","/eng/",$_SERVER["PHP_SELF"]),">English</a> " ;
echo "<a href=", str_replace("/ara/","/fra/",$_SERVER["PHP_SELF"]),">Français</a> " ;
echo "<a href=", str_replace("/ara/","/esp/",$_SERVER["PHP_SELF"]),">Español</a> " ;
echo "<a href=", str_replace("/ara/","/rus/",$_SERVER["PHP_SELF"]),">Русский</a> " ;
echo "<a href=", str_replace("/ara/","/chi/",$_SERVER["PHP_SELF"]),">中文</a> " ;
echo "</h4><hr>";
?>
<big><big>
		<!-- InstanceBeginEditable name="mainContent" -->
		 <p><img usemap="#monde" src="../images/ara/rep-geo/mondesm.jpg" width="550"></p>
		  <map name="monde">
		  <area shape=rect alt="Civil Law" href="sys-juri/class-poli/droit-civil.php" coords="15,23,115,53">
	  <area shape=rect alt="Common Law" href="sys-juri/class-poli/common-law.php" coords="120,22,220,52">
	  <area shape=rect alt="Muslim Law" href="sys-juri/class-poli/droit-musulman.php" coords="224,23,324,53">
	  <area shape=rect alt="Customary Law" href="sys-juri/class-poli/droit-coutumier.php" coords="330,23,430,53">
	  <area shape=rect alt="Mixed Sytems" href="sys-juri/class-poli/sys-mixtes.php" coords="434,22,534,52">
	  <area shape=rect alt="North America" href="rep-geo/cartes/amer-nord.php" coords="74,118,140,177">
	  <area shape=rect alt="South America" href="rep-geo/cartes/amer-sud.php" coords="132,225,198,284">
	  <area shape=rect alt="Oceania" href="rep-geo/cartes/oceanie.php" coords="426,257,492,316">
	  <area shape=rect alt="Africa" href="rep-geo/cartes/afrique.php" coords="237,170,303,229">
	  <area shape=rect alt="Middle East" href="rep-geo/cartes/moy-orient.php" coords="304,148,370,207">
	  <area shape=rect alt="Southeast Asia" href="rep-geo/cartes/asie-sud-est.php" coords="350,205,416,264">
	  <area shape=rect alt="Europe" href="rep-geo/cartes/europe.php" coords="241,109,307,168">
	  <area shape=rect alt="Central America" href="rep-geo/cartes/amer-cent.php" coords="10,156,76,215">
	  <area shape=rect alt="Carribean" href="rep-geo/cartes/antilles.php" coords="123,161,189,220">
	  <area shape=rect alt="Asia" href="rep-geo/cartes/asie.php" coords="347,106,413,165">
	  </map>
		<!-- InstanceEndEditable -->
		</big></big>
	</div>

	<!-- /#main-content -->
		
	<div id="sidebar" class="secondary">
		<!-- InstanceBeginEditable name="sideBar" -->
		
		<!-- InstanceEndEditable -->
	</div>
	<!-- /#sidebar -->
		
	</div><!-- /#section-container -->
	
	<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-en.html"); ?>
	<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-contact-default-en.html"); ?>
	
	<div id="last-updated">
	Last updated: 
<?php echo date ("Y.m.d", getlastmod()) ?>

	</div><!-- /#last-updated -->
	
</div><!-- /#main-container -->

<?php virtual("/assets/inc/beacons-en.html"); ?>

</body>
<!-- InstanceEnd --></html>
