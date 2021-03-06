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
var expandNavSection = "section3";
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
	<h2><a href="rep-sys-juridique.php">Répartition des 192 États membres de l'ONU selon les systèmes juridiques et leurs diverses composantes </a>	  </h2>
	<ul>
	  <li><a href="rep-sys-juridique.php#syst1">Monosystèmes de droit civil </a></li>
	  <li><a href="rep-sys-juridique.php#syst2">Monosystèmes de common law </a></li>
	  <li><a href="rep-sys-juridique.php#syst3">Monosystèmes de droit musulman </a></li>
	  <li><a href="rep-sys-juridique.php#syst4">Monosystèmes de droit coutumier </a></li>
	  <li><a href="rep-sys-juridique.php#syst5">Systèmes mixtes de droit civil et de common law </a></li>
	  <li><a href="rep-sys-juridique.php#syst6">Systèmes mixtes de droit civil et de droit coutumier </a></li>
	  <li><a href="rep-sys-juridique.php#syst7">Systèmes mixtes de droit civil et de droit musulman </a></li>
	  <li><a href="rep-sys-juridique.php#syst8">Systèmes mixtes de common law et de droit musulman </a></li>
	  <li><a href="rep-sys-juridique.php#syst9">Systèmes mixtes de common law et de droit coutumier </a></li>
	  <li><a href="rep-sys-juridique.php#syst10">Systèmes mixtes de common law, de droit musulman et de droit coutumier </a></li>
	  <li><a href="rep-sys-juridique.php#syst11">Systèmes mixtes de droit civil, de droit musulman et de droit coutumier </a></li>
	  <li><a href="rep-sys-juridique.php#syst12">Systèmes mixtes de droit civil, de common law et de droit coutumier </a></li>
	  <li><a href="rep-sys-juridique.php#syst13">Systèmes mixtes de droit musulman, de common law, de droit civil et de droit coutumier </a></li>
	  <li><a href="rep-sys-juridique.php#syst14">Systèmes mixtes de droit civil, de common law, de droit juif et de droit musulman</a></li>
	  <li><a href="rep-sys-juridique.php#syst15">Systèmes mixtes de droit musulman et de droit coutumier </a></li>
	  </ul>
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
