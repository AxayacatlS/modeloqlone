<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Modelo 3D | Fosil</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <!--<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>-->
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
</head><!--/head-->

<body>
	<header id="header">      
        <!--<div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">-->
                        <!--<h1><img src="images/logo.png" alt="logo"></h1>-->
                    <!--</a>
                    
                </div>
                <div class="collapse navbar-collapse">-->
                    <!--
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="aboutus2.html">About 2</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                                            
                        <li class="dropdown active"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a class="active" href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>                         
                        <li><a href="shortcodes.html ">Shortcodes</a></li>                    
                    </ul>
                    
                </div>
            </div>
        </div>
    </header>-->
    <!--/#header-->

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Modelo 3D</h1>
                            <p>AR con camara, se necesita marcador HIRO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <style>
                                        #myEmbeddedScene {
                                          width:850px;
                                          height:400px;
                                        }
                                        a-scene {
                                            height: 400px;
                                            width: 850px;
                                        }
                                    </style>
                                    <div id="myEmbeddedScene">
                                    <!--<a href="blogdetails.html"><img src="images/blog/7.jpg" class="img-responsive" alt=""></a>-->
                                     <!--<a-assets>
                                        <a-asset-item id="obj" src="plant.obj"></a-asset-item>
                                    </a-assets>-->
                                    <div class="img-responsive">
                                    <a-scene embedded>
                                    <!--<a-scene embedded arjs>
                                        <a-entity scale=".2 .2 .2"> 
                                        <a-entity gltf-model="plantacolor.glb" scale="2 2 2" rotation="90 0 180" crossOrigin="anonymous"></a-entity>-->
                                        <!--<a-entity obj-model="obj: #obj;" scale="1 1 1" crossOrigin="anonymous"></a-entity>-->
                                        <!--<a-marker-camera preset='hiro'></a-marker-camera>
                                        </a-entity>-->
                                        <a-entity gltf-model="mc3.glb" scale="2 2 2" position="-1 0.5 -3" rotation="0 90 90"></a-entity>
                                        <!--<a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"></a-box>-->
                                        <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#AEAB83"></a-plane>
                                        <a-sky color="#3DAFE9"></a-sky>
                                    </a-scene>
                                    </div>
                                    </div>
                                </div>
                                <!--<div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                 </div>
                
                <div class="col-md-3 col-sm-5">
                    
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Prueba con AR</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="ar.php"><img src="t1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="ar.php">Active su camara para probar la vista de un fosil</a></h4>
                                    <p>Necesitara un marcador Hiro</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

   <!-- <footer id="footer">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
            </div>
        </div>
        
    </footer>-->
    <!--/#footer-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
