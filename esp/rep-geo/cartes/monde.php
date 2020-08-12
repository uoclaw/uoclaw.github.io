<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/es-wide-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Language" content="en-CA">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="metaInformation" -->
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

<div id="main-container" class="wide-content-page has-sidebar">
<!-- InstanceBeginEditable name="pageLinks" -->
<ul id="page-links">
	<li><a id="skip-to-content" href="#main-content">Aller au contenu</a></li>
	<li><a id="skip-to-localnav" href="#local-nav">Aller au menu</a></li>
	<li><a id="ch-lang-url" href="#" rel="alternate" lang="en" hreflang="en">English</a></li>
	<li><a id="section-home" href="/esp/index.php">Volver a la pagina anterior</a></li>
</ul>

<!-- /#page-links -->
<!-- InstanceEndEditable -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-fr.html"); ?>

<div id="section-container">

<!-- InstanceBeginEditable name="sectionHeader" -->
<?php virtual("/assets/inc/section-header-es.html"); ?>
<!-- InstanceEndEditable -->

<div id="page-tools">
<div id="quickpicks">
<ul>
	<?php virtual("/assets/inc/quickpicks-fr.html"); ?>
	<?php include("http://web5.uottawa.ca/assets-templates/inc/quickpicks-fr.html"); ?>
</ul>
</div><!-- /#quickpicks -->
</div>
<!-- /#page-tools -->

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
	<div class="return"><a href="../index.php">Volver a la pagina anterior</a></div>
	<p><img usemap="#monde" src="../../../images/esp/rep-geo/monde.jpg" width="700" height="469"></p>
	<map name="monde">
	<area shape=rect alt="Civil Law" href="../../sys-juri/class-poli/droit-civil.php" coords="20,25,145,65">
	  <area shape=rect alt="Common Law" href="../../sys-juri/class-poli/common-law.php" coords="155,25,280,65">
	  <area shape=rect alt="Muslim Law" href="../../sys-juri/class-poli/droit-musulman.php" coords="285,25,415,65">
	  <area shape=rect alt="Customary Law" href="../../sys-juri/class-poli/droit-coutumier.php" coords="420,25,545,65">
	  <area shape=rect alt="Mixed Sytems" href="../../sys-juri/class-poli/sys-mixtes.php" coords="550,25,675,65">
	  <area shape=rect alt="North America" href="amer-nord.php" coords="108,156,174,215">
	  <area shape=rect alt="South America" href="amer-sud.php" coords="175,308,241,367">
	  <area shape=rect alt="Oceania" href="oceanie.php" coords="550,332,616,391">
	  <area shape=rect alt="Africa" href="afrique.php" coords="327,246,393,305">
	  <area shape=rect alt="Middle East" href="moy-orient.php" coords="379,198,445,257">
	  <area shape=rect alt="Southeast Asia" href="asie-sud-est.php" coords="556,232,622,291">
	  <area shape=rect alt="Europe" href="europe.php" coords="324,153,390,212">
	  <area shape=rect alt="Central America" href="amer-cent.php" coords="51,236,117,295">
	  <area shape=rect alt="Carribean" href="antilles.php" coords="158,216,224,275">
	  <area shape=rect alt="Asia" href="asie.php" coords="438,126,504,185">
	  </map>
	<!-- InstanceEndEditable -->
</div>
<!-- /#main-content -->

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
