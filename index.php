<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AgroBuy</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="login.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <link rel="stylesheet" href="indexfooter.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body>
 <class="" style=""><div id="skel-layers-wrapper" style="position: relative; left: 0px; right: 0px; top: 0px; backface-visibility: hidden; transition: -webkit-transform 0.5s, opacity 0.5s; z-index: auto; transform: translate(0px, 0px);">
<div id="skel-layers-wrapper" style="position: relative; left: 0px; right: 0px; top: 0px; backface-visibility: hidden; transition: -webkit-transform 0.5s, opacity 0.5s;">

    

			<header id="header">
				<h1><a href="index.php">AgroBuy</a></h1>
				<div id="skel-layers-placeholder-nav"></div>
			</header>

	


    
    <section id="banner" class="wrapper">
        <div class="container">
            <h2>AgroBuy</h2>
            <p>Your Product Our Market</p>
            <br><br>
            <center>
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
                    </div>

                    <div class="6u 12u$(xsmall)">
                        <button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
                    </div>
                </div>
            </center>
        </div>
    </section>

    <!-- One -->
    

    <!-- Footer -->
    <footer class="footer-distributed" style="background-color:black" id="aboutUs">
        <center>
            <h1 style="font: 35px calibri;">About Us</h1>
        </center>
        <div class="footer-left">
            <h3 style="font-family: 'Times New Roman', cursive;">AgroBuy © </h3>
            <br>
            <p style="font-size:20px;color:white">Your product Our market !!!</p>
            <br>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p style="font-size:20px">Chennai<span>REC</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p style="font-size:20px">123456789</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p style="font-size:20px"><a href="mailto:AgroBuy@gmail.com" style="color:white">demo@demo.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about" style="color:white">
                <span style="font-size:20px"><b>About AgroBuy</b></span>
                AgroBuy is an e-commerce trading platform for grains &amp; groceries...
            </p>
            <div class="footer-icons">
                <a href="#"><i style="margin-left: 0;margin-top:5px;" class="fa fa-facebook"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <div id="id01" class="modal">
        <form class="modal-content animate" action="Login/login.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
            </div>

            <div class="container">
                <h3>Login</h3>
                
                    <div class="row uniform 50%">
                        <div class="7u$">
                            <input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required="">
                        </div>
                        <div class="7u$">
                            <input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required="">
                        </div>
                    </div>
                    <div class="row uniform">
                        <p>
                            <b>Category : </b>
                        </p>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="farmer" name="category" value="1" checked="">
                            <label for="farmer">Farmer</label>
                        </div>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="buyer" name="category" value="0">
                            <label for="buyer">Buyer</label>
                        </div>
                    </div>
                    <center>
                        <div class="row uniform">
                            <div class="7u 12u$(small)">
                                <input type="submit" value="Login">
                            </div>
                        </div>
                    </center>
                
            </div></form>
        
    </div>

    <div id="id02" class="modal">
        <form class="modal-content animate" action="Login/signUp.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            </div>

            <div class="container">
                <h3>SignUp</h3>
                
                    <center>
                        <div class="row uniform">
                            <div class="3u 12u$(xsmall)">
                                <input type="text" name="name" id="name" value="" placeholder="Name" required="">
                            </div>
                            <div class="3u 12u$(xsmall)">
                                <input type="text" name="uname" id="uname" value="" placeholder="UserName" required="">
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="3u 12u$(xsmall)">
                                <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required="">
                            </div>

                            <div class="3u 12u$(xsmall)">
                                <input type="email" name="email" id="email" value="" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="3u 12u$(xsmall)">
                                <input type="password" name="password" id="password" value="" placeholder="Password" required="">
                            </div>
                            <div class="3u 12u$(xsmall)">
                                <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required="">
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required="">
                            </div>
                        </div>
                        <div class="row uniform">
                            <p>
                                <b>Category : </b>
                            </p>
                            <div class="3u 12u$(small)">
                                <input type="radio" id="farmer" name="category" value="1" checked="">
                                <label for="farmer">Farmer</label>
                            </div>
                            <div class="3u 12u$(small)">
                                <input type="radio" id="buyer" name="category" value="0">
                                <label for="buyer">Buyer</label>
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="3u 12u$(small)">
                                <input type="submit" value="Submit" name="submit" class="special">
                            </div>
                            <div class="3u 12u$(small)">
                                <input type="reset" value="Reset" name="reset">
                            </div>
                        </div>
                    </center>
                
            </div></form>
        
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var modal1 = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    </script>



</div><div id="skel-layers-hiddenWrapper" style="height: 100%;"><div id="navPanel" class="skel-layer" style="backface-visibility: hidden; transition: -webkit-transform 0.5s, opacity 0.5s; z-index: 10000; position: fixed; display: none; overflow: hidden auto;"><div data-action="moveElement" data-args="nav"><div id="skel-layers-placeholder-nav"></div><div id="skel-layers-placeholder-nav"></div></div></div></div><div id="skel-layers-visibleWrapper" style="position: relative;"><div id="navButton" class="skel-layer skel-layer-top-left" style="backface-visibility: hidden; transition: -webkit-transform 0.5s, opacity 0.5s; z-index: 10004; position: fixed; display: block; max-width: 100%; max-height: 100%; width: 6em; height: 4em; top: 0px; left: 0px;"><span class="toggle" data-action="toggleLayer" data-args="navPanel" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); cursor: pointer;"></span></div></div>
				


</div><div id="skel-layers-hiddenWrapper" style="height: 100%;"><div id="navPanel" class="skel-layer skel-layer-top-left" style="backface-visibility: hidden; transition: -webkit-transform 0.5s, opacity 0.5s; z-index: 10000; position: fixed; display: none; overflow: hidden auto; max-width: 100%; max-height: 100%; width: 250px; height: 100%; top: 0px; left: -250px; transform: translate(0px, 0px);"><div data-action="moveElement" data-args="nav"><div id="skel-layers-placeholder-nav"></div><nav id="nav" class="skel-layers-moved">
					<ul>
						<li><a href="index.php" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="glyphicon glyphicon-shopping-cart"> MyCart</span></a></li>
						<li><a href="profileView.php" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="glyphicon glyphicon-user"></span> My Profile: SHRI</a></li>
						<li><a href="market.php" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="glyphicon glyphicon-grain"> Digital-Market</span></a></li>
						<li><a href="blogView.php" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span class="glyphicon glyphicon-comment"> BLOG</span></a></li>
					</ul>
				</nav></div></div></div><div id="skel-layers-visibleWrapper" style="position: relative;"><div id="navButton" class="skel-layer skel-layer-top-left" style="backface-visibility: hidden; transition: -webkit-transform 0.5s, opacity 0.5s; position: fixed; display: block; top: 0px; left: 0px; transform: translate(0px, 0px); max-width: 100%; max-height: 100%; width: 6em; height: 4em; z-index: 10004;"><span class="toggle" data-action="toggleLayer" data-args="navPanel" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); cursor: pointer;"></span></div></div>		
</body>
</html>
