<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr"><!-- InstanceBegin template="/Templates/es-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

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
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-es.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/main.css">

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

<div id="main-container" class="content-page">
<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="#main-content">Espagnol Aller au contenu</a></li>
		<li><a id="skip-to-localnav" href="#local-nav">Aller au menu</a></li>
		<li><a id="ch-lang-url" href="#" rel="alternate" lang="en" hreflang="en">English</a></li>
		<li><a id="section-home" href="#">Retourner à la page d'accueil</a></li>
	</ul>
<!-- InstanceEndEditable -->
	<!-- /#page-links -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-fr.html"); ?>

<div id="section-container">

<!-- InstanceBeginEditable name="sectionHeader" -->
<?php virtual("/assets/inc/section-header-es.html"); ?>
<!-- InstanceEndEditable -->

<div id="page-tools">
<div id="quickpicks">
<ul>
	<?php virtual("/assets/inc/quickpicks-es.html"); ?>
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
	<map name="moy-orient">
	  <area shape=rect alt="BAHRAIN" href="../../sys-juri/index-alpha.php#BAHRAIN" coords="325,206,395,226">
      <area shape=rect alt="CYPRUS" href="../../sys-juri/index-alpha.php#CYPRUS" coords="88,124,130,142">
      <area shape=rect alt="IRAN" href="../../sys-juri/index-alpha.php#IRAN" coords="300,146,345,166">
      <area shape=rect alt="IRAQ" href="../../sys-juri/index-alpha.php#IRAQ" coords="219,132,264,157">
      <area shape=rect alt="ISRAEL" href="../../sys-juri/index-alpha.php#ISRAEL" coords="107,163,162,178">
      <area shape=rect alt="JORDAN" href="../../sys-juri/index-alpha.php#JORDAN" coords="164,152,229,172">
      <area shape=rect alt="KUWAIT" href="../../sys-juri/index-alpha.php#KUWAIT" coords="234,183,304,203">
      <area shape=rect alt="LEBANON" href="../../sys-juri/index-alpha.php#LEBANON" coords="118,136,163,150">
      <area shape=rect alt="OMAN" href="../../sys-juri/index-alpha.php#OMAN" coords="346,288,408,329">
      <area shape=rect alt="QATAR" href="../../sys-juri/index-alpha.php#QATAR" coords="326,231,391,246">
      <area shape=rect alt="SAUDI_ARABIA" href="../../sys-juri/index-alpha.php#SAUDI_ARABIA" coords="207,220,291,273">
      <area shape=rect alt="SYRIA" href="../../sys-juri/index-alpha.php#SYRIA" coords="167,118,217,138">
      <area shape=rect alt="TURKEY" href="../../sys-juri/index-alpha.php#TURKEY" coords="144,78,214,103">
      <area shape=rect alt="UNITED_ARAB_EMIRATES" href="../../sys-juri/index-alpha.php#UNITED_ARAB_EMIRATES" coords="325,250,390,275">
      <area shape=rect alt="YEMEN" href="../../sys-juri/index-alpha.php#YEMEN" coords="277,328,347,353">
	  </map>
	<h2>Medio Oriente</h2>
	<p><img usemap="#moy-orient" src="../../../images/esp/rep-geo/moy-orient.jpg"></p>
	<!-- InstanceEndEditable -->
</div>

<!-- /#main-content -->
</div><!-- /#section-container -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-en.html"); ?>
<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-contact-default-en.html"); ?>

<div id="last-updated">
Dernières modifications :  
<?php echo date ("Y.m.d", getlastmod()) ?>

</div><!-- /#last-updated -->

</div><!-- /#main-container -->

<?php virtual("/assets/inc/beacons-es.html"); ?>

</body>
<!-- InstanceEnd --></html>
