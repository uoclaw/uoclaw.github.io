<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/cn-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

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
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-cn.css">
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
<?php virtual("/assets/inc/section-header-cn.html"); ?>
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
	<?php virtual("/assets/inc/nav-cn.html"); ?>
	
	<!-- InstanceEndEditable -->
</div>

<div id="main-content">
<?php 
echo "<h4 align=right>";
echo "<a href=", str_replace("/chi/","/eng/",$_SERVER["PHP_SELF"]),">English</a> " ;
echo "<a href=", str_replace("/chi/","/fra/",$_SERVER["PHP_SELF"]),">Français</a> " ;
echo "<a href=", str_replace("/chi/","/esp/",$_SERVER["PHP_SELF"]),">Español</a> " ;
echo "<a href=", str_replace("/chi/","/rus/",$_SERVER["PHP_SELF"]),">Русский</a> " ;
echo "<a href=", str_replace("/chi/","/ara/",$_SERVER["PHP_SELF"]),">عربي</a> " ;
echo "</h4><hr>";
?>
	<!-- InstanceBeginEditable name="mainContent" -->
	<map name="moy-orient">
      <area shape=rect alt="CYPRUS" href="../../sys-juri/index-alpha.php#CYPRUS" coords="57,114,122,134">
      <area shape=rect alt="IRAN" href="../../sys-juri/index-alpha.php#IRAN" coords="332,139,390,173">
      <area shape=rect alt="IRAQ" href="../../sys-juri/index-alpha.php#IRAQ" coords="226,135,287,171">
      <area shape=rect alt="ISRAEL" href="../../sys-juri/index-alpha.php#ISRAEL" coords="90,165,145,180">
      <area shape=rect alt="JORDAN" href="../../sys-juri/index-alpha.php#JORDAN" coords="158,161,223,181">
      <area shape=rect alt="KUWAIT" href="../../sys-juri/index-alpha.php#KUWAIT" coords="256,183,324,210">
      <area shape=rect alt="LEBANON" href="../../sys-juri/index-alpha.php#LEBANON" coords="118,134,160,152">
      <area shape=rect alt="OMAN" href="../../sys-juri/index-alpha.php#OMAN" coords="411,340,471,365">
      <area shape=rect alt="QATAR" href="../../sys-juri/index-alpha.php#QATAR" coords="360,261,425,276">
      <area shape=rect alt="SAUDI_ARABIA" href="../../sys-juri/index-alpha.php#SAUDI_ARABIA" coords="228,264,342,310">
      <area shape=rect alt="SYRIA" href="../../sys-juri/index-alpha.php#SYRIA" coords="162,113,224,142">
      <area shape=rect alt="TURKEY" href="../../sys-juri/index-alpha.php#TURKEY" coords="117,50,193,83">
      <area shape=rect alt="UNITED_ARAB_EMIRATES" href="../../sys-juri/index-alpha.php#UNITED_ARAB_EMIRATES" coords="361,281,459,301">
      <area shape=rect alt="YEMEN" href="../../sys-juri/index-alpha.php#YEMEN" coords="327,394,397,419">
	  </map>
	<h2><strong>中东地区</strong></h2>
	<p><img usemap="#moy-orient" src="../../../images/chi/rep-geo/moy-orient.jpg"></p>
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
