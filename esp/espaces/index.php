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
		<li><a id="section-home" href="">Retourner à la page d'accueil</a></li>
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
	<h2>Espacios lingüísticos internacionales y sistemas jurídicos</h2>
	<ul>
	  <li>Commonwealth
	      <ul>
	        <li><a href="wealth/carte.php">Mapa geográfico de distribución de los miembros</a></li>
	        <li><a href="wealth/commonwealth.php">Índice alfabético de los miembros y sistemas jurídicos correspondientes</a></li>
          </ul>
	    </li>
	  <li>Organisation Internationale de la Francophonie (OIF)
	      <ul>
	        <li><a href="franco/carte.php">Mapa geográfico de distribución de los miembros</a></li>
	        <li><a href="franco/francophonie.php">Índice alfabético de los miembros y sistemas jurídicos correspondientes</a></li>
          </ul>
	    </li>
	  <li> Organización Árabe para la Educación, la Cultura, y las Ciencias (ALECSO)
	      <ul>
	        <li><a href="alecso/carte.php">Mapa geográfico de distribución de los miembros</a></li>
	        <li><a href="alecso/alecso.php">Índice alfabético de los miembros y sistemas jurídicos correspondientes</a></li>
          </ul>
	    </li>
	  <li> Organización de Estados Iberoamericanos para la Educación, la Ciencia y la Cultura (OEI)
	      <ul>
	        <li><a href="oei/carte.php">Mapa geográfico de distribución de los miembros</a></li>
	        <li><a href="oei/oei.php">Índice alfabético de los miembros y sistemas jurídicos correspondientes</a></li>
          </ul>
	    </li>
	  <li>Otros espacios lingüísticos
	      <ul>
	        <li><a href="autres/turksoy.php">Administración Común de las Culturas y Artes Turcos</a> (TURKSOY)</li>
	        <li><a href="autres/cplp.php">Comúnidade dos Países de L&iacute;ngua Portuguesa</a> (CPLP)</li>
	        <li><a href="autres/unilat.php">Unión Latina</a> (UNILAT)</li>
	        <li><a href="autres/trois.php">Tres Espacios Lingüísticos</a> (3EL)</li>
          </ul>
	    </li>
	  <li><a href="biblio.php">Bibliografía</a></li>
	  </ul>
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
