<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?= BASE_URL ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title><?= PROJECT_NAME ?></title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <style>
            body {
                min-height: 2000px !important;
                padding-top: 70px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->


    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?= PROJECT_NAME ?></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?= $controller == 'welcome' ? 'class="active"' : '' ?>><a href="#">Home</a></li>
                        <li <?= $controller == 'users' ? 'class="active"' : '' ?>><a href="users">Users</a></li>

                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <? if (!file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/' . $controller . '/' . $controller . '_' . $action . '.php</i> does not exist. Create that file.'); ?>
            <? @require "views/$controller/{$controller}_$action.php"; ?>

        </div>
        <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="vendor/components/jquery/jquery.min.js"></script>
        <script src="vendor/components/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#sortTable').DataTable();
            });
        </script>
    </body>
</html>
