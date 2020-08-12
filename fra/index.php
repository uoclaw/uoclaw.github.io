<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr"><!-- InstanceBegin template="/Templates/fr-section-home.dwt" codeOutsideHTMLIsLocked="false" -->

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
<meta name="copyright" content="&copy; Université d'Ottawa">

<?php include("http://web5.uottawa.ca/assets-templates/inc/head.html"); ?>

<!-- theme -->
<link type="text/css" rel="stylesheet" media="screen" href="http://web5.uottawa.ca/assets-templates/themes/08/main.css">

<!-- site-specific style sheet -->
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/main.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/home-page.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-fr.css">

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

<body class="fr">

<div id="main-container" class="section-home landing-page has-sidebar">
	<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="rep-geo/cartes/#main-content">Aller au contenu</a></li>
		<li><a id="skip-to-localnav" href="rep-geo/cartes/#local-nav">Aller au menu</a></li>
		<li><a id="ch-lang-url" href="rep-geo/cartes/#" rel="alternate" lang="eng" hreflang="eng">English</a></li>
	</ul>
	<!-- /#page-links -->
	<!-- InstanceEndEditable -->
	<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-fr.html"); ?>
	
	<div id="section-container">
		
	<div id="section-header">
		<!-- InstanceBeginEditable name="sectionHeader" -->
		<h1 id="section-title"><span>JuriGlobe</span></h1>
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
		<?php virtual("/assets/inc/nav-fr.html"); ?>
		
		<!-- InstanceEndEditable -->
	</div>
	
	<div id="main-content">
<?php 
echo "<h4 align=right>";
echo "<a href=", str_replace("/fra/","/eng/",$_SERVER["PHP_SELF"]),">English</a> " ;
echo "<a href=", str_replace("/fra/","/esp/",$_SERVER["PHP_SELF"]),">Español</a> " ;
echo "<a href=", str_replace("/fra/","/rus/",$_SERVER["PHP_SELF"]),">Русский</a> " ;
echo "<a href=", str_replace("/fra/","/chi/",$_SERVER["PHP_SELF"]),">中文</a> " ;
echo "<a href=", str_replace("/fra/","/ara/",$_SERVER["PHP_SELF"]),">عربي</a> " ;
echo "</h4><hr>";
?>
		<!-- InstanceBeginEditable name="mainContent" -->

		  <p><img usemap="#monde" src="../images/fra/rep-geo/mondesm.jpg" width="550" height="369"></p>
		  <map name="monde">
		  <area shape=rect alt="Civil Law" href="sys-juri/class-poli/droit-civil.php" coords="15,20,115,50">
	  <area shape=rect alt="Common Law" href="sys-juri/class-poli/common-law.php" coords="120,20,220,50">
	  <area shape=rect alt="Muslim Law" href="sys-juri/class-poli/droit-musulman.php" coords="225,20,325,50">
	  <area shape=rect alt="Customary Law" href="sys-juri/class-poli/droit-coutumier.php" coords="330,20,430,50">
	  <area shape=rect alt="Mixed Sytems" href="sys-juri/class-poli/sys-mixtes.php" coords="435,20,535,50">
	  <area shape=rect alt="North America" href="rep-geo/cartes/amer-nord.php" coords="74,118,140,177">
	  <area shape=rect alt="South America" href="rep-geo/cartes/amer-sud.php" coords="133,238,199,297">
	  <area shape=rect alt="Oceania" href="rep-geo/cartes/oceanie.php" coords="428,256,494,315">
	  <area shape=rect alt="Africa" href="rep-geo/cartes/afrique.php" coords="245,189,311,248">
	  <area shape=rect alt="Middle East" href="rep-geo/cartes/moy-orient.php" coords="304,148,370,207">
	  <area shape=rect alt="Southeast Asia" href="rep-geo/cartes/asie-sud-est.php" coords="365,219,431,278">
	  <area shape=rect alt="Europe" href="rep-geo/cartes/europe.php" coords="241,109,307,168">
	  <area shape=rect alt="Central America" href="rep-geo/cartes/amer-cent.php" coords="34,181,100,240">
	  <area shape=rect alt="Carribean" href="rep-geo/cartes/antilles.php" coords="122,172,188,231">
	  <area shape=rect alt="Asia" href="rep-geo/cartes/asie.php" coords="347,106,413,165">
	  </map>

		
		
      <!-- InstanceEndEditable -->
	</div>
	<!-- /#main-content -->
		
	<div id="sidebar" class="secondary">
		<!-- InstanceBeginEditable name="sideBar" --><!-- InstanceEndEditable -->
	</div>
	<!-- /#sidebar -->
		
	</div><!-- /#section-container -->
	
	<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-fr.html"); ?>
	<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-contact-default-fr.html"); ?>
	
	<div id="last-updated">
	Dernières modifications :  
<?php echo date ("Y.m.d", getlastmod()) ?>

	</div><!-- /#last-updated -->
	
</div><!-- /#main-container -->

<?php virtual("/assets/inc/beacons-fr.html"); ?>

</body>
<!-- InstanceEnd --></html>
