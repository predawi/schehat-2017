<?php
require( dirname( __FILE__ ) . '/functions/_init.php' );
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie lte-ie9 lte-ie8 ie8" lang="fr"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie lte-ie9 ie9" lang="fr"> <![endif]-->
<!--[if !(IE)]><! -->
<html class="fonts-loading no-js" lang="fr"><!--<![endif]-->
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initial-scale=1.0" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Sarah Norrsken</title>

		<!-- Web App favicons from /assets/img/favicons/index_hd.html -->
		<link rel="manifest" href="../assets/img/favicons/manifest.json">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="#ffffff">
		<meta name="application-name" content="BFF">
		<link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon-180x180.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-title" content="BFF">
		<link rel="icon" type="image/png" sizes="228x228" href="../assets/img/favicons/coast-228x228.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="../assets/img/favicons/browserconfig.xml">
		<link rel="yandex-tableau-widget" href="../assets/img/favicons/yandex-browser-manifest.json">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" href="../assets/img/favicons/apple-touch-startup-image-320x460.png">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-640x920.png">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-640x1096.png">
		<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-750x1294.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" href="../assets/img/favicons/apple-touch-startup-image-1182x2208.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" href="../assets/img/favicons/apple-touch-startup-image-1242x2148.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" href="../assets/img/favicons/apple-touch-startup-image-748x1024.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" href="../assets/img/favicons/apple-touch-startup-image-768x1004.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-1496x2048.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" href="../assets/img/favicons/apple-touch-startup-image-1536x2008.png">

		<!-- Standard favicons from /assets/img/favicons/index_sd.html -->
		<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
		<link rel="shortcut icon" href="../assets/img/favicons/favicon.ico">

		<!--[if lte IE 9]>
			<script type="text/javascript" src="../assets/js/vendor_ie/matchmedia-polyfill.js"></script>
			<script type="text/javascript" src="../assets/js/vendor_ie/matchMedia.addListener.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="../assets/js/vendor_ie/html5shiv.min.js"></script>
		<![endif]-->
		<!--[if lte IE 8]>
			<script type="text/javascript" src="../assets/js/vendor_ie/selectivizr.js"></script>
		<![endif]-->

		<style>
			.cssloading__overlay {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background: #fff;
				opacity: 1;
				z-index: 10001;
				transition: opacity .25s ease, z-index .25s ease .5s, width .25s ease .5s, height .25s ease .25s, visibility .25s ease .25s;
			}
		</style>

		<link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
		<noscript>
			<link rel="stylesheet" href="../assets/css/style.css">
		</noscript>

		<script>
		/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
		!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
		/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
		!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);
		</script>

		<!-- Modernizr Custom (JS + SVG detection) -->
		<script type="text/javascript" src="../assets/js/vendor_async/modernizr.custom.min.js"></script>
		<!-- jQuery -->
		<script src="../assets/js/vendor/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<!-- Conversationnal form -->
		<script type="text/javascript" src="https://cf-4053.kxcdn.com/conversational-form/0.9.6/conversational-form.min.js" crossorigin></script>

	</head>
	<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $class; ?>">

		<div class="cssloading__overlay"></div>
		<div id="main" class="container">

			<div class="header__logo">
				<a href="01-home.php" class="header__logo-link">
					<span>Sarah</span>
					<span>Norrsken</span>
				</a>
			</div>

			<nav id="menu" class="menu menu__mobile" role="navigation" tabindex="-1" aria-label="Navigation Principal">
				<div class="container">
					<ul class="sf-menu">
						<li><a href="#" class="link-w-veil" data-nav="work" id="nav-work"><span>Work</span></a></li>
						<li><a href="#" class="link-w-veil" id="back-to-work" id="nav-back-to-work"><span>Back to work</span></a></li>
						<li><a href="#" class="link-w-veil" data-nav="about" id="nav-about"><span>About</span></a></li>
					</ul>
				</div>
			</nav>

			<section id="visual-bg" class="visual-bg">
			</section>

			<main id="main__content" class="main__content" role="main" tabindex="-1" aria-label="Contenu Principal">
