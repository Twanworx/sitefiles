  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
#tabNav {
    display: table;
    table-layout: fixed;
    text-align: center;
    width: 100%;
}
#tabNav li {
    display: table-cell;
    width: 25%;
    height: auto;
    vertical-align: bottom;
}
#tabNav a {
    display: block;
    padding: 25px 10px;
    color: white;
}

/*==== POPUP FOOTER ====*/
body {
	margin: 0;
}
#footerSlideContainer {
	position: fixed;
	bottom:0;
	width: 100%;
}
#footerSlideButton {
	background: #00ccdd;
	height:50px;
	border: none;
	cursor: pointer;
	width: 300px;
	margin: 0 auto;
}
#footerSlideContent {
	width: 100%;
	height: 0px;
	background: #00ccdd;
	color: #CCCCCC;
	font-size: 0.8em;
	border: none;
	font-family: DejaVuSansBook, Sans-Serif;
}
#footerSlideText {
	padding: 15px 10px 25px 25px;
}




	</style>
	
	<script>
	$("button").click(function(){
  $("p").removeClass("intro");
});
	</script>
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://dvwx.co/wp-content/themes/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="http://dvwx.co/wp-content/themes/bootstrap/css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" href="http://dvwx.co/wp-content/themes/bootstrap/css/multilevelmenu.css" />
	<link rel="stylesheet" type="text/css" href="http://dvwx.co/wp-content/themes/bootstrap/css/component.css" />
	<link rel="stylesheet" type="text/css" href="http://dvwx.co/wp-content/themes/bootstrap/css/animations.css" />

		
<link rel="stylesheet" id="contact-form-7-css"  href="http://dvwx.co/wp-content/themes/bootstrap/css/jquery-styles.css" type="text/css" media="all" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

 <div class="navbar navbar-inverse navbar-fixed-top">
 	<div class="navbar-inner">
	 	<div class="container">
	 	<div class="row">
	 	<div class="span6">
	 	<a class="brand" href="#"><img src="http://dvwx.co/wp-content/themes/bootstrap/img/logo.jpg" /></a>
	 	</div>
	 	<div class="span6">
	 	<ul id="tabNav">
		 	<li class="homeTab"><a class="nav-home" href="#home">Home</a></li>
		 	<li class="workTab"><a class="nav-work" href="#work"> Work</a></li>
		 	<li class="servicesTab"><a class="nav-services" href="#services">Services</a></li>
		 	<li class="contactTab"><a class="nav-contact" href="#contact">Contact</a></li>
		</ul>
	 	</div>
	 	</div>
        <!--<div class="nav">
      <ul>
        <li><a class="nav-about" href="#about">About</a></li>
        <li><a class="nav-started" href="#get-started">Get Started</a></li>
        <li><a class="nav-shortcuts" href="#shortcuts-examples">Shortcuts &amp; Examples</a></li>
        <li><a class="nav-docs" href="#docs">Docs</a></li>
      </ul>
    </div>-->
	         <!-- <a class="brand" href="#">Project name</a>-->
		</div>
	</div>
 </div>

  <div class="slidingContent">