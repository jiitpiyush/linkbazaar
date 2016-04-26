<?php session_start(); ?>
<?php $base = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include "$base/inc_patr/get_redirect_url.php"; ?>
<?php include "$base/account/lb_user_data.php"; ?>
<?php include "$base/list_view.php"; ?>

<?php 
        $id = $_SESSION['id'];
        if($_SESSION['f_login'] == 1){
            $url = "http://graph.facebook.com/$id/picture?width=200&height=200";
            $url = get_final_url($url);
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>LinkBazaar</title>
    <link rel="icon" type="image/png" href="/images/logo.png" />
    <meta charset="utf-8"/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script src="/js/jquery.min.js"></script>
    <!--3.3.0-->


    <link rel='stylesheet' href='/css/bootstrap.min.css'>
    <script src='/js/bootstrap.min.js'></script>
    <link rel='stylesheet' type='text/css' href='/css/style-min-v1.css'>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/css/button.css'>
    <link rel="stylesheet" href='/css/profile.css'>
    <script type='text/javascript' src='/js/click.js'></script>
    <script type="text/javascript" src='/js/profile.js'></script>
</head>

<body>
    <div class='row'>
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
                                    <input type="text" id="search-box" name="search" class="form-control" placeholder="Search" autofocus>
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
                    <li><a href='#'><span class='glyphicon glyphicon-cog'></span> Account Settings</a></li>
                    <!-- Dropdown-->
                        <!--
                        <li class='panel panel-default' id='dropdown'>
                            <a data-toggle='collapse' href='#dropdown-lvl1'>
                                <span class='glyphicon glyphicon-user'></span> Sub Level <span class='caret'></span>
                            </a>

                            <!- Dropdown level 1 -->
                            <!--
                            <div id='dropdown-lvl1' class='panel-collapse collapse'>
                                <div class='panel-body'>
                                    <ul class='nav navbar-nav'>
                                        <li><a href='#'>Link</a></li>
                                        <li><a href='#'>Link</a></li>
                                        <li><a href='#'>Link</a></li>
                                    -->
                                    <!-- Dropdown level 2 -->
                                        <!--
                                        <li class='panel panel-default' id='dropdown'>
                                            <a data-toggle='collapse' href='#dropdown-lvl2'>
                                                <span class='glyphicon glyphicon-off'></span> Sub Level <span class='caret'></span>
                                            </a>
                                            <div id='dropdown-lvl2' class='panel-collapse collapse'>
                                                <div class='panel-body'>
                                                    <ul class='nav navbar-nav'>
                                                        <li><a href='#'>Link</a></li>
                                                        <li><a href='#'>Link</a></li>
                                                        <li><a href='#'>Link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    -->
                    <?php include "$base/s_sidebar_login.php"; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

    </div>

    <!-- Main Content -->
    <div class='container-fluid'>
        <div class='side-body' id='sidebody'>
            <div style='height:device-height;' class='col-md-7 middle-col'>
                <div class="col-lg-6 col-sm-6">
                    <div class="card hovercard">
                        <div class="card-background">
                            <img class="card-bkimg" alt="" src=<?php echo $url; ?>>
                            <!-- http://lorempixel.com/850/280/people/9/ -->
                        </div>
                        <div class="useravatar">
                            <img alt="" src=<?php echo $url; ?>>
                        </div>
                        <div class="card-info"> <span class="card-title"> <?php echo $_SESSION['Username']; ?> </span></div>
                    </div>
                    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a  href="/account/">
                                <button type="button" id="stars" class="btn btn-default"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                                <div class="hidden-xs">Bookmark</div>
                            </button>
                            </a>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="following" class="btn btn-primary" href="#tab2" data-toggle="tab"><img src="http://uxrepo.com/static/icon-sets/google-material/png32/256/000000/android-history-256-000000.png" width=28.05px height=24px/>
                                <div class="hidden-xs">History</div>
                            </button>
                        </div>
                        <!--
                        <div class="btn-group" role="group">
                            <button type="button" id="favorites" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <div class="hidden-xs">Favorites</div>
                            </button>
                        </div>
                        -->
                        
                    </div>

                    <div class="well">
                        <div class="tab-content">
                            <div class="tab-pane fade in" id="tab1">
                            </div>
                            <div class="tab-pane fade in active" id="tab2">
                                <h3>History</h3>
                                <?php
                                    include "$base/android_disp_abbabba.php";
                                    get_history();
                                    echo "</div>";
                                ?>

                            </div>
                            <!--
                            <div class="tab-pane fade in" id="tab3">
                            <h3>This is tab 3</h3>
                            </div>
                            -->
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include "$base/model_bababa.php"; ?>
<link rel="stylesheet" href="/css/css.css">
</html>

