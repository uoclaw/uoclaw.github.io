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
	<map name="south-east-asia">
        <area shape=rect alt="BRUNEI" href="../../sys-juri/index-alpha.php#BRUNEI" coords="275,276,325,300">
        <area shape=rect alt="CAMBODIA" href="../../sys-juri/index-alpha.php#CAMBODIA" coords="180,195,245,215">
        <area shape=rect alt="GUAM" href="../../sys-juri/index-alpha.php#GUAM" coords="462,60,515,80">
        <area shape=rect alt="INDONESIA" href="../../sys-juri/index-alpha.php#INDONESIA" coords="82,339,143,362">
        <area shape=rect alt="LAOS" href="../../sys-juri/index-alpha.php#LAOS" coords="148,110,185,127">
        <area shape=rect alt="MALAYSIA" href="../../sys-juri/index-alpha.php#MALAYSIA" coords="193,287,250,315">
        <area shape=rect alt="MARIANA" href="../../sys-juri/index-alpha.php#MARIANA" coords="428,4,515,25">
        <area shape=rect alt="MICRONESIA" href="../../sys-juri/index-alpha.php#MICRONESIA" coords="435,81,545,110">
        <area shape=rect alt="MYANMAR" href="../../sys-juri/index-alpha.php#MYANMAR" coords="65,95,125,110">
        <area shape=rect alt="PALAU" href="../../sys-juri/index-alpha.php#PALAU" coords="440,245,490,270">
        <area shape=rect alt="PHILIPPINES" href="../../sys-juri/index-alpha.php#PHILIPPINES" coords="425,203,500,225">
        <area shape=rect alt="SINGAPORE" href="../../sys-juri/index-alpha.php#SINGAPORE" coords="190,353,265,380">
        <area shape=rect alt="THAILAND" href="../../sys-juri/index-alpha.php#THAILAND" coords="130,160,190,175">
        <area shape=rect alt="VIETNAM" href="../../sys-juri/index-alpha.php#VIETNAM" coords="209,125,277,148">
      </map>
	<h2>Asie du sud-est </h2>
	<p><img usemap="#south-east-asia" src="../../../images/fra/rep-geo/asie-sud-est.jpg" width="543" height="498"></p>
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
