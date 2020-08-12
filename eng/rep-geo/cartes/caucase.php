<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/en-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

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
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-en.css">
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
		<li><a id="section-home" href="http://www.juriglobe.uottawa.ca/eng/index.php">Return to the home page</a></li>
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
	<?php virtual("/assets/inc/nav-en.html"); ?>
	
	<!-- InstanceEndEditable -->
</div>

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
	<map name="caucase">
      <area shape=rect alt="ARMENIA" href="../../sys-juri/index-alpha.php#ARMENIA" coords="10,171,50,186">
      <area shape=rect alt="AZERBAIJAN" href="../../sys-juri/index-alpha.php#AZERBAIJAN" coords="56,182,106,192">
      <area shape=rect alt="GEORGIA" href="../../sys-juri/index-alpha.php#GEORGIA" coords="16,149,56,164">
      <area shape=rect alt="KAZAKHSTAN" href="../../sys-juri/index-alpha.php#KAZAKHSTAN" coords="187,91,262,106">
      <area shape=rect alt="KYRGYZSTAN" href="../../sys-juri/index-alpha.php#KYRGYZSTAN" coords="297,155,357,170">
      <area shape=rect alt="TAJIKISTAN" href="../../sys-juri/index-alpha.php#TAJIKISTAN" coords="271,198,331,213">
      <area shape=rect alt="TURKMENISTAN" href="../../sys-juri/index-alpha.php#TURKMENISTAN" coords="131,201,216,216">
      <area shape=rect alt="UZBEKISTAN" href="../../sys-juri/index-alpha.php#UZBEKISTAN" coords="172,154,242,169">
    </map>

	<h2>Caucasus</h2>
	<p><img usemap="#caucase" src="../../../images/eng/rep-geo/caucasus.jpg" width="432" height="264"></p>
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
