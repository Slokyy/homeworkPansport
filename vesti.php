<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pansport</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">

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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">POČETNA</a></li>
                    <li><a href="proizvodi.php">PROIZVODI</a></li>
                    <li class="active"><a href="vesti.php">VESTI <span class="sr-only">(current)</span></a></li>
                    <li><a href="o_nama.php">O NAMA</a></li>
                    <li><a href="kontakt.php">KONTAKT</a></li>
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
            <h2 class="proizvodi">PROIZVODI<span class="supericony"><span class="glyphicon glyphicon-flash"></span><span class="glyphicon glyphicon-flash"></span><span class="glyphicon glyphicon-flash"></span></span></h2>
            <nav class="nav-sidebar">
                <div class="row">
                    <button class="btn btn-blue btn-block hidden-lg hidden-md hidden-sm col-xs-12 " data-toggle="collapse" data-target="#side"><span class="glyphicon glyphicon-align-justify"></span></button>
                </div>
                <div class="list-group collapsed-xs" id="side">
                    <a href="#" class="list-group-item ">VITAMINI</a>
                    <a href="#" class="list-group-item ">MINERALI</a>
                    <a href="#" class="list-group-item ">VITAMINSKO MINERALNI KOMPLEKSI</a>
                    <a href="#" class="list-group-item ">ANTIOKSIDANTI</a>
                    <a href="#" class="list-group-item ">BILJNI EKSTRAKTI</a>
                    <a href="#" class="list-group-item ">ESENCIJALNE MASNE KISELINE</a>
                    <a href="#" class="list-group-item ">ZAŠTITA ZGLOBOVA</a>
                    <a href="#" class="list-group-item ">AMINO KISELINE</a>
                    <a href="#" class="list-group-item ">POVEĆANJE TELESNE TEŽINE</a>
                    <a href="#" class="list-group-item ">SAGOREVAČI MASTI</a>
                    <a href="#" class="list-group-item ">KREATIN</a>
                    <a href="#" class="list-group-item ">TRANSPORTNI SISTEM INO REAKTORI</a>
                    <a href="#" class="list-group-item ">POVEĆANJE PERFORMANSI</a>
                    <a href="#" class="list-group-item ">OPORAVAK I REGENERACIJA</a>
                    <a href="#" class="list-group-item ">POVEĆANJE TESTOSTERONA I HORMONA RASTA</a>
                    <a href="#" class="list-group-item ">ZAMENE ZA OBROK I PROTEINSKI NAPICI</a>
                    <a href="#" class="list-group-item ">PROTEINSKE ČOKOLADICE</a>
                    <a href="#" class="list-group-item ">SPORTSKA OPREMA</a>
                    <a href="#" class="list-group-item ">OSTALO</a>
                    <a href="#" class="list-group-item zene ">ŽENSKI KUTAK</a>
                </div>
                <div class="row bg-black">
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <h2 class="proizvodi text-white text-center">U PONUDI <span class="supericonf">///</span></h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/4badc3ac17da6.png" alt="baner1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/285-x-135-alimenta.png" alt="baner2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/biotechusa_logo_1__0.png" alt="baner3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/bodyattack.png" alt="baner4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/dym_2016.png" alt="baner5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/efx.png" alt="baner6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/ess_j.jpg" alt="baner7">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/grenade.jpg" alt="baner8">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/labrada.png" alt="baner9">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/logoinkosporwhite.png" alt="baner10">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/maxler.png" alt="baner11">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/mp.png" alt="baner12">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/muscle-tech.png" alt="baner13">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/natrol-inc.png" alt="baner14">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/now-foods.png" alt="baner15">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/nut.png" alt="baner16">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/power.png" alt="baner17">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/prolab_0.png" alt="baner18">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/san_logo.png" alt="baner19">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/scitec-nutrition.png" alt="baner20">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/sportska-oprema.png" alt="baner21">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/syntrax_logomali_0.png" alt="baner22">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/twinlab.png" alt="baner23">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="images/baneri/uni.png" alt="baner24">
                    </div>
                </div>
            </nav>
        </div>


        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 text-white">
            <h2 class="super">VESTI</h2><br><br>
            <div class="row" style="color:#00f; width:102%; margin: 20px 0;">
                    <div class="col-lg-6 hidden-sm hidden-xs">
                        <img class="img-responsive" src="images/kikinda-1_5.jpg" alt="kikinda">
                    </div>

                    <div class="col-lg-6" style="margin-left:-30px; margin-top:-20px;">
                        <h3 class="text-white" style="background-color:#091842; padding:10px; width:107%;" align="center"><i>Radno vreme MP Pansport Kikinda</i></h3>
                        <div class="text-white" style="background-color:rgba(3,13,70,0.4); padding:10px 10px 10px 30px; width:107%; margin-top:-10px;">
                            <p>Obaveštavamo cenjene kupce da će maloprodajni objekat Pansporta Kikinda od 03.01.2018. do 16.01.2018. godine raditi skraćeno od 12 do 20 časova</p>
                            <span style="color:#1b4296;"><i>28.12.2017</i></span>
                            <span style="color:#d7d02c; float:right"><i>#Vesti iz Pansporta</i></span>
                        </div>
                    </div>
            </div>
            <br><br>

            <div class="row" style="color:#00f; width:102%; margin: 20px 0;">

                <div class="col-lg-6">
                    <h3 class="text-white" style="background-color:#091842; padding:10px; width:107%;" align="center"><i>NERADNI DANI KOMPANIJE PANSPORT</i></h3>
                    <div class="text-white" style="background-color:rgba(3,13,70,0.4); padding:10px 10px 10px 30px; width:107%; margin-top:-10px;">
                        <p>Obaveštavamo cenjene kupce da kompanija Pansport 01.01. i 02.01.2018. godine neće raditi.</p>
                        <span style="color:#1b4296;"><i>27.12.2017</i></span>
                        <span style="color:#d7d02c; float:right"><i>#Vesti iz Pansporta</i></span>
                    </div>
                </div>

                <div class="col-lg-6 hidden-sm hidden-xs" style="margin-top:20px;">
                    <img class="img-responsive" src="images/pansport_logo_6.png" alt="pansport">
                </div>
            </div>
            <br><br>

            <div class="row" style="color:#00f; width:102%; margin: 20px 0;">
                <div class="col-lg-6 hidden-sm hidden-xs">
                    <img class="img-responsive" src="images/kragujevac_7.jpg" alt="kragujevac">
                </div>

                <div class="col-lg-6" style="margin-left:-30px; margin-top:-20px;">
                    <h3 class="text-white" style="background-color:#091842; padding:10px; width:107%;" align="center"><i>Radno vreme MP Pansport Kragujevac</i></h3>
                    <div class="text-white" style="background-color:rgba(3,13,70,0.4); padding:10px 10px 10px 30px; width:107%; margin-top:-10px;">
                        <p>Obaveštavamo cenjene kupce da će maloprodajni objekat Pansporta Kragujevac od 28.12.2017. do 04.01.2018. godine raditi skraćeno od 12 do 20 časova</p>
                        <span style="color:#1b4296;"><i>27.12.2017</i></span>
                        <span style="color:#d7d02c; float:right"><i>#Vesti iz Pansporta</i></span>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="row" style="color:#00f; width:102%; margin: 20px 0;">

                <div class="col-lg-6">
                    <h3 class="text-white" style="background-color:#091842; padding:10px; width:107%;" align="center"><i>Radno Vreme MP Pansport Zemun</i></h3>
                    <div class="text-white" style="background-color:rgba(3,13,70,0.4); padding:10px 10px 10px 30px; width:107%; margin-top:-10px;">
                        <p>Obaveštavamo cenjene kupce da će maloprodajni objekat Pansporta Zemun od 03.01.2018. do 15.01.2018. godine raditi skraćeno od 12 do 20 časova</p>
                        <span style="color:#1b4296;"><i>26.12.2017</i></span>
                        <span style="color:#d7d02c; float:right"><i>#Vesti iz Pansporta</i></span>
                    </div>
                </div>

                <div class="col-lg-6 hidden-sm hidden-xs" style="margin-top:20px;">
                    <img class="img-responsive" src="images/zemun_4.jpg" alt="pansport">
                </div>
            </div>
            <br><br>

            <div class="row" style="color:#00f; width:102%; margin: 20px 0;">
                <div class="col-lg-6 hidden-sm hidden-xs">
                    <img class="img-responsive" src="images/valjevo_9.jpg" alt="kragujevac">
                </div>

                <div class="col-lg-6" style="margin-left:-30px; margin-top:-20px;">
                    <h3 class="text-white" style="background-color:#091842; padding:10px; width:107%;" align="center"><i>Radno vreme MP Pansport Valjevo</i></h3>
                    <div class="text-white" style="background-color:rgba(3,13,70,0.4); padding:10px 10px 10px 30px; width:107%; margin-top:-10px;">
                        <p>Obaveštavamo cenjene kupce da će maloprodajni objekat Pansport Valjevo od 03.01.2018. do 19.01.2018. godine raditi skraćeno od 12 do 20 časova</p>
                        <span style="color:#1b4296;"><i>26.12.2017</i></span>
                        <span style="color:#d7d02c; float:right"><i>#Vesti iz Pansporta</i></span>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
    </div>

</div>
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-9 col-xs-12">
                <h2 class="foot">BRZI LINKOVI<span class="supericonf">///</span></h2>
                <div class="list-group">
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> KAKO SE KUPUJE?</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> POŠTARINA I ISPORUKA</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> POVRAT ROBE I ZAMENA</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> TEKSTOTEKA</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FITNES CENTRI</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> PANSPORT PRODAVNICE</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xs-12">
                <h2 class="foot">NAŠE PRODAVNICE<span class="supericonf">///</span></h2>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="list-group">
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> BANJA LUKA</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> BIJELINA</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> KIKINDA</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> KRALJEVO</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> LESKOVAC</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> NOVI PAZAR</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> PANČEVP</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> ŠABAC</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> SOMBOR</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> TUZLA</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> VRANJE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="list-group">
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> BEOGRAD</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> ČAČAK</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> KRAGUJEVAC</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> KRUŠEVAC</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> NIŠ</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> NOVI SAD</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> PODGORICA</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> SMEDEREVO</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> SUBOTICA</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> VALJEVO</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> ZRENJANIN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xs-12">
                <h2 class="foot text-center">SOCIAL<span class="supericonf">///</span></h2>
                <div class="social-networks">
                    <div class="list-group">
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UC61-CuHIhkpyE-2gUYFywlQ/videos" class="youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.facebook.com/Pansport" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/pansport_suplementacija/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xs-12">
                <h2 class="foot">PRIJAVITE SE ZA NEWSLETTER!<span class="supericonf">///</span></h2>
                <div class="jumbotron blue text-center">
                    <p style="font-size: 10pt;">Od nas ćeš dobiti jedan e-mail nedeljno sa nekom od pažljivo pripremljenih promotivnih akcija ili super ponuda. Poslaćemo ti i poslednje tekstove i savete. Obećavamo da tvoj email nećemo deliti trećim licima. Uvek ćeš moći da se odjaviš.</p>
                </div>
                <br>
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Ime" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </button>
                    </span>

                    <input type="text" class="form-control"  placeholder="E-mail" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
                <button class="btn btn-blue-o">
                    <a href="#">Prijavi me </a><i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2017/2018 Školski projekat </p>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>



