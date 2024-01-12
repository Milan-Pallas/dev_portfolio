<?PHP
session_start();
require './php_functies/DBConfig.php';
include './php_functies/functies.php';
include './php_functies/isset.php';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <!-- mysc meta links -->
    <meta name="Author" value="Milan Pallas">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Moss Favicons -->
    <link rel="apple-touch-icon" sizes="120x120" href="./moss_favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./moss_favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./moss_favicons/favicon-16x16.png">
    <link rel="manifest" href="./moss_favicons/site.webmanifest">
    <link rel="mask-icon" href="./moss_favicons/safari-pinned-tab.svg" color="#679e46">
    <meta name="msapplication-TileColor" content="#93ae83">
    <meta name="theme-color" content="#93ae83">
    <!-- OpenGraph protocols -->
    <!-- <meta property="og:title" content="Het portfolio van Moss" />
    <meta property="og:type" content="webportfolio.moss" />
    <meta property="og:url" content="file:///C:\xampp\htdocs\personal_projects\dev_portfolio_of_moss" />
    <meta property="og:image" content="./moss_favicon/android-chrome-192x192.png" /> -->
    <!-- Bootstrap5 links -->
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.css">
    <script src="./bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="./bootstrap5/bootstrap-icons-1.11.1/bootstrap-icons.css">
    <!-- stylesheet links -->
    <?PHP echo link_kleurenthema(); ?>
    <link rel="stylesheet" href="./style.css">
    <title>Mijn web portfolio</title>
</head>
<body>
    <?PHP include './webelementen/navbar.php'; return_alert(); ?>
    
    <header class="d-flex align-items-center justify-content-evenly w-100 px-3 mb-5">
        <div>
            <h1>Wat meer informatie over mij</h1>
            <p>
                Mijn volledige naam is Milan Pallas. <br>
                Zie deze pagina als een zoort FAQ over mijzelf.
            </p>
        </div>
        <img class="logo ikke" src="./afbeeldingen/ik.png" alt="afbeelding van mijzelf">
    </header>

    <!-- ----------------------- -->
    <!-- Twee informatieve grids -->
    <div class="card-group grid_container">
        <!-- De eerste grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <h2>Wat voor persoon ben ik?</h2>
                <p class="text-wrap px-5">
                    Ik ben een vrij rustig persoon.
                    Gezelligheid op de werkvloer is altijd welkom, maar als het te remoerig is kan ik onrustig worden.
                    Verder ben ik heel observerend. Ik zie nog wel eens iets wat een ander niet snel opvalt.<br>
                    <a href="./statustieken_voor_nerds.php">Statustieken voor nerds</a>
                </p>
            </div>
            <div>
                <h2>Waarom maak ik niet van muziek mijn carriere?</h2>
                <p>
                    Het leven van een fulltime muzikant is niet makkelijk. <br>
                    Daarnaast hou ik muziek liever als een hobby, iets dat ik niet hoef te forceren.
                </p>
            </div>
            <div>
                <p class="highlight m-0">Mijn sterktes</p>
                <ul>
                    <li>netjes zijn met spullen</li>
                    <li>op tijd komen</li>
                    <li>geduldig zijn</li>
                </ul>
                <p class="highlight m-0">Mijn zwaktes</p>
                <ul>
                    <li>Snel conclussies trekken</li>
                    <li>communicatie</li>
                </ul>
            </div>
        </div>
        <!-- De tweede grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                <h2>Wat is mijn doel?</h2>
                <p>
                    Ik heb nog niet besloten in welke programmeertaal ik mij wil verdiepen.<br>
                    Omdat mijn frontend nog niet heel professioneel wil ik mij meer verdiepen in back-end.
                </p>
            </div>
            <div class="d-inline mt-auto h-100">
                <h2>Mijn cv, diploma's en certificaten</h2>

            </div>
            <div>
                <h2>Mijn competenties</h2>
                <ul>
                    <li><p>Observerend</p></li>
                    <li><p>Naukeurig</p></li>
                    <li><p>Serieus</p></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- -------------------- -->
    <!-- De gesoiegelde grids -->
    <div class="card-group grid_container">
        <!-- De eerste grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                
            </div>
            <div>
                
            </div>
            <div>
                
            </div>
        </div>
        <!-- De tweede grid -->
        <div class="container col-12 col-lg-6 grids mb-4">
            <div>
                
            </div>
            <div>
                
            </div>
            <div>
                
            </div>
        </div>
    </div>

    <?PHP include './webelementen/footer.php' ?>
</body>
</html>