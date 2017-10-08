<?php $base = $_SERVER['DOCUMENT_ROOT']; ?>
<!DOCTYPE html>
<html>
    <head>
	    <title>LinkBazaar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="/images/logo.png" />
        <meta charset="utf-8"/>
        <script src="/js/jquery.min.js" ></script>
	    <link rel="stylesheet" href="/css/bootstrap.min.css"> <!--3.3.0-->
        <meta name="Description" content="Welcome To linkbazaar.info .Find Good links related to engineering, medical , jobs, results, internships, music , movies , ebooks , readings, trending and much many more ...">
        <meta name="Keywords" content="link, bazaar, bazar, engineering, results, internship, cricket, jobs, recharge, offers, coupons, computer science, cse , biotech, mechanical , civil , electronics , chemical , ebooks, novels, news , biography, research , magazines, music, movies , gaming,  government, shoppings, home , rent, property, travel, foods, ebanking , engineering, medical, upsc, bank, high school results, intermediate results, private jobs, upsc services, bank exams, maharatna companies jobs, navratna companies jobs, others, mbbs , md, b.pharma, bams, bms, bhms, ca , cfa ,cs, mba, b.com, m.com">

    </head>
    <body>
        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <div class="brand-wrapper">
                            <!-- Hamburger -->
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <div class="brand-name-wrapper">
                                <a class="navbar-brand" href="/">
                                        LINKBAZAAR
                                </a>
                            </div>

                            <!-- Search -->
                            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                                <span class="glyphicon glyphicon-search"></span>
                            </a>

                            <!-- Search body -->
                            <div id="search" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="navbar-form" action="/search/" method="get" role="search">
                                        <div class="form-group">
                                            <input type="text" id="search-box" name="search" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li class="sidebar"><a href="/account/"><span class="glyphicon glyphicon-link"></span> Bookmarked </a></li>
                            <li class="active sidebar"><a href="/account/history/"><span class="glyphicon glyphicon-link"></span>My History </a></li>

                            <!-- Dropdown-->
                            <?php include "$base/sidebar_login.php"; ?>
                           <!-- <li class='sidebar'><a href='#' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-signal'></span>Submit Your Link</a></li>
                            -->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body" id="sidebody">
                    <div class="container"> 
                        <div class="row featured-boxes">
                            <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;">&nbsp;&nbsp;ENGINEERING </p>
                            <ul class="sprite">
                                <li><a href="/category/engineering/cse-it/"><div class="pari-gp greyout"><div class="imgs-title" style="color:#D5042E;">CSE/IT</div></div> </a></li>
                                <li><a href="/category/engineering/biotech/"><div class="clojure greyout"><div class="imgs-title" style="color:#5EB62C;">Biotech</div></div> </a></li>
                                <li><a href="/category/engineering/mechanical/"><div class="lua greyout"><div class="imgs-title" style="color:#010080;">Mechanical</div></div> </a></li>
                                <li><a href="/category/engineering/civil/"><div class="clang greyout"><div class="imgs-title" style="color:#014B66">Civil</div></div> </a></li>
                                <li><a href="/category/engineering/electronics/"><div class="objectivec greyout"><div class="imgs-title" style="color:#EE560D;">Electronics</div></div> </a></li>
                                <li><a href="/category/engineering/chemical/"><div class="vb-net greyout"><div class="imgs-title" style="color:#CA81DD;">Chemical</div></div> </a></li>
                                <li><a href="/category/engineering/electrical/"><div class="objectivec greyout"><div class="imgs-title" style="color:#4272D8;">Electrical</div></div> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row featured-boxes">
                            <p class="center" style="font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;ENTERTAINMENT</p>
                            <ul class="sprite">
                                <li><a href="/category/entertainment/music"><div class="scriptbasic greyout"><div class="imgs-title" style="color:#01B26E;">MP3</div></div> </a></li>
                                <li><a href="/category/entertainment/videos"> <div class="sqllite greyout"><div class="imgs-title" style="color:#01415C;">Videos</div></div> </a></li>
                                <li><a href="/category/entertainment/movies"><div class="jsp greyout"><div class="imgs-title" style="color:#0198d2;">Movies</div></div> </a></li>
                                <li><a href="/category/entertainment/games"><div class="unlambda greyout"><div class="imgs-title" style="color:#D63664;">Gaming</div></div> </a></li>
                            </ul>
                        </div>
                    </div>
                    <br/><br/><strong> Coming Soon ...</strong>
                    <div class="container"> 
                        <div class="row featured-boxes">
                            <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;READING </p>
                            <ul class="sprite">
                                <li><a href="/category/reading/language.php"><div class="octave greyout"><div class="imgs-title" style="color:#ff7f25;">Languages</div></div></a></li>
                                <li><a href="/category/reading/reading_novels.php"><div class="dart greyout"><div class="imgs-title" style="color:#0184CA;">NOVELS</div></div> </a></li>
                                <li><a href="/category/reading/news.php"><div class="chash greyout">  <div class="imgs-title" style="color:#D33D22;">NEWS</div></div> </a></li>
                                <li><a href="/category/reading/reading_novels.php#biography"><div class="fhash greyout"><div class="imgs-title" style="color:#398EC5;">BiOGRAPHY</div></div> </a></li>
                                <li><a href="/category/reading/research.php"><div class="c99strict greyout"><div class="imgs-title" style="color:#F9BA00;">RESEARCH</div></div> </a></li>
                                <li><a href="/category/reading/magazines.php"><div class="groovy greyout"><div class="imgs-title" style="color:#30869F;">MAGAZINES</div></div> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container"> 
                        <div class="row featured-boxes">
                            <p class="center" style="font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;DAILY USE </p>
                            <ul class="sprite">
                                <li><a href="/category/others/"> <div class="numpy greyout"><div class="imgs-title" style="color:#F7DE1F;">GOVERNMENT</div></div></a></li>
                                <li><a href="/category/others/shopping.php"> <div class="haxe greyout"><div class="imgs-title" style="color:#5383c3;">Shoppings</div></div> </a></li>
                                <li><a href="/category/others/u_home.php"> <div class="fantom greyout"><div class="imgs-title" style="color:#FA8408;"> U &amp; HOME </div></div> </a></li> 
                                <li><a href="/category/others/"> <div class="r-programming greyout"><div class="imgs-title" style="color:#b7241d;">Coding</div></div></a></li>
                                <li><a href="/category/others/travel.php"> <div class="node greyout"><div class="imgs-title" style="color:#88C345;">Travel</div></div></a></li>
                                <li><a href="/category/others/foodies.php"> <div class="javascript greyout"><div class="imgs-title" style="color:#F55D1A;">Foodies</div></div> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container"> 
                        <div class="row featured-boxes">
                            <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;Job / Entrance Exams </p>
                            <ul class="sprite">
                                <li><a href="/category/trending/"> <div class="cplus greyout"><div class="imgs-title" style="color:#025DAC;">Internship</div></div> </a></li>
                                <li><a href="/category/job_entrance/private_jobs.php"><div class="phpweb greyout"><div class="imgs-title" style="color:#0D7FB3;">Private Jobs</div></div> </a></li>
                                <li><a href="/category/job_entrance/bank_exam.php"><div class="perl greyout"><div class="imgs-title" style="color:#4272D8;">Bank Exams</div></div> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container"> 
                        <div class="row featured-boxes">
                            <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp; </p>
                            <ul class="sprite">
                            </ul>
                        </div>
                    </div>
    
                    <div id="views">
                        <!-- hitwebcounter Code START -->
                        <a href="" target="_blank">
                        <img src="http://hitwebcounter.com/counter/counter.php?page=6117314&style=0030&nbdigits=6&type=page&initCount=0" title="" Alt="Web Counter"   border="0" >
                        </a><br/>
                    </div>
                    <div class="container"> 
                        <div class="row featured-boxes">
                            <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp; </p>
                            <ul class="sprite">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="inner">
            <div class="container">
                <div class="row">
                    <div class="footer-ribon">
                        <span>Extras</span>
                    </div>
                    <div class="col-md-2">
                        <h4>Mobile First</h4>
                        <ul class="list icons list-unstyled">
                            <li><a id="android" href="" target="_blank" rel="nofollow">
                                <img alt="LinkBazaar Android app" src="/images/google_play.png" class="mobile-apps"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-details">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="social-icons">
                            <ul class="social-icons">
                                <li class="facebook"><a href="https://www.facebook.com/linkbazaar.in" target="_blank" data-placement="bottom" title="Linkbazaar @ Facebook"></a></li>
                                <li class="googleplus"><a href="https://plus.google.com/101289369083090867490/about" target="_blank" data-placement="bottom" title="Linkbazaar @ Google+"></a></li>
                                <li class="twitter"><a href="https://twitter.com/linksbazaar" target="_blank" data-placement="bottom" title="linkbazaar @ Twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <a href="/" class="logo">
                                <img alt="Link Bazaar" class="img-responsive" src="/images/logo.png">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <p>LinkBazaar &copy; 2015. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-4">
                            <nav id="sub-menu">
                                <ul>
                                    <li><a href="/about/">About us</a></li>
                                    <li><a href="/contact/">Contact</a></li>
                                    <li><a href="/team/">Our Team</a></li>
                                    <li><a href="/index.php?hp=2">Mobile Site</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <link rel="stylesheet" href="/css/front_page.css">
    <link rel="stylesheet" href="/css/style-min-v1.css">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="text/javascript" src="/js/click.js"></script>
    <script src="/js/bootstrap.min.js"></script><!--3.3.0-->
    <?php include "$base/model_bababa.php"; ?>
</html>