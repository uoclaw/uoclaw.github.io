<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr"><!-- InstanceBegin template="/Templates/fr-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

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
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-fr.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/main.css">

<!-- include page tools -->
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/print.js"></script>
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/send-to-friend.js"></script>

<!-- InstanceBeginEditable name="head" -->
<!-- page variables -->
<script type="text/javascript">
<!--
var expandNavSection = "section2";
-->
</script><!-- /page variables -->

<!-- InstanceEndEditable -->
</head>

<body class="fr">

<div id="main-container" class="content-page">
<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="#main-content">Aller au contenu</a></li>
		<li><a id="skip-to-localnav" href="#local-nav">Aller au menu</a></li>
		<li><a id="ch-lang-url" href="#" rel="alternate" lang="en" hreflang="en">English</a></li>
		<li><a id="section-home" href="#">Retourner à la page d'accueil</a></li>
	</ul>
<!-- InstanceEndEditable -->
	<!-- /#page-links -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-fr.html"); ?>

<div id="section-container">

<!-- InstanceBeginEditable name="sectionHeader" -->
<?php virtual("/assets/inc/section-header-fr.html"); ?>
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
	<map name="moy-orient">
      <area shape=rect alt="CYPRUS" href="../../sys-juri/index-alpha.php#CYPRUS" coords="35,125,100,155">
      <area shape=rect alt="IRAN" href="../../sys-juri/index-alpha.php#IRAN" coords="359,162,404,182">
      <area shape=rect alt="IRAQ" href="../../sys-juri/index-alpha.php#IRAQ" coords="227,152,272,177">
      <area shape=rect alt="ISRAEL" href="../../sys-juri/index-alpha.php#ISRAEL" coords="81,179,137,201">
      <area shape=rect alt="JORDAN" href="../../sys-juri/index-alpha.php#JORDAN" coords="153,174,225,197">
      <area shape=rect alt="KUWAIT" href="../../sys-juri/index-alpha.php#KUWAIT" coords="247,216,317,236">
      <area shape=rect alt="LEBANON" href="../../sys-juri/index-alpha.php#LEBANON" coords="94,145,148,171">
      <area shape=rect alt="OMAN" href="../../sys-juri/index-alpha.php#OMAN" coords="395,375,455,400">
      <area shape=rect alt="QATAR" href="../../sys-juri/index-alpha.php#QATAR" coords="376,263,437,293">
      <area shape=rect alt="SAUDI_ARABIA" href="../../sys-juri/index-alpha.php#SAUDI_ARABIA" coords="265,300,345,354">
      <area shape=rect alt="SYRIA" href="../../sys-juri/index-alpha.php#SYRIA" coords="159,126,209,146">
      <area shape=rect alt="TURKEY" href="../../sys-juri/index-alpha.php#TURKEY" coords="70,73,140,98">
      <area shape=rect alt="UNITED_ARAB_EMIRATES" href="../../sys-juri/index-alpha.php#UNITED_ARAB_EMIRATES" coords="376,304,441,329">
      <area shape=rect alt="YEMEN" href="../../sys-juri/index-alpha.php#YEMEN" coords="316,420,386,445">
	  </map>
	<h2>Moyen Orient </h2>
	<p><img usemap="#moy-orient"src="../../../images/fra/rep-geo/moy-orient.jpg" width="535" height="520"></p>
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
