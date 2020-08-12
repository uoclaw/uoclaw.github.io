<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/en-wide-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

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
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-en.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/main.css">

<!-- include page tools -->
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/print.js"></script>
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/send-to-friend.js"></script>

<!-- InstanceBeginEditable name="head" -->
<!-- page variables -->
<script type="text/javascript">
<!--
var expandNavSection = "section";
-->
</script><!-- /page variables -->

<!-- InstanceEndEditable -->

</head>

<body class="en">

<div id="main-container" class="wide-content-page has-sidebar">
<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="#main-content">Skip to content</a></li>
		<li><a id="skip-to-localnav" href="#local-nav">Skip to links</a></li>
		<li><a id="ch-lang-url" href="http://www.juriglobe.uottawa.ca/index.php" rel="alternate" lang="fr" hreflang="fr">Français</a></li>
		<li><a id="section-home" href="http://www.juriglobe.uottawa.ca/eng/index.php">Return to the home page</a></li>
	</ul>
<!-- InstanceEndEditable -->

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

<div id="main-content">
	<?php 
	echo "<h4 align=right>";
	echo "<a href=", str_replace("/eng/","/fra/",$_SERVER["PHP_SELF"]),">Français</a> " ;
	echo "<a href=", str_replace("/eng/","/esp/",$_SERVER["PHP_SELF"]),">Español</a> " ;
	echo "<a href=", str_replace("/eng/","/rus/",$_SERVER["PHP_SELF"]),">Русский</a> " ;
	echo "<a href=", str_replace("/eng/","/chi/",$_SERVER["PHP_SELF"]),">中文</a> " ;
	echo "<a href=", str_replace("/eng/","/ara/",$_SERVER["PHP_SELF"]),">عربي</a> " ;
	echo "</h4>";
	?>
	<!-- InstanceBeginEditable name="mainContent" -->
	<div class="return"><a href="../index.php">Return to Previous Page</a></div>
	<h2>WORLD MAP</h2>
	<p><img usemap="#monde" src="../../../images/eng/rep-geo/monde.jpg" width="700" height="469"></p>
	<map name="monde">
	<area shape=rect alt="Civil Law" href="../../sys-juri/class-poli/droit-civil.php" coords="20,25,145,65">
	  <area shape=rect alt="Common Law" href="../../sys-juri/class-poli/common-law.php" coords="155,25,280,65">
	  <area shape=rect alt="Muslim Law" href="../../sys-juri/class-poli/droit-musulman.php" coords="285,25,415,65">
	  <area shape=rect alt="Customary Law" href="../../sys-juri/class-poli/droit-coutumier.php" coords="420,25,545,65">
	  <area shape=rect alt="Mixed Sytems" href="../../sys-juri/class-poli/sys-mixtes.php" coords="550,25,675,65">
	  <area shape=rect alt="North America" href="amer-nord.php" coords="101,154,167,213">
	  <area shape=rect alt="South America" href="amer-sud.php" coords="177,287,243,346">
	  <area shape=rect alt="Oceania" href="oceanie.php" coords="550,332,616,391">
	  <area shape=rect alt="Africa" href="afrique.php" coords="327,246,393,305">
	  <area shape=rect alt="Middle East" href="moy-orient.php" coords="378,197,458,251">
	  <area shape=rect alt="Southeast Asia" href="asie-sud-est.php" coords="475,285,541,344">
	  <area shape=rect alt="Europe" href="europe.php" coords="324,153,390,212">
	  <area shape=rect alt="Central America" href="amer-cent.php" coords="61,236,127,295">
	  <area shape=rect alt="Carribean" href="antilles.php" coords="158,216,243,274">
	  <area shape=rect alt="Asia" href="asie.php" coords="445,139,511,198">
	  </map>
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
