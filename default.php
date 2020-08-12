<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr"><!-- InstanceBegin template="/Templates/fr-home-page.dwt" codeOutsideHTMLIsLocked="false" -->

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
-->
</script><!-- /page variables -->
<style type="text/css">
<!--
.Style1 {
	font-size: 32px;
	font-weight: bold;
}
-->
</style>
<!-- InstanceEndEditable -->
</head>

<body class="fr">

<div id="main-container" class="content-page">
<!-- InstanceBeginEditable name="pageLinks" -->
<ul id="page-links">
	<li><a id="skip-to-content" href="#main-content">Skip to content</a></li>
	<li><a id="skip-to-localnav" href="#local-nav">Skip to section links</a></li>
	<li><a id="ch-lang-url" href="#" rel="alternate" lang="fr" hreflang="fr">Français</a></li>
	<li><a id="section-home" href="#">Return to the home page</a></li>
</ul>
<!-- /#page-links -->
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


<div id="main-content">

	<!-- InstanceBeginEditable name="mainContent" -->
		<table>
	<tr>
		<td colspan="2" align="center"><a href="http://www.juriglobe.ca/index.php">Retour à Juriglobe >></a>
		</td>
		</tr>
	<tr>
	<td><h1><a href="/eng/index.php">English</a></h1>
	  <h1><A href="/esp/index.php">Español</A></h1>
	  <h1><A href="/chi/index.php">中文</A></h1></td>
	<td><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="550" height="550" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="logo.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="logo.swf" width="550" height="550" align="middle" quality="high" bgcolor="#ffffff" allowScriptAccess="sameDomain"  type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object></td>
	<td><h1><A href="/fra/index.php">Français</A> </h1>
	  
	  <p> <A href="/ara/index.php" class="Style1">عربي</A></p>
	  <h1><A href="/rus/index.php">Русский</A> </h1></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td><div align="center">
	    <?php $count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
?>
	    <span id="counter"><? echo $hits[0]; ?></span> visits /visiteurs<br>
	    (Depuis mars 2009-Since march 2009)</div></td>
	  <td>&nbsp;</td>
	  </tr>
	</table>
	
	<!-- InstanceEndEditable --></div>

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
