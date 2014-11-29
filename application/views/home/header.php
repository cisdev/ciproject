<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<!-- some meta tags, important for SEO"--> 
    <meta name="description" content="put a short description in here" />
    <meta name="keywords" content="put your important keywords in here" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title>Home-Devsharma</title>
			
            
            <link rel="stylesheet" href="<?php echo CSS_PATH ?>inuit.css" />
            <link rel="stylesheet" href="<?php echo CSS_PATH ?>fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="<?php echo CSS_PATH ?>eve-styles.css" />
	    <link rel="stylesheet" href="<?php echo CSS_PATH ?>custom.css" />
            
            
            <script src="<?php echo JS_PATH ?>respond-min.js" type="text/javascript"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
			<script src="<?php echo JS_PATH ?>jquery.flexslider-min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="<?php echo CSS_PATH ?>flexslider.css" />
            
            <script type="text/javascript">
				  $(window).load(function() {
					$('.flexslider').flexslider({
						  animation: "slide",/*<!--you can also choose fade here-->*/
						  directionNav: false,/*<!--Attention: if you choose true here, the nav-buttons will also appear in the ticker! -->*/
						  keyboardNav: true,
						  mousewheel: true
					});
				  });
	    </script>
               
                    <!--Hide the hr img because of ugly borders in IE7. You can change the color of border-top to display a line -->
                    <!--[if lte IE 7]>

                        <style>
                    		hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }
                            .grid-4{ width:22% }
                        </style>
                    <![endif]-->

</head>
<!--===============================================================  Logo, social and menu =====================================================================================--> 

<body>
	<div class="wrapper">	
                    <a href="index.html" id="logo"><img src="<?php echo IMG_PATH ?>logo.png" alt="something" />
                      <h1 class="accessibility">ResponseEve, a responsive template by SiGa</h1></a>
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in.
                       Dont´t forget to place your links -->
                    <div class="social">
                    <a href="http://www.facebook.com/profile.php?id=100001520859552" title="facebook"><img src="<?php echo IMG_PATH ?>facebook.png" width="20" height="20" alt="facebook"></a>
                    <a href="http://twitter.com/#!/sg_layout" title="twitter"><img src="<?php echo IMG_PATH ?>twitter.png" width="20" height="20" alt="twitter"></a>
                    <a href="#" title="linkedin"><img src="<?php echo IMG_PATH ?>linkedin.png" width="20" height="20" alt="linkedin"></a>
                    <a href="#" title="vcard"><img src="<?php echo IMG_PATH ?>vcard.png" width="20" height="20" alt="vcard"></a>
                    <a href="#" title="picasa"><img src="<?php echo IMG_PATH ?>picasa.png" width="20" height="20" alt="picasa"></a>
                    </div>
                 
                    
                    <ul id="nav" class="main">
                        <li><a href="http://localhost/ci_demo/" class="active">Home</a></li>
                        <li><a href="http://localhost/ci_demo/index.php/welcome/subpage">Subpage</a></li>
                	
                        <li><a href="http://localhost/ci_demo/index.php/welcome/contact">Contact</a></li>
                    </ul>
                    
            
        </div>
	
<!--end of wrapper div-->    
<div class="clear"></div> 