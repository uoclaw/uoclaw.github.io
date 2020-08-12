<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/es-section-home.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Language" content="fr-CA">
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
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-es.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/main.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/home-page.css">

<!-- include page tools -->
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/print.js"></script>
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/send-to-friend.js"></script>

<!-- InstanceBeginEditable name="head" -->
<!-- page variables -->
<script type="text/javascript">
<!--
var expandNavSection = "";
-->
</script><!-- /page variables -->

<!-- InstanceEndEditable -->
</head>

<body class="fr">

<div id="main-container" class="section-home landing-page has-sidebar">
	<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="#main-content">Espagnol Aller au contenu</a></li>
		<li><a id="skip-to-localnav" href="#local-nav">Aller au menu</a></li>
		<li><a id="ch-lang-url" href="#" rel="alternate" lang="en" hreflang="en">English</a></li>
		<li><a id="section-home" href="#">Retourner à la page d'accueil</a></li>
	</ul>
<!-- InstanceEndEditable -->
	<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-fr.html"); ?>
	
	<div id="section-container">
		
	<div id="section-header">
		<!-- InstanceBeginEditable name="sectionHeader" -->
<?php virtual("/assets/inc/section-header-es.html"); ?>
<!-- InstanceEndEditable -->
	</div>
	<!-- /#section-header -->
		
	<div id="page-tools">
		
	<div id="quickpicks">
	<ul>
		<?php virtual("/assets/inc/quickpicks-fr.html"); ?>
		<?php include("http://web5.uottawa.ca/assets-templates/inc/quickpicks-fr.html"); ?>
	</ul>
	</div><!-- /#quickpicks -->
	</div>
	<!-- /#page-tools -->
		
		
	<div id="section-details">
		<!-- InstanceBeginEditable name="Navigation" -->
	<?php virtual("/assets/inc/nav-es.html"); ?>
	
	<!-- InstanceEndEditable -->
	</div>
	
	<div id="main-content">
<?php 
echo "<h4 align=right>";
echo "<a href=", str_replace("/esp/","/eng/",$_SERVER["PHP_SELF"]),">English</a> " ;
echo "<a href=", str_replace("/esp/","/fra/",$_SERVER["PHP_SELF"]),">Français</a> " ;
echo "<a href=", str_replace("/esp/","/rus/",$_SERVER["PHP_SELF"]),">Русский</a> " ;
echo "<a href=", str_replace("/esp/","/chi/",$_SERVER["PHP_SELF"]),">中文</a> " ;
echo "<a href=", str_replace("/esp/","/ara/",$_SERVER["PHP_SELF"]),">عربي</a> " ;
echo "</h4><hr>";
?>
		<!-- InstanceBeginEditable name="mainContent" -->
	 <p><img usemap="#monde" src="../images/esp/rep-geo/mondesm.jpg" width="550" height="369"></p>
		  <map name="monde">
		  <area shape=rect alt="Civil Law" href="sys-juri/class-poli/droit-civil.php" coords="15,20,115,50">
	  <area shape=rect alt="Common Law" href="sys-juri/class-poli/common-law.php" coords="120,20,220,50">
	  <area shape=rect alt="Muslim Law" href="sys-juri/class-poli/droit-musulman.php" coords="225,20,325,50">
	  <area shape=rect alt="Customary Law" href="sys-juri/class-poli/droit-coutumier.php" coords="330,20,430,50">
	  <area shape=rect alt="Mixed Sytems" href="sys-juri/class-poli/sys-mixtes.php" coords="435,20,535,50">
	  <area shape=rect alt="North America" href="rep-geo/cartes/amer-nord.php" coords="76,117,142,176">
	  <area shape=rect alt="South America" href="rep-geo/cartes/amer-sud.php" coords="133,238,199,297">
	  <area shape=rect alt="Oceania" href="rep-geo/cartes/oceanie.php" coords="428,256,494,315">
	  <area shape=rect alt="Africa" href="rep-geo/cartes/afrique.php" coords="255,191,309,236">
	  <area shape=rect alt="Middle East" href="rep-geo/cartes/moy-orient.php" coords="292,156,340,196">
	  <area shape=rect alt="Southeast Asia" href="rep-geo/cartes/asie-sud-est.php" coords="430,177,496,236">
	  <area shape=rect alt="Europe" href="rep-geo/cartes/europe.php" coords="255,112,307,159">
	  <area shape=rect alt="Central America" href="rep-geo/cartes/amer-cent.php" coords="34,173,100,232">
	  <area shape=rect alt="Carribean" href="rep-geo/cartes/antilles.php" coords="115,167,181,226">
	  <area shape=rect alt="Asia" href="rep-geo/cartes/asie.php" coords="334,89,400,148">
	  </map>
	<!-- InstanceEndEditable -->
	</div>
	<!-- /#main-content -->
		
	<div id="sidebar" class="secondary">
		<!-- InstanceBeginEditable name="sideBar" -->
		
		<!-- InstanceEndEditable -->
	</div>
	<!-- /#sidebar -->
		
	</div><!-- /#section-container -->
	
	<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-fr.html"); ?>
	<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-contact-default-fr.html"); ?>
	
	<div id="last-updated">
	Last updated: 
<?php echo date ("Y.m.d", getlastmod()) ?>

	</div><!-- /#last-updated -->
	
</div><!-- /#main-container -->

<?php virtual("/assets/inc/beacons-fr.html"); ?>

</body>
<!-- InstanceEnd --></html>
