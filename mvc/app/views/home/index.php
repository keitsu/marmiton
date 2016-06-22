<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Marmiton - La délicieuse recette</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../../../asset/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
    <link href="../../../../asset/node_modules/jquery.rateit/scripts/rateit.css" rel="stylesheet">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed prim" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="logo" src="../../../../asset/img/marmiton-logo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Actualité</a></li>
                <li><a href="Recette.php">Recettes</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form id="gauche" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input class="form-control" placeholder="Search" type="text">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</nav>

<!--SLIDE-->
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img_car" src="../../../../asset/img/open-uri20140320-5908-32t09.jpeg" alt="AVANT PREMIERE">
                <div class="carousel-caption">
                    <h3>AVANT PREMIERE</h3>
                    <p>Le 14 dÃ©cembre, la BNP bÃ©nÃ©ficie dâ€™une projection avant-premiÃ¨re du nouveau Star Wars. Les places sont disponibles Ã  lâ€™achat sur la billetterie du CE</p>
                </div>
            </div>

            <div class="item">
                <img class="img_car" src="../../../../asset/img/Fleur-2.jpg" alt="Voyage">
                <div class="carousel-caption">
                    <h3><font color="black">Voyage</font></h3>
                    <p><font color="black">Un voyage collectif est organisÃ© : en OuzbÃ©kistan. Des places sont encore disponibles.</font></p>
                </div>
            </div>

            <div class="item">
                <img class="img_car" src="../../../../asset/img/viande.jpg" alt="Colonie">
                <div class="carousel-caption">
                    <h3>Colonie</h3>
                    <p>Une colonie de vacances en Midi-PyrÃ©nÃ©es a Ã©tÃ© rÃ©servÃ©e par le CE pour les enfants des salariÃ©s BNP Paribas et ses filiales.</p>
                </div>
            </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--TEMOIGNAGES-->

<section>
    <div class="row">
        <div class="col-4">
            <img src="homme.jpg" class="imgcharacters" />
            <p><strong>Bernard Bnp : </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget libero neque. Duis nibh dui, pulvinar a euismod ut, vestibulum ut ipsum. Nunc viverra vehicula tortor, sed aliquet est egestas interdum. Donec tincidunt eu nibh eu congue. Suspendisse sit amet est sit amet risus scelerisque faucibus. Morbi ex leo, luctus et mi id, tempor sollicitudin diam. Phasellus ac congue mauris. Integer nec leo sed odio vestibulum iaculis at sed elit.dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-4">
            <img src="femme.jpg" class="imgcharacters" />
            <p><strong>Morgan Sect : </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et lacus eu massa sodales ultrices. Etiam sagittis elementum tellus, id consectetur lacus vestibulum quis. Duis ullamcorper sit amet est eu ornare. Sed in turpis fermentum, laoreet diam quis, blandit mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam viverra vulputate ex quis ultrices. Integer condimentum dapibus nulla at luctus. Morbi rutrum lacinia quam, et.</p>
        </div>
        <div class="col-4">
            <img src="femme2.jpg" class="imgcharacters" />
            <p><strong>Christine Mureaux : </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut turpis at quam malesuada varius. Duis purus felis, rhoncus at consectetur ac, rhoncus eu justo. Aliquam congue ut sapien et auctor. Nulla porttitor pellentesque erat in elementum. Maecenas varius justo a blandit venenatis. Mauris ac velit commodo, pellentesque dolor in, molestie ex. Sed pretium urna ut lectus ultricies ultrices. Sed condimentum, dolor ac pretium suscipit, justo risus porta sem, in.</p>
        </div>
    </div>
</section>


<!-- jQuery -->
<script src="../../../../asset/bootstrap-3.3.6-dist/js/jquery-2.2.4.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../../../../asset/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="../../../../asset/node_modules/jquery.rateit/scripts/jquery.rateit.min.js"></script>

</body>

</html>