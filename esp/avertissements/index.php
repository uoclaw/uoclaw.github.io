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
	<h2>ADVERTENCIAS</h2>
	<h3>CLÁUSULA DE NO  RESPONSABILIDAD</h3>
	<p>Las informaciones que se encuentran en este sitio  son compiladas, actualizadas periódicamente, y eventualmente corregidas con el  cuidado y la atención requerida. Sin embargo, algunas de ellas son objeto de interpretación  y, a pesar de su propósito, no constituyen un consejo de carácter jurídico o  profesional.</p>
	<p>La Universidad de Ottawa, La Facultad de derecho y su sección de derecho  civil, al igual que los miembros del grupo creador de este sitio, no asumen ninguna  responsabilidad en relación con su contenido.</p>
	<h3>DERECHOS DE  AUTOR</h3>
	<p>Los documentos  contenidos en este sitio son protegidos por el derecho de autor. Su utilización  con fines personales, educativos o de información no comercial, no requiere  ninguna clase de autorización, siempre y cuando se haga mención a la Universidad de Ottawa,  Facultad de derecho, sección de derecho civil, como organismo fuente, seguida  de la dirección electrónica URL pertinente. </p>
	<p>Toda persona  que desee realizar otro tipo de utilización deberá obtener, previamente, una  autorización escrita por parte de las autoridades de la sección de derecho civil  de la Facultad  de derecho de la   Universidad de Ottawa: <a href="mailto:dcivil@uottawa.ca">dcivil@uottawa.ca</a></p>
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
