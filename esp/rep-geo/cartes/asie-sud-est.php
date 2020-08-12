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
	<h2>Asia del sur-este</h2>
	<p><img usemap="#south-east-asia" src="../../../images/esp/rep-geo/asie-sud-est.jpg">
	  <map name="south-east-asia">
        <area shape=rect alt="BRUNEI" href="../../sys-juri/index-alpha.php#BRUNEI" coords="284,232,334,256">
        <area shape=rect alt="CAMBODIA" href="../../sys-juri/index-alpha.php#CAMBODIA" coords="174,170,239,190">
        <area shape=rect alt="GUAM" href="../../sys-juri/index-alpha.php#GUAM" coords="466,52,519,72">
        <area shape=rect alt="INDONESIA" href="../../sys-juri/index-alpha.php#INDONESIA" coords="67,291,141,313">
        <area shape=rect alt="LAOS" href="../../sys-juri/index-alpha.php#LAOS" coords="154,94,191,111">
        <area shape=rect alt="MALAYSIA" href="../../sys-juri/index-alpha.php#MALAYSIA" coords="198,245,255,273">
        <area shape=rect alt="MARIANA" href="../../sys-juri/index-alpha.php#MARIANA" coords="436,2,523,23">
        <area shape=rect alt="MICRONESIA" href="../../sys-juri/index-alpha.php#MICRONESIA" coords="456,75,527,94">
        <area shape=rect alt="MYANMAR" href="../../sys-juri/index-alpha.php#MYANMAR" coords="62,71,137,93">
        <area shape=rect alt="PALAU" href="../../sys-juri/index-alpha.php#PALAU" coords="449,211,499,236">
        <area shape=rect alt="PHILIPPINES" href="../../sys-juri/index-alpha.php#PHILIPPINES" coords="425,181,500,203">
        <area shape=rect alt="SINGAPORE" href="../../sys-juri/index-alpha.php#SINGAPORE" coords="195,309,270,336">
        <area shape=rect alt="THAILAND" href="../../sys-juri/index-alpha.php#THAILAND" coords="139,136,200,158">
        <area shape=rect alt="VIETNAM" href="../../sys-juri/index-alpha.php#VIETNAM" coords="215,105,271,125">
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
