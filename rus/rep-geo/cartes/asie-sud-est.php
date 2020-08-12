<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/rs-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

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
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-rs.css">
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

<body class="en">

<div id="main-container" class="content-page">
<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="#main-content">Skip to content</a></li>
		<li><a id="skip-to-localnav" href="#local-nav">Skip to links</a></li>
		<li><a id="ch-lang-url" href="http://www.juriglobe.uottawa.ca/index.php" rel="alternate" lang="fr" hreflang="fr">Français</a></li>
		<li><a id="section-home" href="http://www.juriglobe.uottawa.ca/rus/index.php">Return to the home page</a></li>
	</ul>
<!-- InstanceEndEditable -->
	<!-- /#page-links -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-en.html"); ?>

<div id="section-container">

<!-- InstanceBeginEditable name="sectionHeader" -->
<?php virtual("/assets/inc/section-header-en.html"); ?>
<!-- InstanceEndEditable -->

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
	<?php virtual("/assets/inc/nav-rs.html"); ?>
	
	<!-- InstanceEndEditable -->
</div>

<div id="main-content">
<?php 
echo "<h4 align=right>";
echo "<a href=", str_replace("/rus/","/eng/",$_SERVER["PHP_SELF"]),">English</a> " ;
echo "<a href=", str_replace("/rus/","/fra/",$_SERVER["PHP_SELF"]),">Français</a> " ;
echo "<a href=", str_replace("/rus/","/esp/",$_SERVER["PHP_SELF"]),">Español</a> " ;
echo "<a href=", str_replace("/rus/","/chi/",$_SERVER["PHP_SELF"]),">中文</a> " ;
echo "<a href=", str_replace("/rus/","/ara/",$_SERVER["PHP_SELF"]),">عربي</a> " ;
echo "</h4><hr>"; 
?>
	<!-- InstanceBeginEditable name="mainContent" -->
	<h2>Юго-Восточная Азия</h2>
	<map name="south-east-asia">
        <area shape=rect alt="BRUNEI" href="../../sys-juri/index-alpha.php#BRUNEI" coords="275,276,341,303">
        <area shape=rect alt="CAMBODIA" href="../../sys-juri/index-alpha.php#CAMBODIA" coords="174,183,252,210">
        <area shape=rect alt="GUAM" href="../../sys-juri/index-alpha.php#GUAM" coords="469,60,522,80">
        <area shape=rect alt="INDONESIA" href="../../sys-juri/index-alpha.php#INDONESIA" coords="63,345,147,371">
        <area shape=rect alt="LAOS" href="../../sys-juri/index-alpha.php#LAOS" coords="148,110,193,133">
        <area shape=rect alt="MALAYSIA" href="../../sys-juri/index-alpha.php#MALAYSIA" coords="194,287,274,315">
        <area shape=rect alt="MARIANA" href="../../sys-juri/index-alpha.php#MARIANA" coords="311,1,545,29">
        <area shape=rect alt="MICRONESIA" href="../../sys-juri/index-alpha.php#MICRONESIA" coords="400,79,545,110">
        <area shape=rect alt="MYANMAR" href="../../sys-juri/index-alpha.php#MYANMAR" coords="65,88,127,110">
        <area shape=rect alt="PALAU" href="../../sys-juri/index-alpha.php#PALAU" coords="452,250,502,275">
        <area shape=rect alt="PHILIPPINES" href="../../sys-juri/index-alpha.php#PHILIPPINES" coords="432,204,528,231">
        <area shape=rect alt="SINGAPORE" href="../../sys-juri/index-alpha.php#SINGAPORE" coords="200,356,275,383">
        <area shape=rect alt="THAILAND" href="../../sys-juri/index-alpha.php#THAILAND" coords="130,158,199,175">
        <area shape=rect alt="VIETNAM" href="../../sys-juri/index-alpha.php#VIETNAM" coords="209,125,278,153">
      </map>
	<p><img usemap="#south-east-asia" src="../../../images/rus/rep-geo/asie-sud-est.jpg"> </p>
	<!-- InstanceEndEditable -->
</div>

<!-- /#main-content -->
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
