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
	<li><a id="section-home" href="/esp/index.php">Volver a la pagina anterior</a></li>
</ul>

<!-- /#page-links -->
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
	<?php virtual("/assets/inc/contact-es.html"); ?>
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
	
	<h2>C&aacute;ucaso</h2>
	<p><img usemap="#caucase" src="../../../images/esp/rep-geo/caucase.jpg">
	  <map name="caucase">
        <area shape=rect alt="ARMENIA" href="../../sys-juri/index-alpha.php#ARMENIA" coords="6,236,67,261">
        <area shape=rect alt="AZERBAIJAN" href="../../sys-juri/index-alpha.php#AZERBAIJAN" coords="67,234,145,259">
        <area shape=rect alt="GEORGIA" href="../../sys-juri/index-alpha.php#GEORGIA" coords="18,201,86,226">
        <area shape=rect alt="KAZAKHSTAN" href="../../sys-juri/index-alpha.php#KAZAKHSTAN" coords="281,72,377,108">
        <area shape=rect alt="KYRGYZSTAN" href="../../sys-juri/index-alpha.php#KYRGYZSTAN" coords="390,205,490,233">
        <area shape=rect alt="TAJIKISTAN" href="../../sys-juri/index-alpha.php#TAJIKISTAN" coords="358,266,454,291">
        <area shape=rect alt="TURKMENISTAN" href="../../sys-juri/index-alpha.php#TURKMENISTAN" coords="176,254,291,282">
        <area shape=rect alt="UZBEKISTAN" href="../../sys-juri/index-alpha.php#UZBEKISTAN" coords="223,200,312,228">
      </map>
	</p>
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
