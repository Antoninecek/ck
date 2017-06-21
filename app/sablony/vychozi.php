<!doctype html>
<html>
<head>
    <base href="<?= ROOT_DIR ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= STATIC_IMG ?>favicon-32x32.png">

    <title>FAB - <?= $titulek ?></title>

    <!-- Bootstrap core CSS -->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <script src="<?= ROOT_DIR ?>jquery/jquery-1.9.1.min.js"></script>
    <script src="<?= ROOT_DIR ?>bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= ROOT_DIR ?>bootstrap/css/bootstrap.min.css">
    <link href="<?= STATIC_CSS ?>mycss.css" rel="stylesheet" type="text/css">

</head>
<body>

<!-- Navigation -->
<nav id="navigace" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">KONFIGURÁTOR PŘÍSTUPOVÝCH SYSTÉMŮ</a>
        </div>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="onas">O nás</a>
                </li>
                <li>
                    <a href="kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
        <!-- /.Konec -->
    </div>
    <!-- /.container -->
</nav>

<div id="content" class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?= $content ?>
        </div>
    </div>
</div>


<footer class="footer">
    <span class="copyright">Copyright © JPM Group s.r.o. 2016 </span>
</footer>

</body>
</html>