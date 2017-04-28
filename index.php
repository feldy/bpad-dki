<?php include("config/configuration.php");?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dosir Dispusip</title>
        
        <!-- Libraries -->
        <link href="lib/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="lib/css/style.css" rel="stylesheet">

        <!-- Customize user -->
        <link href="css/default.css" rel="stylesheet">
    </head>
    <!-- <body class="body-content"> -->
    <body class="">
        <div id="wrapper">
            <div id="page-wrapper" style="margin-left: 0px;min-height: inherit;" class="gray-bg dashbard-1">
               <!--  <nav class="navbar navbar-default navbar-fixed-top">
                  <div class="container">
                        <div class="navbar-header">
                            <a href="?p=home"><img alt="Brand" class="img-responsive" width="130px" src="images/siDOEL.png"></a>
                        </div>
                  </div>
                </nav> -->
                <div class="row border-bottom white-bg dashboard-header">
                    <div class="col-lg-2 ibox-content ibox-heading">
                        <?php include("form/templates/container_left.php");?>
                    </div>
                    <div class="col-lg-7">
                        <?php include("form/templates/container_center.php");?>
                    </div>
                    <div class="col-lg-3">
                        <?php include("form/templates/container_right.php");?>
                    </div>
                </div>
                <div class="footer">
                    <div>
                        <strong>Copyright</strong> Dispusip DKI Jakarta &copy; 2017
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>