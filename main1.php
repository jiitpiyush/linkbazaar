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
                            <li class="sidebar"><a href="#"><span class="glyphicon glyphicon-link"></span> Link</a></li>
                            <li class="active sidebar"><a href="#"><span class="glyphicon glyphicon-link"></span> Active Link</a></li>

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
                    <div style="clear:both;"></div>
<div class="container"> 
  <div class="row featured-boxes">
    <h4 class="center" style="font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"><b>##TRENDING</b></h4>
    <ul class="sprite">
      <li><a href="/category/internship/"><div class="mysql greyout"><div class="imgs-title" style="color:#0D5073;">InternShip</div></div> </a></li>
      <li><a href=""> <div class="basic greyout"><div class="imgs-title" style="color:#9A599D;">Cricket</div></div> </a></li>
      <li><a href=""> <div class="algol greyout"><div class="imgs-title" style="color:#167dbe;">U &amp; JOBS</div></div></a></li>
      <li><a href=""> <div class="haxe greyout"><div class="imgs-title" style="color:#F55D1A;">OFFER ZONE</div></div> </a></li>
      <li><a href="compile_haskell_online.php"> <div class="haskell greyout"><div class="imgs-title" style="color:#3D4E5E;">E-RECHARGE</div></div> </a></li>
    </ul>
  </div>
  </div>

<div class="container"> 
  <div class="row featured-boxes">
    <h4 class="center" style="font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"><b>EDUCATION</b></h4>
    <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;">&nbsp;&nbsp;Engineering </h5>
    <ul class="sprite">
      <li><a href=""> <div class="bootstrap greyout"><div class="imgs-title" style="color:#451F48;">CSE/IT</div></div> </a></li>
      <li><a href=""> <div class="clojure greyout"><div class="imgs-title" style="color:#5EB62C;">Biotech</div></div> </a></li>
      <li><a href=""> <div class="brain greyout"><div class="imgs-title" style="color:#AC1001;">Mechanical</div></div> </a></li>
      <li><a href=""> <div class="clang greyout"><div class="imgs-title" style="color:#014B66">Civil</div></div> </a></li>
      <li><a href=""> <div class="css greyout"><div class="imgs-title" style="color:#006CBB;">Electronics</div></div> </a></li>
     <li><a href=""> <div class="cobol greyout"><div class="imgs-title" style="color:#6A8735;">Chemical</div></div></a></li>
    </ul>
  </div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;Medical </h5>
    <ul class="sprite">
      <li><a href=""><div class="centos greyout"><div class="imgs-title" style="color:#8f227d;">PMT</div></div></a></li> 
      <li><a href=""> <div class="c99strict greyout"><div class="imgs-title" style="color:#F9BA00;">AIPMT</div></div> </a></li>
      <li><a href=""> <div class="cplus greyout"><div class="imgs-title" style="color:#025DAC;">MBBS</div></div> </a></li>
      <li><a href=""> <div class="cplusox greyout"><div class="imgs-title" style="color:#C1C204;">BHMS</div></div> </a></li>
      <li><a href=""> <div class="cplus11 greyout"><div class="imgs-title" style="color:#0CD4B0;">BDMS</div></div> </a></li>
      <li><a href=""> <div class="dlang greyout"><div class="imgs-title" style="color:#FF540C;">BAMS</div></div> </a></li>
      
    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;Commerce</h5>
    <ul class="sprite">
       <li><a href=""> <div class="embedc greyout"><div class="imgs-title" style="color:#85C50D;"> CA </div></div> </a></li>
      <li><a href=""> <div class="erlang greyout"><div class="imgs-title" style="color:#8E002F;"> CFA </div></div> </a></li>
      <li><a href=""> <div class="factor greyout"><div class="imgs-title" style="color:#8154BB;"> CS</div></div> </a></li>
      <li><a href=""> <div class="fantom greyout"><div class="imgs-title" style="color:#FA8408;"> MBA </div></div> </a></li>
      <li><a href=""> <div class="falcon greyout"><div class="imgs-title" style="color:#C3C3C3;"> B.COM </div></div> </a></li>
      <li><a href=""> <div class="fortran95 greyout"><div class="imgs-title" style="color:#CA81DD;">M.COM</div></div> </a></li>
    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;JOB / Entrance Exams </h5>
    <ul class="sprite">

      <li><a href=""><div class="scipy greyout"><div class="imgs-title" style="color:#0a325e;">PRIVATE JOBS</div></div></a></li>
      <li><a href=""><div class="redis greyout"><div class="imgs-title" style="color:#003366;">UPSC Services</div></div></a></li>
      <li><a href=""><div class="hadoop greyout"><div class="imgs-title" style="color:#0D5073;">Bank Exams</div></div> </a></li>
      <li><a href=""> <div class="bash greyout"><div class="imgs-title" style="color:#03b5a5;"> MAHARATNA </div></div> </a></li>
      <li><a href=""> <div class="coffscript greyout"><div class="imgs-title" style="color:#191933;">NAVRATNA</div></div> </a></li>
      <li><a href=""><div class="forth greyout"><div class="imgs-title" style="color:#E43BA0;">OTHERs</div></div> </a></li>
    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp; Results</h5>
    <ul class="sprite">
          <li><a href=""> <div class="gnat greyout"><div class="imgs-title" style="color:#29abe1;">Engineering</div></div></a></li>
          <li><a href=""> <div class="angular greyout"><div class="imgs-title" style="color:#e52a3a;">UPSC</div></div> </a></li>
          <li><a href=""> <div class="assembly greyout"><div class="imgs-title" style="color:#113b6a;">MEDICAL</div></div> </a></li>
          <li><a href=""> <div class="go greyout"><div class="imgs-title" style="color:#8978E0;">BANK</div></div> </a></li>
          <li><a href=""> <div class="chash greyout">      <div class="imgs-title" style="color:#D33D22;">HIGH SCHOOL</div></div> </a></li>
          <li><a href=""> <div class="coldfusion greyout"> <div class="imgs-title" style="color:#437397;">INTERMEDIATE</div></div> </a></li>

    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;Reading </h5>
    <ul class="sprite">
        <li><a href=""><div class="octave greyout"><div class="imgs-title" style="color:#ff7f25;">Ebooks</div></div></a></li>
        <li><a href=""> <div class="dart greyout"><div class="imgs-title" style="color:#0184CA;">Novels</div></div> </a></li>
        <li><a href=""><div class="mongodb greyout"><div class="imgs-title" style="color:#412d22;">NEWS</div></div></a></li>
      <li><a href=""> <div class="fhash greyout"><div class="imgs-title" style="color:#398EC5;">BioGRAPHY</div></div> </a></li>
      <li><a href=""> <div class="freebasic greyout"><div class="imgs-title" style="color:#43C2CB;">RESEARCH</div></div> </a></li>
      <li><a href=""> <div class="groovy greyout"><div class="imgs-title" style="color:#30869F;">MAGAZINES</div></div> </a></li>
    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
    <h4 class="center" style="font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"><b>ENTERTAINMENT</b></h4>
    <ul class="sprite">
    <li><a href=""><div class="sympy greyout"><div class="imgs-title" style="color:#6ec13d;">Music</div></div></a></li>
      <li><a href=""> <div class="awk greyout"><div class="imgs-title" style="color:#ed1b24;">Movies</div></div> </a></li> 
      <li><a href=""> <div class="ascii greyout"><div class="imgs-title" style="color:#a155a0;">Gaming</div></div> </a></li>

    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp; </h5>
    <ul class="sprite">

    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <h5 class="left" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;Other </h5>
    <ul class="sprite">
    
//UPSC    
      <li><a href="try_html_online.php"> <div class="html greyout"><div class="imgs-title" style="color:#FA5700;">HTML</div></div> </a></li>
      <li><a href="compile_ilasm_online.php"> <div class="ilasm greyout"><div class="imgs-title" style="color:#7E963E;">ilasm</div></div> </a></li>
      <li><a href="compile_intercal_online.php"> <div class="intercal greyout"><div class="imgs-title" style="color:#00B169;">Intercal</div></div> </a></li>
      <li><a href="compile_icon_online.php"> <div class="icon greyout"><div class="imgs-title" style="color:#3E505E;">ICON</div></div> </a></li>
      <li><a href="compile_java_online.php"> <div class="java greyout"><div class="imgs-title" style="color:#1968A1;">Java</div></div> </a></li>
      <li><a href="compile_java8_online.php"> <div class="java8 greyout"><div class="imgs-title" style="color:#1968A1;">Java 8</div></div> </a></li>
      <li><a href="compile_jdbc_online.php"> <div class="java-mysql greyout"><div class="imgs-title" style="color:#0D5073;">Java MySQL</div></div> </a></li>
      <li><a href="try_javascript_online.php"> <div class="javascript greyout"><div class="imgs-title" style="color:#F7DE1F;">Javascript</div></div> </a></li>


      <li><a href="execute_jsp_online.php"> <div class="jsp greyout"><div class="imgs-title" style="color:#0198d2;">JSP</div></div> </a></li>
      <li><a href="try_jquery_online.php"> <div class="jquery greyout"><div class="imgs-title" style="color:#0A67AC;">Jquery</div></div> </a></li>
      <li><a href="execute_julia_online.php"> <div class="julia greyout"><div class="imgs-title" style="color:#4272D8;">julia</div></div> </a></li>
      <li><a href="execute_ksh_online.php"> <div class="kshshell greyout"><div class="imgs-title" style="color:#87AD00;">Ksh Shell</div></div> </a></li>
      <li><a href="execute_lisp_online.php"> <div class="lisp greyout"><div class="imgs-title" style="color:#864388;">Lisp</div></div> </a></li>
      <li><a href="execute_lolcode_online.php"> <div class="lolcode greyout"><div class="imgs-title" style="color:#8D2701;">LOLCODE</div></div> </a></li>
      <li><a href="execute_lua_online.php"> <div class="lua greyout"><div class="imgs-title" style="color:#010080;">Lua</div></div> </a></li>
      <li><a href="execute_matlab_online.php"> <div class="matlab-octave greyout"><div class="imgs-title" style="color:#729ECD;">Matlab/Octave</div></div> </a></li>
      <li><a href="execute_malbolge_online.php"> <div class="malgolbe greyout"><div class="imgs-title" style="color:#996F0B;">Malbolge</div></div> </a></li>
      <li><a href="try_markdown_online.php"> <div class="markdown greyout"><div class="imgs-title" style="color:#048CB4;">Markdown</div></div> </a></li>
      <li><a href="try_mathml_online.php"> <div class="mathML greyout"><div class="imgs-title" style="color:#043A2C;">MathML</div></div> </a></li>
      <li><a href="compile_mozart-oz_online.php"> <div class="mozart-oz greyout"><div class="imgs-title" style="color:#CF9D27;">Mozart-OZ</div></div> </a></li>
      <li><a href="compile_nimrod_online.php"> <div class="nimrod greyout"><div class="imgs-title" style="color:#1F1D20;">Nimrod</div></div> </a></li>
      <li><a href="execute_nodejs_online.php"> <div class="node greyout"><div class="imgs-title" style="color:#88C345;">Node.JS</div></div> </a></li>
      <li><a href="compile_objective-c_online.php"> <div class="objectivec greyout"><div class="imgs-title" style="color:#EE560D;">Objective-C</div></div> </a></li>
      <li><a href="compile_ocaml_online.php"> <div class="ocaml greyout"><div class="imgs-title" style="color:#F58C1F;">OCaml</div></div> </a></li>
      <li><a href="compile_pascal_online.php"> <div class="pascal greyout"><div class="imgs-title" style="color:#CA7138;">Pascal</div></div> </a></li>
      <li><a href="execute_pari_online.php"> <div class="pari-gp greyout"><div class="imgs-title" style="color:#D5042E;">PARI/GP</div></div> </a></li>
      <li><a href="compile_pawn_online.php"> <div class="pawn greyout"><div class="imgs-title" style="color:#E26632;">Pawn</div></div> </a></li>
      <li><a href="execute_perl_online.php"> <div class="perl greyout"><div class="imgs-title" style="color:#4272D8;">Perl</div></div> </a></li>
      <li><a href="perl_mysql_online.php"> <div class="perl-mysql greyout"><div class="imgs-title" style="color:#0D5073;">Perl MySQL</div></div> </a></li>
      <li><a href="execute_php_online.php"> <div class="php greyout"><div class="imgs-title" style="color:#0D7FB3;">PHP</div></div> </a></li>
      <li><a href="php_mysql_online.php"> <div class="php-mysql greyout"><div class="imgs-title" style="color:#0D5073;">PHP MySQL</div></div> </a></li>
      <li><a href="php_webview_online.php"> <div class="phpweb greyout"><div class="imgs-title" style="color:#0D7FB3;">Web View</div></div> </a></li>
      <li><a href="execute_prolog_online.php"> <div class="prolog greyout"><div class="imgs-title" style="color:#CE1620;">Prolog</div></div> </a></li>
      <li><a href="execute_python_online.php"> <div class="python greyout"><div class="imgs-title" style="color:#CA81DD;">Python</div></div> </a></li>
      <li><a href="execute_python3_online.php"> <div class="python-3 greyout"><div class="imgs-title" style="color:#CA81DD;">Python-3</div></div> </a></li>
      <li><a href="python_mysql_online.php"> <div class="python-mysql greyout"><div class="imgs-title" style="color:#0D5073;">Python MySQL</div></div> </a></li>
      <li><a href="execute_rexx_online.php"> <div class="rexx greyout"><div class="imgs-title" style="color:#DA1413;">Rexx</div></div> </a></li>
      <li><a href="try_restructure_online.php"> <div class="restruc greyout"><div class="imgs-title" style="color:#D63664;">reStructure</div></div> </a></li>
      <li><a href="execute_ruby_online.php"> <div class="ruby greyout"><div class="imgs-title" style="color:#970300;">Ruby</div></div> </a></li>
      <li><a href="compile_rust_online.php"> <div class="rust greyout"><div class="imgs-title" style="color:#242021;">Rust</div></div> </a></li>
      <li><a href="execute_r_online.php"> <div class="r-programming greyout"><div class="imgs-title" style="color:#5F6C8E;">R Programming</div></div> </a></li>
      <li><a href="compile_scala_online.php"> <div class="scala greyout"><div class="imgs-title" style="color:#B91400;">Scala</div></div> </a></li>
      <li><a href="execute_scheme_online.php"> <div class="scheme greyout"><div class="imgs-title" style="color:#D90000;">Scheme</div></div> </a></li>
      <li><a href="execute_smalltalk_online.php"> <div class="smalltalk greyout"><div class="imgs-title" style="color:#EF821D;">Smalltalk</div></div> </a></li>
      <li><a href="compile_simula_online.php"> <div class="simula greyout"><div class="imgs-title" style="color:#398C92;">Simula</div></div> </a></li>
      <li><a href="execute_smlnj_online.php"> <div class="sml-nj greyout"><div class="imgs-title" style="color:#FF0F14;">SML/NJ</div></div> </a></li>
      <li><a href="execute_scriptbasic_online.php"> <div class="scriptbasic greyout"><div class="imgs-title" style="color:#01B26E;">Script Basic</div></div> </a></li>
      <li><a href="execute_sql_online.php"> <div class="sqllite greyout"><div class="imgs-title" style="color:#01415C;">SQLite SQL</div></div> </a></li>
      <li><a href="execute_tcl_online.php"> <div class="tcl greyout"><div class="imgs-title" style="color:#D03904;">Tcl</div></div> </a></li>
      <li><a href="execute_unlambda_online.php"> <div class="unlambda greyout"><div class="imgs-title" style="color:#D63664;">Unlambda</div></div> </a></li>
      <li><a href="compile_vb.net_online.php"> <div class="vb-net greyout"><div class="imgs-title" style="color:#CA81DD;">VB.NET</div></div> </a></li>
      <li><a href=""><div class="oraclexe greyout"><div class="imgs-title" style="color:#0D5073;">Results</div></div> </a></li>
      <li><a href=""> <div class="powershell greyout"><div class="imgs-title" style="color:#434343;">PowerShell</div></div></a></li>
 

      <li><a href=""> <div class="numpy greyout"><div class="imgs-title" style="color:#5383c3;">GOVERNMENT</div></div></a></li>
      <li><a href=""> <div class="verilog greyout"><div class="imgs-title" style="color:#04959A;">SHOPPING</div></div> </a></li>
      <li><a href=""> <div class="whitespace greyout"><div class="imgs-title" style="color:#0069AB;">U &amp; HOME</div></div> </a></li>  
      <li><a href=""> <div class="r-programming greyout"><div class="imgs-title" style="color:#b7241d;">Coding</div></div></a></li>
      <li><a href=""> <div class="node greyout"><div class="imgs-title" style="color:#88C345;">Travel</div></div></a></li>
      <li><a href=""> <div class="memcached greyout"><div class="imgs-title" style="color:#434343;">Foodies</div></div></a></li>
      <li><a href=""> <div class="befunge greyout"><div class="imgs-title" style="color:#4db748;">e-Banking</div></div> </a></li>

<div class="container"> 
<div class="row featured-boxes">
  <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp; Results</p>
    <ul class="sprite">
      <li><a href="/category/results/"><div class="mysql greyout"><div class="imgs-title" style="color:#0D5073;">ENGINEERING</div></div> </a></li>
      <li><a href="/category/results/"><div class="bash greyout"><div class="imgs-title" style="color:#03b5a5;"> Medical </div></div> </a></li>
      <li><a href="/category/results/"><div class="sympy greyout"><div class="imgs-title" style="color:#6ec13d;">UPSC</div></div></a></li>
      <li><a href="/category/results/"><div class="go greyout"><div class="imgs-title" style="color:#8978E0;">BANK </div></div> </a></li>
      <li><a href="/category/results/"><div class="mongodb greyout"><div class="imgs-title" style="color:#412d22;">HIGH SCHOOL</div></div></a></li>
      <li><a href="/category/results/"><div class="erlang greyout"><div class="imgs-title" style="color:#8E002F;">Intermediate</div></div> </a></li>
    </ul>
</div>
</div> 
    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;MEDICAL </p>
    <ul class="sprite">
      <li><a href="/category/medical/"> <div class="gnat greyout"><div class="imgs-title" style="color:#29abe1;">MBBS</div></div></a></li>
      <li><a href="/category/medical/md.php"><div class="centos greyout"><div class="imgs-title" style="color:#8f227d;">MD</div></div></a></li> 
      <li><a href="/category/medical/bpharma.php"> <div class="freebasic greyout"><div class="imgs-title" style="color:#43C2CB;">B.Pharma</div></div> </a></li>
      <li><a href="/category/medical/bams.php"> <div class="assembly greyout"><div class="imgs-title" style="color:#113b6a;">BAMS</div></div> </a></li>
      <li><a href="/category/medical/bms.php"> <div class="cplus11 greyout"><div class="imgs-title" style="color:#0CD4B0;">BMS</div></div> </a></li>
      <li><a href="/category/medical/bhms.php"> <div class="dlang greyout"><div class="imgs-title" style="color:#FF540C;">BHMS</div></div> </a></li>
      
    </ul>
</div>
</div>

<div class="container"> 
<div class="row featured-boxes">
 <p class="center" style="margin-left:100px;font-size:22px; position:relative; color:#434343;margin:20px 0px 30px 0px;"> &nbsp;&nbsp;COMMERCE</p>
    <ul class="sprite">
      <li><a href="/category/commerce/"> <div class="embedc greyout"><div class="imgs-title" style="color:#85C50D;"> CA </div></div> </a></li>
      <li><a href="/category/commerce/cfa.php"> <div class="coldfusion greyout"> <div class="imgs-title" style="color:#437397;">CFA</div></div> </a></li>
      <li><a href="/category/commerce/cs.php"> <div class="cplusox greyout"><div class="imgs-title" style="color:#C1C204;">CS</div></div> </a></li>
      <li><a href="/category/commerce/mba.php"> <div class="whitespace greyout"><div class="imgs-title" style="color:#0069AB;">MBA</div></div> </a></li> 
      <li><a href="/category/commerce/bcom.php"> <div class="kshshell greyout"><div class="imgs-title" style="color:#87AD00;">B.COM</div></div> </a></li>
      <li><a href="/category/commerce/mcom.php"><div class="fortran95 greyout"><div class="imgs-title" style="color:#CA81DD;">M.COM</div></div></a></li>
      <li><a href="/category/others/e-banking.php"> <div class="befunge greyout"><div class="imgs-title" style="color:#4db748;">e-Banking</div></div> </a></li>
      <li><a href=""><div class="factor greyout"><div class="imgs-title" style="color:#8154BB;"> Maharatna</div></div> </a></li>
      <li><a href=""><div class="php greyout"><div class="imgs-title" style="color:#0D7FB3;">Navratna</div></div> </a></li>
      <li><a href=""><div class="forth greyout"><div class="imgs-title" style="color:#E43BA0;">Others</div></div> </a></li>
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