<?php   $base = $_SERVER['DOCUMENT_ROOT']; ?>
<?php   include "$base/data.php" ?>
<?php	include "$base/list_view.php" ?>
<?php   session_start(); ?>


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

                        <?php   $data = get_head($cat);
                                print_sideBar($data);
                        ?>
                        <?php include "$base/sidebar_login.php"; ?>

                    </ul>
                </div>
            <!-- navbar-collapse -->
            </nav>

        </div>

        <!-- Main Content -->
        <div class='container-fluid'>
            <div class='side-body' id='sidebody'>
                <div style='height:device-height;' class='col-md-7 middle-col'>
                    <hr/>
                    <?php
                        include "$base/android_disp_abbabba.php";
                        fetch_data($cat);
                        echo "</div>";
                    ?>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</body>
  <?php include "$base/model_bababa.php"; ?>
  <link rel="stylesheet" href="/css/css.css">
</html>

