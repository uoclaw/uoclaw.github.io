<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr"><!-- InstanceBegin template="/Templates/fr-wide-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Language" content="fr-CA">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="metaInformation" -->
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
-->
</script><!-- /page variables -->
<!-- InstanceEndEditable -->

</head>

<body class="fr">

<div id="main-container" class="wide-content-page has-sidebar">
<!-- InstanceBeginEditable name="pageLinks" -->
<ul id="page-links">
	<li><a id="skip-to-content" href="#main-content">Aller au contenu</a></li>
	<li><a id="skip-to-localnav" href="#local-nav">Aller au menu</a></li>
	<li><a id="ch-lang-url" href="#" rel="alternate" lang="en" hreflang="en">English</a></li>
	<li><a id="section-home" href="#">Retourner à la page d'accueil</a></li>
</ul>
<!-- /#page-links -->
<!-- InstanceEndEditable -->

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
	<div class="return"><a href="index.php"> Retourner à la page précédente</a></div>
	<h2>Carte de représentation géographique des 192 États membres de l’ ONU</h2>
	<p><img src="../../images/fra/syst-onu/onu.jpg" width="694" height="400"></p>
	<p><img src="../../images/fra/syst-onu/carre-onu.jpg" width="19" height="19"> États membres</p>
	<p><img src="../../images/fra/syst-onu/cercle-onu.jpg" width="21" height="21"> Non membres des Nations Unies </p>
	<ol>
      <ol>
        <li>Palestine</li>
        <li>Vatican</li>
        <li>Taiwan</li>
      </ol>
	</ol>
<div>
  <p>N.B. Pour une carte  détaillée de la répartition géographique des systèmes juridiques des États  membres de l’O.N.U., voir« <a href="http://www.juriglobe.ca/">www.JuriGlobe.ca</a>»</p>
</div>
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
