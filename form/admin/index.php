<?php 
    include("../../config/configuration.php");

    session_start();
    if (empty($_SESSION['username']) || empty($_SESSION['password']) || $_SESSION['role'] != "admin" ) {
        echo "<script>window.location.href='login.php'</script>";
    } else {
        $page = "";
        if (isset($_GET["p"])) {
            $page = $_GET["p"];
        }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dispusip</title>

    <!-- Libraries -->
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../lib/summernote/summernote.css" rel="stylesheet">
    <!-- <link href="../../lib/css/plugins/summernote/summernote.css" rel="stylesheet"> -->
    <!-- <link href="../../lib/css/plugins/summernote/summernote-bs3.css" rel="stylesheet"> -->
    <link href="../../lib/css/style.css" rel="stylesheet">

    <!-- Customize user -->
    <link href="../../css/default.css" rel="stylesheet">


</head>

<body class="body-admin">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <!-- <span><img alt="image" class="img-circle" src="img/profile_small.jpg" /></span> -->
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold"><?php echo $_SESSION['nama'];?></strong>
                             </span> <span class="text-muted text-xs block">Web Director</span> </span> 
                        </div>
                        <div class="logo-element">
                            DS
                        </div>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Menu</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="?p=index">Content Artikel</a></li>
                          
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12" style="padding: 0px;">
                    <?php 
                        switch ($page) {
                            case 'create-artikel':
                                include("create_artikel.php");
                                break;                                                       
                            default:
                                include("admin_list_artikel.php");
                                break;
                        }
                    ?>
                </div>
            </div>
            <div class="footer">
                <div>
                    <strong>Copyright</strong> Dispusip DKI Jakarta &copy; 2017
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../../lib/js/jquery-2.1.1.js"></script>
    <script src="../../lib/js/bootstrap.min.js"></script>
    <script src="../../lib/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../lib/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../lib/js/inspinia.js"></script>
    <script src="../../lib/js/plugins/pace/pace.min.js"></script>

    <!-- SUMMERNOTE -->
    <!-- <script src="../../lib/js/plugins/summernote/summernote.min.js"></script> -->
    <!-- <script src="../../lib/js/plugins/summernote/summernote.js"></script> -->
    <script src="../../lib/summernote/summernote.js"></script>

    <!-- Typehead.js -->
    <script src="../../lib/typeahead/typeahead.bundle.js"></script>

    <!-- Custom User -->
    <script src="../../js/main-admin.js"></script>

   
</body>
</html>
<?php } ?>