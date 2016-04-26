<?php ob_start(); ?>
<?php $base = $_SERVER['DOCUMENT_ROOT']; ?>
<?php   include "$base/search/search_data.php" ?>
<?php	include "$base/list_view.php" ?>
<?php   $search = filter_var($_GET['search'], FILTER_SANITIZE_STRING); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title> Search LinkBazaar</title>
    <link rel="icon" type="image/png" href="/images/logo.png" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta charset="utf-8"/>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <link rel='stylesheet' href='/css/bootstrap.min.css'><!--3.3.0-->
    <!-- Latest compiled and minified JavaScript -->
    <!--3.3.0-->
    <script src='/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='/css/style-min-v1.css'>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/css/button.css'>
    <script type='text/javascript' src='/js/click.js'></script>
</head>

<body>
    <div class='row'>
        <!-- uncomment code for absolute positioning tweek see top comment in css -->
        <!-- <div class='absolute-wrapper'> </div> -->
        <!-- Menu -->
        <div class='side-menu'>
            <nav class='navbar navbar-default' role='navigation'>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class='navbar-header'>
                    <div class='brand-wrapper'>
                        <!-- Hamburger -->
                        <button type='button' class='navbar-toggle'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                        </button>

                        <!-- Brand -->
                        <div class='brand-name-wrapper'>
                            <a class='navbar-brand' href='/'>
                                LINKBAZAAR
                            </a>
                        </div>

                        <!-- Search -->
                        <a data-toggle='collapse' href='#search' class='btn btn-default' id='search-trigger'>
                            <span class='glyphicon glyphicon-search'></span>
                        </a>

                        <!-- Search body -->
                        <div id='search' class='panel-collapse collapse'>
                            <div class='panel-body'>
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
                <div class='side-menu-container'>
                    <ul class='nav navbar-nav' data-role='slide-in'>
                           
                        <?php   $data = get_maincat($search);
                                print_sideBar($data);
                        ?>
                        <!--
                        <li><a href='#'><span class='glyphicon glyphicon-send'></span> Link</a></li>
                        <li class='active'><a href='#'><span class='glyphicon glyphicon-plane'></span> Active Link</a></li>
                        <li><a href='#'><span class='glyphicon glyphicon-cloud'></span> Link</a></li>
                        -->
                        <!-- Dropdown-->
                        <?php include "$base/sidebar_login.php"; ?>
                        
                        <li><a href='#' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-signal'></span>Submit Your Link</a></li>
                    </ul>
                </div>
            <!-- /.navbar-collapse -->
            </nav>

        </div>

        <!-- Main Content -->
        <div class='container-fluid'>
            <div class='side-body' id='sidebody'>
                <div style='height:device-height;' class='col-md-7 middle-col'>
                <hr>
                    <style>
                        .panel-title>a{
                            text-decoration: none;
                        }
                        .cate_name{
                        	text-transform:uppercase;
                        }
                    </style>
                <?php
                    $agent=$_SERVER['HTTP_USER_AGENT'];
                    $t=preg_match('/android/i', $agent);
                    if($t)
                    {
                        include "$base/android_disp_abbabba.php";
                        fetch_data($search);
                        echo "</div>";
                    }
                    else
                    {
                        include "$base/lappi_disp_abbabba.php";
                        fetch_data($search);
                    }
                ?>
                    <!-- PRINTING ENDS HERE -->
                </div>
            </div>
        </div>
    </div>
</body>
  <?php include "$base/model_bababa.php"; ?>
</html>

