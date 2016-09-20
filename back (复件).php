<!DOCTYPE html>
<html lang="en" class="demo2 no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Make your website scroll one page at a time with OnePageScroll.js - 聚合素材网演示页www.juheweb.com</title>
		<meta name="description" content="The plugin will detect your mouse wheel and swipe gestures to determine which way the page should scroll." />
		<meta name="keywords" content="scroller, jquery one page scroll, onepagescroll, animated scrolling" />
		<meta name="author" content="Author for Onextrapixel" />
		<link rel="shortcut icon" id="favicon" href="favicon.png"> 
		<link rel="stylesheet" type="text/css" href="background/default.css" />
		
		<!-- Edit Below -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	    <script type="text/javascript" src="background/jquery.onepage-scroll.js"></script>
	    <link rel="stylesheet" type="text/css" href="background/style.css" />
	    <link rel="stylesheet" type="text/css" href="background/onepage-scroll.css" />
	    <link rel="stylesheet" type="text/css" href="background/elusive-webfont.css" />
	    <script src="../file/js/modernizr.js"></script>
	</head>
	<body class="demo2">
	
  
	<div class="header">
		<h1>Scroll website one page at a time<br>with OnePageScroll.js: Bounce Effect</h1>
	</div>
  
<!-- 	<div class="menu">
		<a href="index.html">Demo 1</a>
		<a class="active" href="back.php">Demo 2</a>
		<a href="index3.html">Demo 3</a>
	</div> -->
	
	<div class="main">
	  <section class="page1">
    </section>

    <section class="page2">
      <div class="page_container">
        <h1>iPhone 5S</h1>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
      </div>
    </section>
    <section class="page3">
      <div class="page_container">
        <h1>Pretty cool eh?</h1>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>
    </section>
	</div>
	<script type="text/javascript">
	    $(".main").onepage_scroll({
	      sectionContainer: "section",
	      easing: "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	    });
  	</script>
		
	</body>
</html>