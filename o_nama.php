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
            <h2 class="super">O NAMA</h2><br><br>
            <div class="row" style="background: radial-gradient(ellipse farthest-corner at 50% 50%,#f4f5f5 0%,#afb0b3 100%); color:#00f; width:102%;">
                <div class="col-lg-12">
                    <img src="images/pansport-sivi-logo.png" class="img-responsive" alt="logo"><br>
                    <p style="color:#000;">U moderno vreme neuravnotežene ishrane i smanjene fizičke aktivnosti, suplementi predstavljaju neizostavni deo Vašeg života, ukoliko brinete o svom zdravlju. Briga o porodici i bližnjima je jedna od najlepših ljudskih osobina, a njena najvažnija odlika je briga o zdravlju.</p>
                    <br>
                    <p style="color:#000;">Uz veliki entuzijazam, posvećenost i ljubav prema zdravom životu, sportu i pravilnoj ishrani, sredinom 2001. godine otvorena je prva Pansport prodavnica u Novom Sadu. U toku 15 godina poslovanja koje su usledile, Pansport postaje jedan od vodećih ovlašćenih uvoznika i distributera prirodnih dodataka ishrani za sportiste i rekreativce na ovdašnjem tržištu. Širimo mrežu svojih maloprodajnih objekata, i sada ih je 24 u Srbiji (u Beogradu 6, u Novom Sadu 3, u Nišu 2, a u ostalim gradovima gde smo prisutni po jedna) i 3 u Bosni i Hercegovini (u Banja Luci, Bijeljini i Tuzli).</p>
                    <br>
                    <p style="color:#000;">U manjiim gradovima i selima širom Srbije, Pansport snabdeva potrošače preko mreža apoteka, teretana, fitnes centara i direktnih distributera, kojih ima preko dvesto, što potrošačima sa ovih prostora omogućava da dođu do neophodnih dodataka ishrani. Pre svega tu mislimo na vitamine, minerale, biljne ekstrakte, proteine, kreatin, NO reaktore, amino kiseline, zatim, preparate koji se koriste za lakše i brže dobijanje telesne i mišićne mase, suplemente za poboljšanja opšteg zdravlja, sagorevače masti, preparate za oporavak, sportsku opremu i još mnogo toga. Kvalitet i zdravstvenu ispravnost proizvoda iz Pansportovog asortimana svojim sertifikatima potvrđuju renomirani proizvođači, ali i srpske nadležne institucije (Ministarstvo zdravlja i Farmaceutski faktltet Beograd), što pozitivno govori o Pansportovoj brizi o zdravlju potrošača suplemenata.</p>
                    <br>
                    <p style="color:#000;">Pansport kompaniju čini mlad i ambiciozan tim stručnih ljudi iz oblasti fitnesa, nutricionizma, medicine, kao i sporta i suplementacije.</p>
                    <br>
                    <p style="color:#000;">Kako bi održali korak s trendovima, pored sajta <a href="#">www.pansport.eu</a> stručni saradnici daju sve potrebne informacije na Pansport-ovom forumu, kao i na fan stranici društvene mreže Facebook u okviru koje možete aktivno učestvovati u diskusijama, dobiti odgovore na sva pitanja i informisati se o akcijama i super ponudama.</p>
                    <br>
                    <p style="color:#000;">U skladu sa trendovima, Pansport ima i svoj YouTube kanal, na kojem možete pogledati sve video-izveštaje Pansporta, sa takmičenja koje organizujemo i manifestacija na kojima učestvujemo, i Instagram profil na kojem možete pratiti i zanimljivosti koje se svakodnevno dešavaju unutar kompanije i osetiti da ste deo velike Pansport porodice.</p>
                    <br>
                    <h4>Kontakt</h4>
                    <p style="color:#000;"><b>Tel:</b> 021/820-245</p>
                    <p style="color:#000;"><b>Fax:</b> 021/820-555</p>
                    <p style="color:#000;"><b>Mob:</b> 062/111-0-999</p>
                    <br>
                    <p style="color:#000;"><b>E-mail:</b> <a href="mailto:info@pansport.eu">info@pansport.eu</a></p>
                    <br>
                    <p style="color:#000;"><b>Adresa:</b> Stevana Peci Popovića 21, Veternik</p>
                    <br>
                    <p style="color:#000;">Podatke za identifikaciju možete preuzeti sa <a href="#">kontakt stranice</a>.</p>
                    <br>



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


