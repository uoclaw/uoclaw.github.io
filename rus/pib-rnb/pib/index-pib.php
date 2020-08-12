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
		<li><a id="section-home" href="http://www.juriglobe.uottawa.ca/rus/index.php">Return to the home page</a></li>
	</ul>
<!-- InstanceEndEditable -->
	<!-- /#page-links -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-en.html"); ?>

<div id="section-container">

<!-- InstanceBeginEditable name="sectionHeader" -->
<?php virtual("/assets/inc/section-header-rs.html"); ?>
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

	<h2>Статистические таблицы распределения мирового ВВП по  правовым системам (в долл. США и процентах) </h2>
	<ul type="disc">
      <li><a href="tableau-repartition-pib.php">Распределение мирового ВВП по правовым       системам </a></li>
	  <li><a href="tableau-dcivil-claw.php">Доля мирового ВВП в системах континентального       права и общего права (в долл. США и процентах) </a></li>
	  <li><a href="tableau-musulman.php">Доля мирового ВВП в системах мусульманского       права (в долл. США и процентах) </a></li>
	  <li><a href="tableau-coutumier.php">Доля мирового ВВП в системах обычного права       (в долл. США и процентах) </a></li>
	  <li><a href="tableau-mixtes.php">Доля мирового ВВП в смешанных системах права       (в долл. США и процентах) </a></li>
	  </ul>
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
