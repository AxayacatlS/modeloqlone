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
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    <!--<script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>-->
</head><!--/head-->

<body>
	<header id="header">      
        <div class="navbar navbar-inverse" role="banner">
        <div class="container">
        <div class="navbar-header">
            <section id="page-breadcrumb">
                <div class="vertical-center sun">
                    <div class="container">
                        <div class="row">
                            <div class="action">
                            <div class="col-sm-12">
                                    <h1 class="title">Modelo 3D</h1>
                                    <p><a href="index.php">Regresar</a></p>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <div class="collapse navbar-collapse">
        </div>
        </div>
        </div>
    </header>
    <!--/#header-->

    
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <!--<style>
                                        #myEmbeddedScene {
                                          width:850px;
                                          height:400px;
                                        }
                                        a-scene {
                                            height: 400px;
                                            width: 850px;
                                        }
                                    </style>-->
                                            <a-scene embedded>
                                                <!--<a-entity scale=".2 .2 .2"> -->
                                                    <a-entity gltf-model="fosil.glb" scale="2 2 2" rotation="0 0 0" crossOrigin="anonymous"></a-entity>
                                                    <!--<a-entity obj-model="obj: #obj;" scale="1 1 1" crossOrigin="anonymous"></a-entity>-->
                                                    <a-marker-camera preset='hiro'></a-marker-camera>
                                                <!--</a-entity>-->
                                            </a-scene>
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
