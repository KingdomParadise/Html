<!DOCTYPE html>
<html lang="en">
<head>
    <title>WiKiTemplate</title>
    <meta charset="utf-8">
    <meta name="Author" content="KingdomParadise">
    <meta name="Description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Using cdn cloudflare url of bootstrap.min.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
          rel="stylesheet">
    <!--
    Using bootstrap.min.css in Bootstrap Folder on vendor

        <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
    -->

    <!--
    Using fontawesome.min.css in Fontawesome Foloder on vendor

        <link rel="stylesheet" type="text/css" href="./vendor/fontawesome/css/all.min.css">
    -->

    <!-- Using cdn cloudflare url of all.min.css -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<!-- Start Hearder -->
			<header class="nw-header">
                <form class="form-header">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-9 col-sm-12">
                                <!-- Nav bar Icon -->
                                <div class="nav-bar">
                                    <label id="navbar">
                                        <nav id="sidebar">
                                            <i class="fas fa-bars"></i>
                                        </nav>
                                    </label>
                                </div>
                                <!-- Logo image -->
                                <div class="logo">
                                    <a href="#">
                                        <img src="img/logo.png">
                                    </a>
                                </div>
                                <!-- Search bar -->
                                <div class="search">
                                    <input class="form-control search-box" type="input" name="search_box" placeholder="Search Wikipedia">
                                </div>
                                <div class="btn-search">
                                	<i class="fas fa-search"></i>
                                </div>
                                <div class="phone-search">
                                	<input class="form-control phone-search-box" type="input" name="search_box" placeholder="Search Wikipedia"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </header>
            <!-- End Header -->
            <div class="phone-search-mask"></div>

			<!-- Start main container -->
			<form class="form-body">
			    <div class="container">
			        <!-- Start Title  -->
			        <div class="row justify-content-md-center">
			            <div class="col-md-9 col-sm-12 title">
			                <h1>Sausage(disambiguation)</h1>
			                <div class="tagline"></div>
			            </div>
			        </div>
			        <!-- End Title -->

			        <!-- Start Sub Title -->
			        <div class="row justify-content-md-center">
			            <div class="col-md-9 col-sm-12">
			                <div class="row sub-title">
			                    <!-- Select language Button -->
			                    <div class="col-md-6 col-sm-6 col-6 sel-lang">
			                        <a>
			                            Language
			                        </a>
			                    </div>
			                    <!-- Select Download, Watch, Edit Button -->
			                     <div class="col-md-6 col-sm-6 col-6 icon-btn">
			                        <!-- Select Watch Button -->
			                        <a class="btn-watch">
			                            <p>Watch</p>
			                        </a>
			                        <!-- Select Edit Button -->
			                        <a class="btn-edit">
			                            <p>Edit</p>
			                        </a>
			                    </div>
			                </div>
			                <div class="tagline2"></div>
			            </div>
			        </div>
			        <!-- End Sub Title -->

			        <!-- Start Main Content -->
			        <div class="row justify-content-md-center">
			            <div class="col-md-9 col-sm-12">
			                <div class="start-header-content col-md-5 col-sm-12">
			                    <p>
			                        Look up
			                        <a href="#">
			                            sausage
			                        </a>
			                        in Wiktionary, the free dictionary.
			                    </p>
			                </div>
			                <div class="start-main-content col-md-12 col-sm-12">
			                    <p><a href="#">Sausage</a> is a type of prepared meat.</p>
			                    <p><b>Sausage</b> may also refer to:</p>
			                    <ul>
			                        <li><p><a href="#">Sausage (band)</a>, a funk metal band fronted by Les Claypool</p>
			                        <li><p><a href="#">Sausage dog</a>, nickname for a Dachshund</p>
			                        <li><p><a href="#">Sausage Software</a>, a now defunct creator of web editing software</p>
			                        <li><p><a href="#">Sausage Galaxy</a>, a former dwarf galaxy that accreted in a violent
			                                collision into the Milky Way</p>
			                        <li><p>The sausage, the name of the device detonated in the <a href="#">Ivy Mike</a>,nuclear
			                                test</p>
			                        <li><p><a href="#">Sausage (album)</a>, a 1992 album by Baboon</p>
			                    </ul>
			                </div>
			                <div class="tagline2"></div>
			                <p style="font-style: italic;">This <a href="#">disambiguation </a> page lists articles associated with
			                    the title <b>Sausage</b>.</p>
			                <p style="font-style: italic;">If an <a href="#">internal link</a> led you here, you may wish to change
			                    the link to pin directly to the intended article.</p>
			                <div class="tagline2"></div>
			                <br><br>
			            </div>
			            <!-- End Main Content -->
			        </div>
			    </div>
			</form>
			<!-- End main container -->

			<!-- Start Footer -->
			<footer class="nw-footer">
			    <div class="container">
			        <div class="row justify-content-md-center">
			            <div class="content-footer col-md-9 col-sm-12" style="line-height: 55px;">
			                <i class="fas fa-history"></i><a class="btn-first" href="#">Last edited 6 days ago</a> by <a
			                        class="btn-second" href="#">Monkbot</a>
			            </div>
			        </div>
			    </div>
			</footer>
			<!-- End Footer -->
		</div>
		<!-- Nav left menu -->
        <div class="nav-left-menu" id="navleftmenu">
        	<div class="leftbadge"></div>
        	<div class="menuitem"><div><i class="fas fa-home"></i><p>Home</p></div></div>
        </div>
        <div class="menumask"></div>
        <!-- End Nav Left menu -->
	</div>
</body>
<!--
Using bootstrap.min.js in Bootstrap Folder on vendor
    <script type="text/javascript"src="./vendor/bootstrap/bootstrap.min.js"></script>
-->

<!-- Using cdn cloudflare url of all.min.css -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/style.js"></script>
<script>
		$( document ).ready(function() {
		    $('.dropdown-toggle').dropdown();
		});

		$('#navbar').click(function(){
		    $('.nav-left-menu').css('left','0px');
		    $('.menumask').css('visibility','visible');
		});

		$('.menumask').click(function(){
			$('.nav-left-menu').css('left','-320px');
			$('.menumask').css('visibility','hidden');
		});

		$('.btn-search').click(function(){
			$('.phone-search-mask').css('display','block');
			$('.phone-search-box').css('display','block');
			$('.phone-search-box').focus();
			$('.nav-bar').css('display','none');
			$('.logo').css('display','none');

		});

		$('.phone-search-mask').click(function(){
			$('.phone-search-mask').css('display','none');
			$('.phone-search-box').css('display','none');
			$('.nav-bar').css('display','block');
			$('.logo').css('display','block');
		});
</script>
</html>

