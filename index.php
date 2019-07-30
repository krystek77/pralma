<?php
header("Content-Type: text/html; charset=utf-8");

require_once("cnf/class.pagecons.php");

if (!isset($_GET["sec"])) {
    $_GET["sec"] = 'main';
}
if (!isset($_GET["mid"])) {
    $_GET["mid"] = 0;
}
if (!isset($_GET["pid"])) {
    $_GET["pid"] = 0;
}

$PageCons = new PageCons($_GET["sec"], $_GET["mid"], $_GET["pid"]);

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119756763-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119756763-1');
    </script>

    <meta charset="utf-8">
    <meta name="keywords" content="wyposażenie pralni, urządzenia pralnicze, wirówka do prania, pralnie przemyslowe, wieszaki pralnicze, pralki przemysłowe, pralnicowirówki,pralnico-wirówki, pralnicowirówka przemysłowa, wysokoobrotowe, pralus, sovrana, lant, fagor, masłów, kielce, skantrade, szybkoobrotowe, suszarki komorowe, pralnice przemysłowe, pramazut, urządzenia pralnicz, maszyny pralnicze, unimac, primus, ipso, samoobsługowe, profservice, fibrimatic, suszarki bębnowe, suszarki przemysłowe, pramazut, pralma, prama, ipso, unimac, primus laundry, prasownice, prasowalnice, magle, pralnicowirówka, magle przemysłowe, pralnicowirówki normalnoobrotowe, wysokoobrotowe, bariera higieny, urządzenia do pralni przemysłowej">
    <meta name="description" content="<?php $PageCons->insertMeta(); ?>">
    <title>P.P.U.P &bdquo;Pralma&ldquo; sp. z o.o. - producent przemysłowych urządzeń pralniczych</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/rodo.css" type="text/css">
    <link rel="stylesheet" href="style/pomp_detergenty.css" type="text/css" />
    <link rel="stylesheet" href="style/new.css" type="text/css" />


    <!--[if IE]><link rel="stylesheet" href="style/iefix.css" type="text/css" /><![endif]-->

    <link rel="stylesheet" href="style/print.css" type="text/css" media="print" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&amp;subset=latin-ext" rel="stylesheet">

    <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- outer scripts -->
    <script src="js/jquery/jquery.scrollTo.min.js"></script>
    <!-- producer script -->
    <script src="js/advajax.js"></script>
    <script src="js/scripts.js"></script>


    <!-- end own scripts -->

    <script>
        function init() {
            externalLinks();
            <?php
            $PageCons->StartPage();
            ?>
        }
        window.onload = init;
    </script>
    <!-- own scripts -->

    <script src="js/own.js"></script>
</head>

<body>
    <div class="page-wrapper">
        <nav class="top-nav">
            <div class="top-nav-wrapper">
                <a class="top-nav--link" href="/pages/cywilne.html">Straż pożarna i służby cywilne</a>
                <a class="top-nav--link" href="/pages/recykling.html">Recykling mediów</a>
                <a class="top-nav--link" href="/pages/softwash.html">Technologia SoftWash</a>
                <a class="top-nav--link" href="/pages/pytania.html">Q&A</a>
                <a class='top-nav--link' href="/pages/marine.html">Marynarka wojenna i armia</a>
            </div>
        </nav>
        <header id="header" class="clearfix">
            <!-- start topmenu -->
            <div id="topmenu" class="clearfix">
                <h1 id="logo">
                    <a href="producent-przemyslowych-urzadzen-pralniczych-oraz-wozkow-i-regalow-do-pralni">
                        <img class="slide" src="media/images/logos/pralma_logo_10.png" alt="" title="Przedsiębiorstwo Produkcji Urządzeń Pralniczych Pralma sp. z o.o." />
                    </a>
                    <span>Pralma - producent przemysłowych urządzeń pralniczych</span>
                </h1>
                <nav id="main-navigation">
                    <ul class="clearfix">
                        <li><a href="pralma-wyposazenie-przemyslowych-i-komercyjnych-pralni">O nas</a></li>
                        <li><a href="przemyslowe-pralnicowirowki-pralnice-suszarki-bariera-higieny-wirowki-prasownice">Produkty</a></li>
                        <li><a href="urzadzenia-pralnicze-do-hotelu-szpitali-domow-opieki-pralni-przemyslowych">Klienci</a></li>
                        <li><a href="nowoczesne-technologie-w-przemyslowych-urzadzeniach-pralniczych">Technologie</a></li>
                        <li><a href="systemy-dozujace-do-pralni-detergenty" class="trzy_e">Pompy i Chemia</a></li>
                        <li><a href="aktualnosci-i-promocje-na-pralki-przemyslowe">Wiadomości</a></li>
                        <li><a href="kontakt-do-pralma-producenta-przemyslowych-urzadzen-pralniczych" class="last">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
            <!-- END topmenu -->

            <!-- carousel -->
            <section id="carousel-wrapper">
                <h6 class="hidden-header">Przemysłowe urządzenia pralnicze - przegląd oferty i promocji</h6>
                <div class="carousel">
                    <ul class="clearfix">
                        <li class="active-slide" data-type-slide-number=1>
                            <img src="media/images/banner/pralnia_pralma.png" alt="Komercyjne i przemysłowe pralnie wodne">
                            <div class="caption-carousel one">
                                <p class="title">Komercyjne i przemysłowe pralnie wodne</p>
                                <p class="subtitle">każdego typu i wielkości</p>
                                <p class="short-info">
                                    Specjalistyczne, wysokiej jakości, komercyjne i&nbsp;przemysłowe, pełne linie
                                    technologiczne do pralni przemysłowych, dedykowane do konkretnych potrzeb, każdego rodzaju
                                    pralni i wielkości, zapewniające ekonomię i&nbsp;wysoką wydajność, całego procesu prania.
                                </p>
                                <a class="know_offer" href="projekt-wyposazenia-przemyslowej-pralni-kazdego-rodzaju-i-wielkosci">Gdzie świadczymy usługi</a>
                            </div>
                        </li>
                        <li data-type-slide-number=2>
                            <img src="media/images/banner/banner_two.png" alt="Urządzenia pralnicze do pralni samoobsługowych">
                            <div class="caption-carousel two">
                                <p class="title">Urządzenia na monety / żetony</p>
                                <p class="subtitle">Dobre rozwiązanie dla każdego przedsiębiorcy</p>
                                <p class="short-info">
                                    Pełna linia jedynych w swoim rodzaju, uruchamianych na monety, pralnicowirówek, suszarek bębnowych i prasownic,
                                    wyposażonych w innowacyjne i niezwykle wydajne funkcje zaprojektowane,
                                    aby pomóc Ci osiągnąć cele biznesowe, a&nbsp;nawet je przekroczyć.
                                </p>
                                <a class="ask_offer" href="mailto:k.wrona@pralma.pl?subject=Oferta%20pralnia%20samoobsługowa">Zapytaj o ofertę cenową</a>
                                <a class="know_offer" href="przemyslowe-pralki-do-samoobslugi-na-zetony-monety">Poznaj urządzenia</a>
                            </div>
                        </li>
                        <li data-type-slide-number=3>
                            <img src="media/images/banner/banner_three.png" alt="Urządzenia dla przemysłu medycznego aby sprostać wymogom zachowania higieny">
                            <div class="caption-carousel three">
                                <p class="title">Pralnie z barierą higieny</p>
                                <p class="subtitle">STOP bakteriom i zanieczyszczeniom</p>
                                <p class="short-info">
                                    Poznaj rozwiązania i urządzenia dedykowane wymagającym potrzebom przemysłu medycznego
                                    w zakresie zachowania higieny i&nbsp;ochrony przed zanieczyszczeniami.
                                </p>
                                <p class="short-info">
                                    Zapewnij sobie najwyższy poziom zachowania higieny oraz zawsze swieże i czyste pranie.
                                </p>
                                <a class="ask_offer" href="mailto:k.wrona@pralma.pl?subject=Bariera%20higieny">Zapytaj o ofertę cenową</a>
                                <a class="know_offer" href="pralki-przemyslowe-z-bariera-higieny">Poznaj urządzenia</a>
                                <a class="know_how" href="wymagania-dla-pralni-przemyslowej-z-bariera-higieny">Wymagania</a>
                            </div>
                        </li>
                        <li data-type-slide-number=4>
                            <img src="media/images/banner/banner_four_b.png" alt="Zakup na raty pralek przemysłowych">
                            <div class="caption-carousel four">
                                <p class="title">Finansowanie wyposażenia pralni</p>
                                <p class="subtitle">koszty inwestycji rozłóż na wygodne raty</p>
                                <p class="short-info">
                                    Pieniądze przeznaczone na realizację pralni przemysłowej
                                    wykorzystaj na jej rozwój, a wyposażenie spłacaj w sposób
                                    najlepszy z możliwych, w nieoprocentowanych, dogodnych
                                    dla Ciebie ratach.
                                </p>
                                <a class="ask_offer" href="mailto:k.wrona@pralma.pl?subject=Raty%200%20procent">Zapytaj o ofertę cenową</a>
                                <p class="important-info">*Dotyczy wybranych urządzeń pralniczych.</p>
                            </div>
                        </li>
                        <li data-type-slide-number=5>
                            <img src="media/images/banner//promocja_pralma_wm_150.png" alt="Promocja na urządzenia przemysłowe, marki Pralma">
                            <div class="caption-carousel five">
                                <p class="title">Wiosenna promocja 2019</p>
                                <p class="subtitle">zyskaj nawet do 1000,00 zł brutto</p>
                                <p class="short-info">
                                    Kupując suszarkę bębnową serii <b>SE/SP</b> lub niezawodną pralnicowirówkę <b>Pralma</b>,
                                    w&nbsp;komplecie otrzymasz wózek na suche pranie <b>WS-150</b>
                                    lub wózek na mokre pranie <b>WM-150</b>.
                                </p>
                                <a class="ask_offer" href="mailto:k.wrona@pralma.pl?subject=Wiosenna%20promocja%20na%20PRALMA%20i%20SE/SP">Zapytaj o ofertę cenową</a>
                                <p class="important-info">*Promocja obowiązuje do 30.07.2019r. i dotyczy pralnicowirówek o załadunku powyżej 10 kg oraz suszarek o załadunku powyżej 18 kg.</p>
                            </div>
                        </li>
                        <li data-type-slide-number=6>
                            <img src="media/images/banner/banner_five.png" alt="Odbiorcy pralni przemysłowych">
                            <div class="caption-carousel six">
                                <p class="title">PRALMA - obecnie najlepszy wybór</p>
                                <p class="subtitle">wydajne i ekonomiczne pralnie przemysłowe</p>
                                <p class="short-info">
                                    Zrealizowalizmy 1000-ce pralni przemysłowych, różnego rodzaju i wielkości, dla różnych
                                    sektorów działalności gospodarczej. Mamy niezbędne doświadczenie, więdzę i&nbsp;sprzęt
                                    aby sprostać kkażdym potrzebom prania.
                                </p>
                                <a class="know_offer" href="pralma-przykladowe-realizacje-projektow-pralni-przemyslowej">Przykładowe pralnie</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- pagination -->
                <div class="pagination">

                </div>
                <!-- carousel buttons -->
                <a href="#" class="btn-carousel prev" title="do tyłu" id="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" />
                    </svg>
                </a>
                <a href="#" class="btn-carousel next" title="do przodu" id="next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </a>
                <!-- END carousel buttons -->
            </section>
            <!-- END carousel -->

        </header>

        <main id="main" class="clearfix">
            <div id="left">
                <nav id="mainmenu">

                    <?php
                    $PageCons->InsertMainMenu();
                    ?>
                </nav>
                <div id="content">

                    <article id="productinfo">

                    </article>

                    <!-- insert links -->

                    <?php
                    $PageCons->InsertBody();
                    ?>
                </div>
            </div>

            <div id="right">
                <!-- dane teleadresowe -->
                <div class="top-link top-link-contact">
                    <h3>Dane teleadresowe</h3>
                    <h4>zadzwoń, napisz do nas</h4>
                </div>
                <div class="box">
                    <p id="name-company"><abbr title="Przedsiębiorstwo Produkcji Urządzeń Pralniczych">P.P.U.P.</abbr>&nbsp;&nbsp;&bdquo;PRALMA&rdquo;&nbsp;sp.&nbsp;z&nbsp;.o.o</p>
                    <p id="adress-company">25-651 Kielce, ul. Górnicza 49a</p>
                    <div class="krd-wrapper" id="krd-wrapper" style="text-align:center;padding-top:1rem;padding-bottom:1rem;background-color:white">
                        <a id="krd-link" target="_blank" href="https://wizytowka.rzetelnafirma.pl/OQOZ0Y4A" rel="nofollow"><img title="Kliknij i sprawdź status certyfikatu" alt="" src="https://aktywnybaner.rzetelnafirma.pl/ActiveBanner/GetActiveBannerImage/5/OQOZ0Y4A" style="border:none;"></a>
                    </div>

                    <table id="phone">
                        <tbody>
                            <tr>
                                <td colspan="2" class="second-header">Dział handlowy</td>
                            </tr>
                            <tr>
                                <td class="kind-contact">tel.</td>
                                <td><a href="tel:413457408">41 345 74 08</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="tel:413453856">41 345 38 56</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="tel:413450825">41 345 08 25</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="tel:413450827">41 345 08 27</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="tel:413450828">41 345 08 28</a></td>
                            </tr>
                            <tr>
                                <td class="kind-contact">tel. / faks</td>
                                <td><a href="tel:413450561">41 345 05 61</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="tel:413683549">41 368 35 49</a></td>
                            </tr>
                            <tr>
                                <td class="kind-contact">kom.</td>
                                <td><a href="tel:602191607">602 191 607</a></td>
                            </tr>
                            <tr>
                                <td class="kind-contact">e-mail</td>
                                <td><a href="mailto:biuro@pralma.pl?subject=Strona%20pralma">biuro@pralma.pl</a></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="second-header">Dział serwisu</td>
                            </tr>
                            <tr>
                                <td class="kind-contact">tel. / faks</td>
                                <td><a href="tel:413450561">41 345 05 61</a></td>
                            </tr>
                            <tr>
                                <td class="kind-contact">kom.</td>
                                <td><a href="tel:666350354">666 350 354</a></td>
                            </tr>
                            <tr>
                                <td class="kind-contact">kom.</td>
                                <td><a href="tel:664962002">664 962 002</a></td>
                            </tr>
                            <tr>
                                <td class="kind-contact">e-mail</td>
                                <td><a href="mailto:serwis@pralma.pl?subject=Strona%20pralma">serwis@pralma.pl</a></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="second-header">Dział księgowości</td>
                            </tr>
                            <tr>
                                <td class="kind-contact">tel.</td>
                                <td><a href="tel:413457408">41 345 74 08</a></td>
                            </tr>
                            <tr>
                                <td class="kind-contact">e-mail</td>
                                <td><a href="mailto:postmaster@pralma.pl?subject=Strona%20pralma">postmaster@pralma.pl</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="cent">
                        <a href="javascript:void(null)" onclick="openWindow('img.php',600,455)" class="bold">&raquo; Jak dojechać &laquo;</a>
                    </p>
                </div>

                <!-- END dane teleadresowe -->

                <!-- pralnie samoobsługowe -->
                <div class="top-link">
                    <h3>Pralnie samoobsługowe</h3>
                    <h4>różne systemy samoobsługi</h4>
                </div>
                <div class="box">
                    <div class="box-inner">

                        <a href="przemyslowe-pralki-do-samoobslugi-na-zetony-monety" class="wrapper-image-link" title="Popularne pralki przemysłowe na żetony, monety">
                            <div class="overflow-images">
                                <img class="image-link" src="media/images/right_menu/pralnia_samoobslugowa.jpg" alt="Pralnia samoobsługowa" title="Pralnia samoobsługowa">
                            </div>
                        </a>

                        <a href="przemyslowe-pralki-do-samoobslugi-na-zetony-monety" class="more-link" title="Popularne pralki przemysłowe na żetony, monety">Dowiedz się więcej...</a>
                    </div>
                </div>
                <!-- END pralnie samoobsługowe -->

                <!-- pralnie z tzw. barierą higieny -->
                <div class="top-link">
                    <h3>Bariera higieny</h3>
                    <h4>pralnie z tzw. barierą higieny</h4>
                </div>
                <div class="box">
                    <div class="box-inner">

                        <a href="wymagania-dla-pralni-przemyslowej-z-bariera-higieny" class="wrapper-image-link" title="Pralnie przemysłowe z tzw. barierą higieny">
                            <div class="overflow-images">
                                <img class="image-link" src="media/images/right_menu/bariera_higieny.png" alt="Pralnia z tzw. barierą higieny" title="Pralnia przemysłowa z tzw. barierą higieny">
                            </div>
                        </a>

                        <a href="wymagania-dla-pralni-przemyslowej-z-bariera-higieny" class="more-link" title="Pralnie przemysłowe z tzw. barierą higieny">Dowiedz się więcej...</a>
                    </div>
                </div>
                <!-- END pralnie z tzw. barierą higieny-->

                <!-- Maszyny używane-->
                <div class="top-link">
                    <h3>Maszyny używane</h3>
                    <h4>po generalnym remoncie z gwarancją</h4>
                </div>
                <div class="box">
                    <div class="box-inner">

                        <a href="uzywane-pralki-przemyslowe" class="wrapper-image-link" title="Używane pralki przemysłowe po generalnym remoncie, z gwarancją">
                            <div class="overflow-images">
                                <img class="image-link" src="media/images/right_menu/maszyny_uzywane.png" alt="Używane pralki przemysłowe po generalnym" title="Używane pralki przemysłowe po generalnym">
                            </div>
                        </a>

                        <a href="uzywane-pralki-przemyslowe" class="more-link" title="Używane pralki przemysłowe po generalnym remoncie, z gwarancją">Poznaj ofertę...</a>
                    </div>
                </div>
                <!-- END Maszyny używane -->

                <!-- Serwis i wsparcie techniczne-->
                <div class="top-link">
                    <h3>Serwis i Wsparcie Techniczne</h3>
                    <h4>dokumentacja, instrukcje</h4>
                </div>
                <div class="box">
                    <div class="box-inner">

                        <a href="serwis-przemyslowych-urzadzen-pralniczych-primus-pralma-prama" class="wrapper-image-link" title="Materiały informacyjne do pralek przemysłowych">
                            <div class="overflow-images">
                                <img class="image-link" src="media/images/right_menu/serwis_i_wsparcie.png" alt="Materiały informacyjne do pralek przemysłowych" title="Maszyny pralnicze do uszlachetniania tkanin">
                            </div>
                        </a>

                        <a href="serwis-przemyslowych-urzadzen-pralniczych-primus-pralma-prama" class="more-link" title="Materiały informacyjne do pralek przemysłowych">Dowiedz się więcej...</a>
                    </div>
                </div>
                <!-- END serwis i wsparcie techniczne -->

                <!-- Części zamienne-->
                <div class="top-link">
                    <h3>Części zamienne</h3>
                    <h4>wykaz części eksploatacyjnych</h4>
                </div>
                <div class="box">
                    <div class="box-inner">

                        <a href="czesci-zamienne-do-urzadzen-pralniczych-primus-pralma-prama-ipso" class="wrapper-image-link" title="Typowe części eksploatacyjne do pralek przemysłowych">
                            <div class="overflow-images">
                                <img class="image-link" src="media/images/right_menu/czescizamienne.png" alt="Części eksploatacyjne do pralek przemysłowych" title="Części eksploatacyjne do pralek przemysłowych">
                            </div>
                        </a>

                        <a href="czesci-zamienne-do-urzadzen-pralniczych-primus-pralma-prama-ipso" class="more-link" title="Typowe części eksploatacyjne do pralek przemysłowych">Poznaj ofertę...</a>
                    </div>
                </div>
                <!-- END Części zamienne -->

                <!-- Pralnie wyposażone-->
                <div class="top-link">
                    <h3>Przykładowe realizacje</h3>
                    <h4>wyposażenia pralni, <b>referencje</b></h4>
                </div>
                <div class="box">
                    <div class="box-inner">

                        <a href="pralma-przykladowe-realizacje-projektow-pralni-przemyslowej" class="wrapper-image-link" title="Przykłady zrealizowanych wyposażeń pralni przemysłowych">
                            <div class="overflow-images">
                                <img class="image-link" src="media/images/right_menu/przykladowa_pralnia.png" alt="Przykłady zrealizowanych wyposażeń pralni przemysłowych" title="Przykłady zrealizowanych wyposażeń pralni przemysłowych">
                            </div>
                        </a>

                        <a href="pralma-przykladowe-realizacje-projektow-pralni-przemyslowej" class="more-link" title="Przykłady zrealizowanych wyposażeń pralni przemysłowych">Dowiedz się więcej...</a>
                    </div>
                </div>
                <!-- END Części zamienne -->

                <!-- sterowniki-->
                <div class="top-link">
                    <h3>Profesjonalne sterowniki</h3>
                    <h4>do pralek przemysłowych</h4>
                </div>
                <div class="box">
                    <div class="box-inner">

                        <a href="profesjonalne-sterowniki-do-przemyslowych-urzadzen-pralniczych" class="wrapper-image-link" title="Profesjonalne sterowniki do przemysłowych urządzeń pralniczych">
                            <div class="overflow-images">
                                <img class="image-link" src="media/images/right_menu/controlls.png" alt="Profesjonalne sterowniki do przemysłowych urządzeń pralniczych" title="Profesjonalne sterowniki do przemysłowych urządzeń pralniczych">
                            </div>
                        </a>

                        <a href="profesjonalne-sterowniki-do-przemyslowych-urzadzen-pralniczych" class="more-link" title="Profesjonalne sterowniki do przemysłowych urządzeń pralniczych">Dowiedz się więcej...</a>
                    </div>
                </div>
                <!-- END sterowniki -->
            </div> <!-- right end -->
        </main> <!-- main end -->

        <footer>
            <div class="footer-wrapper">
                <div class="footer-container">
                    <div class="col">
                        <div class="divider">
                            <div class="inner">
                                <h2><a href="index.php?sec=main&mid=13">KONTAKT</a></h2>
                                <p id="company-name"><abbr>P.P.U.P.</abbr> &bdquo;Pralma&ldquo; sp. z o.o.</p>
                                <p>25-651 Kielce, ul.Górnicza 49a</p>
                                <h5>NIP:<span>657-008-11-18</span></h5>
                                <h5>KRS:<span>0000502406</span></h5>
                                <h5>Alior Bank:<span class="account">71-24-900005-0000453097384961</span></h5>
                                <h5 class="department">HANDEL</h5>
                                <p><span>tel.</span><a href="tel:413457408">41 345 74 08</a></p>
                                <p><span>kom.</span><a href="tel:602191607">602 191 607</a></p>
                                <p><span>e-mail:</span><a class="email-link" href="mailto:biuro@pralma.pl?subject=Strona%20pralma">biuro@pralma.pl</a></p>
                                <h5 class="department">SERWIS i WSPARCIE TECHNICZNE</h5>
                                <p><span>tel. / faks:</span><a href="tel:413450561">41 345 05 61 wewn. 23</a></p>
                                <p><span>kom.</span><a href="tel:666350354">666 350 354</a></p>
                                <p><span>e-mail:</span><a class="email-link" href="mailto:serwis@pralma.pl?subject=Strona%20pralma">serwis@pralma.pl</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="divider">
                            <div class="inner">
                                <h2><a href="pralma-wyposazenie-przemyslowych-i-komercyjnych-pralni">O NAS</a></h2>
                                <!-- insert menu o nas -->
                                <?php
                                $PageCons->InsertNas();
                                ?>
                                <div id="topmenu-footer" class="clearfix">
                                    <ul class="clearfix margin-top">
                                        <li>
                                            <h2><a href="urzadzenia-pralnicze-do-hotelu-szpitali-domow-opieki-pralni-przemyslowych">Klienci</a></h2>
                                        </li>
                                        <li>
                                            <h2><a href="nowoczesne-technologie-w-przemyslowych-urzadzeniach-pralniczych">Technologie</a></h2>
                                        </li>
                                        <li>
                                            <h2><a href="serwis-przemyslowych-urzadzen-pralniczych-primus-pralma-prama">Serwis i Wsparcie</a></h2>
                                        </li>
                                        <li>
                                            <h2><a href="aktualnosci-i-promocje-na-pralki-przemyslowe">Wiadomości</a></h2>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="divider">
                            <div class="inner">
                                <h2><a href="przemyslowe-pralnicowirowki-pralnice-suszarki-bariera-higieny-wirowki-prasownice">PRODUKTY</a></h2>
                                <!-- insert menu produkty -->
                                <?php
                                $PageCons->InsertProducts();
                                ?>
                            </div>

                            <div class="social-links">
                                <p>Dołącz do nas</p>
                                <!--
                                <a class="social-item facebook" href="#" rel="external" target="_blank" title="facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"/></svg>
                                </a>
                                <a class="social-item twitter" href="#" rel="external" target="_blank" title="twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                                </a>
                                -->
                                <a class="social-item youtube" href="https://www.youtube.com/channel/UCTz_6LLXRU-dQKMUjwyPfEw?disable_polymer=true" rel="external" target="_blank" title="youtube">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M186.8 202.1l95.2 54.1-95.2 54.1V202.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-42 176.3s0-59.6-7.6-88.2c-4.2-15.8-16.5-28.2-32.2-32.4C337.9 128 224 128 224 128s-113.9 0-142.2 7.7c-15.7 4.2-28 16.6-32.2 32.4-7.6 28.5-7.6 88.2-7.6 88.2s0 59.6 7.6 88.2c4.2 15.8 16.5 27.7 32.2 31.9C110.1 384 224 384 224 384s113.9 0 142.2-7.7c15.7-4.2 28-16.1 32.2-31.9 7.6-28.5 7.6-88.1 7.6-88.1z" /></svg>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="divider last">
                            <div class="inner">
                                <?php
                                $PageCons->InsertSide();
                                ?>
                                <div class="primus-info">
                                    <h6>Autoryzowany&nbsp;dystrybutor i&nbsp;serwis&nbsp;urządzeń&nbsp;marki</h6>
                                    <img src="media/images/logos/primus_logo_white.png" alt="Znak handlowy globalnego lidera w branży przemysłowych urządzeń pralniczych">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-laws">
                <div class="inner clearfix">
                    <div class="col-50">
                        <ul>
                            <li><a href="pralma-wazne-przy-dostawie-urzadzen-pralniczych">Ważne przy dostawie</a></li>
                            <li><a href="pralma-warunki-korzystania-z-serwisu">Warunki korzystania</a></li>
                            <li><a href="pralma-polityka-prywatnosci">Polityka prywatności - RODO</a></li>
                        </ul>
                    </div>
                    <div class="col-50">
                        <ul class="print clearfix">
                            <li><a href="javascript:window.print()">Drukuj</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="register">&reg;Zarejestrowana marka handlowa -
                    <abbr title="Przedsiębiorstwo Produkcji Urządzeń Pralniczych">P.P.U.P.</abbr>
                    &bdquo;Pralma&ldquo; sp. z o.o.
                    <span>Wszelkie prawa zastrzeżone</span>
                </p>
                <p class="copyright">
                    &copy;2006 - 2018
                    <a href="http://www.producer.pl" rel="external" target="_blank">Producer - strony www, cms, hosting</a>
                </p>
            </div>
        </footer>
    </div><!-- END cont -->
    <!-- scroll top -->
    <a href="#" class="scrollTop">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M8 256C8 119 119 8 256 8s248 111 248 248-111 248-248 248S8 393 8 256zm143.6 28.9l72.4-75.5V392c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V209.4l72.4 75.5c9.3 9.7 24.8 9.9 34.3.4l10.9-11c9.4-9.4 9.4-24.6 0-33.9L273 107.7c-9.4-9.4-24.6-9.4-33.9 0L106.3 240.4c-9.4 9.4-9.4 24.6 0 33.9l10.9 11c9.6 9.5 25.1 9.3 34.4-.4z" />
        </svg>
    </a>

</body>

</html>