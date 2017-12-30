<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pansport</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <style>
        legend {
            width:inherit; /* Or auto */
            padding:0 10px; /* To give a bit of padding on the left and right */
            border-bottom:none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive " src="images/logo_13.png" alt="logo">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 text-white">
                <p>021/820-555 | 062/111-0-999</p>
                <p>
                    <span class="text-minify">
                        <span class="text-warning">Na telefon smo dostupni:</span><br>
                            (pon-pet 8-16h, sub 8-14h, ned. ne radimo)
                    </span>
                </p>
                <p><a href="#" class="text-white">info@pansport.eu</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <br>
                <a href="https://www.pansport.rs/sites/default/files/bilteni/Prirucnik.pdf" class="btn btn-primary">KAKO POČETI (PDF priručnik) | <span class="glyphicon glyphicon-download-alt"></span></a>
                <p><span class="text-warning text-minify text-justify">POŠTARINA JE BESPLATNA ZA IZNOSE PREKO 5.000 RSD</span></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <br><br><br>
                <p class="text-white"><span class="text-white glyphicon glyphicon-shopping-cart"></span> Vaša korpa je prazna</p>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </div>
            <!--
                    home page
                    proizvodi
                    vesti
                    o nama
                    kontakt
                    -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">POČETNA <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">PROIZVODI</a></li>
                    <li><a href="#">VESTI</a></li>
                    <li><a href="#">O NAMA</a></li>
                    <li><a href="#">KONTAKT</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/24h_sajt_ng_akcije_copy.png" alt="caro1" style="width:100%;">
            </div>

            <div class="item">
                <img src="images/24h_sajt_nova_godina_copy.jpg" alt="caro2" style="width:100%;">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h2 class="proizvodi">PROIZVODI</h2>
            <!--<div class="btn-group-vertical" >
                <button class="btn btn-blue">
                    <a href="#">VITAMINI</a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">MINERALI</a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">VITAMINSKO MINERALNI KOMPLEKSI </a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">ANTIOKSIDANTI</a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">BILJNI EKSTRAKTI</a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">ESENCIJALNE MASNE KISELINE</a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">ZAŠTITA ZGLOBOVA</a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">AMINO KISELINE</a>
                </button>
                <button class="btn btn-blue">
                    <a href="#">PROTEINI</a>
                </button>
            </div>-->
            <div class="list-group ">
                <a href="#" class="list-group-item ">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item ">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-blue">Cras sit amet nibh libero</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-blue">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-blue">Vestibulum at eros</a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-blue">
                    <p class="list-group-item-text">List Group Item Text</p>
                </a>
                <a href="#" class="list-group-item list-group-item-blue">
                    <p class="list-group-item-text">List Group Item Text</p>
                </a>
                <a href="#" class="list-group-item list-group-item-blue">
                    <p class="list-group-item-text">List Group Item Text</p>
                </a>
            </div>

        </div>


        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 text-white">
            <h2 class="super">PROIZVODI</h2><br><br>
            <div class="row" style="background: radial-gradient(ellipse farthest-corner at 50% 50%,#f4f5f5 0%,#afb0b3 100%); color:#00f; width:102%;">
                <div class="col-lg-12" style="margin: 20px 0;">
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Amino kiseline</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Kreatin</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Povećanje performansi</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Proteinske čokoladice</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Vitamini</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Ženski kutak</button>
                        <br>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Antioksidanti</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Minerali</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Povećanje telesne težine / mišićne mase</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Sagorevači masti</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Vitaminsko mineralni kompleksi</button>
                        <br>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Biljni ekstrakti</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Oporavak i regeneracija</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Povećanje testosterona i hormona rasta</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Sportska oprema</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Zamene za obrok i proteinski napici</button>
                        <br>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Esencijalne maske kiseline</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Ostalo</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Proteini</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Transportni sistemi i NO reaktori</button>
                        <br><br>
                        <button type="button" class="btn btn-primary" style="width:100%; height:80px; white-space: normal;">Zaštita zglobova</button>
                        <br>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
    </div>
    <div class="panel-footer">

    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

