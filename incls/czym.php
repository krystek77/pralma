<?php
    if($this->exists) {
?>

<article class="company">
    <header>
        <hgroup>
            <h2>PRALMA<span class="reg">&reg;</span> - pralnie proste i wydajne</h2>
            <h3>producent przemysłowego i&nbsp;komercyjnego wyposażenia do&nbsp;pralni wodnych oraz&nbsp;urządzeń do&nbsp;transportu i&nbsp;składowania prania</h3>
        </hgroup>
        <figure>
            <img src="media/images/firma/nie_wazne.png" alt="Potrzebujesz pralni przemysłowej, posiadamy rozwiązanie dla Ciebie">
            <figcaption></figcaption>
        </figure>
    </header>
    <div class="content-article">
            <div class="article-description">
                <h4>Co robimy</h4>
                <p>
                Od prawie 30 już lat skupiamy się, aby uczynić pralnie przemysłowe prostsze, bardziej ekonomiczne i wydajne.
                Mamy świadomość jak poważnie traktujesz swój biznes, dlatego jesteśmy tak samo zaangażowany w nasz. PRALMA jest
                jedynym polskim producentem przemysłowego i komercyjnego wyposażenia pralni wodnych oraz urządzeń do transportu i&nbsp;
                składowania prania.
                </p>
                <p>
                Tworzymy, projektujemy i produkujemy urządzenia pralnicze z myślą o&nbsp;trwałości, ekonimii prania oraz wydajności,
                przewyższającej potrzeby pralni przemysłowej każdego typu i wielkości. Nie bez znaczenia jest również ergonomia urządzeń,
                by obsługa była najprostsza i&nbsp;po prostu szybka.
                </p>
                <p>
                Posiadamy sprawny i fachowy serwis urządzeń spełniający oczekiwania najbardziej wymagających odbiorców.
                </p>
                <p>
                Oferujemy korzystne warunki finansowania, dopasowane do indywidualnych potrzeb tak, aby inwestycję w pralnię
                uczynić dogodną, z&nbsp;przystępną ceną oraz warunkami realizacji.
                </p>
                <p>
                Wyposażyliśmy już ponad 1000 pralni przemysłowych, wykonaliśmy 100 - tki usług serwisowych i 1000-ce projektów
                wyposażeń pralni, w tym z&nbsp;systemami recyklingu wody i ciepła.
                </p>
            </div>
            <div class="hr"></div>
            <div class="article-image-list clearfix">
                <h4></h4>
                <div class="article-image">
                    <img src="media/images/firma/pralma_budynek.png" alt="Budynek Przedsiębiorstwa Produkcji Urządzeń Pralniczych PRALMA Sp. z o.o.">
                </div>
                <!--
                <div class="article-image">
                    <img src="media/images/firma/primus_budynek.png" alt="Firma Primus">
                </div>
                <div class="article-image">
                    <img src="media/images/firma/primus_budynek_w.png" alt="Firma Primus">
                </div>
                -->
                <div class="address-company">
                    <p><abbr title="Przedsiębiorstwo Produkcji Urządzeń Pralniczych">P.P.U.P</abbr>&bdquo;PRALMA&rdquo; sp. z o.o.</p>
                    <p>25-651 Kielce, ul.Górnicza 49a</p>
                    <p>tel. / faks 41 34 505 61; tel. / faks 41 368 35 49</p>
                    <p>tel. 41 41 345 74 08; tel. 41 345 38 56</p>
                    <p>kom. 602 191 607</p>
                    <p>e-mail: <a href="mailto:biuro@pralma.pl">biuro@pralma.pl</a></p>
                </div>
            </div>

        </div>
</article>

<div class="hr"></div>

<article class="company">
    <header>
        <hgroup>
            <h4>Z kim współpracujemy</h4>
        </hgroup>
    </header>
    <section class="content-article">
        <div class="content-article-wrapper">

            <div class="partners">
                <div class="content-article">
                    <p>
                        <b>PRIMUS</b> - jeden z największych europejskich producentów przemysłowego i&nbsp;komercyjnego
                        wyposażenia pralni wodnych z&nbsp;dominującą obecnością na świecie. Primus to ponad 100 lat doświadczeń w&nbsp;
                        branży rozwiązań dla pralni przemysłowych. W&nbsp;ofercie posiada szeroką gamę pralnicowirówek, suszarek oraz prasownic o&nbsp;
                        najwyższych standardach jakości, dla różnych obiektów takich jak: hotele, szpitale, domy opieki, służb cywilnych, restauracji i&nbsp;pralni samoobsługowych.
                    </p>
                    <div class="partners-image">
                        <img src="media/images/logos/primus_logo_maszyny_pralnicze.png" alt="Primus - jeden z największych europejskich producentów przemysłowego wyposażenia do pralni wodnych z silną obecności na świecie">
                    </div>
                    <p>
                        Jesteśmy razem już prawie 30 lat będąc <b>autoryzowanym dystrybutorem oraz serwisem urządzeń marki Primus</b>.
                        Primus to maksimum jakości, wydajności i ekonomii prania - systemy pralnicze dla pralni każdego typu i&nbsp;wielkości,
                        ktore muszą spełniać najwyższe standardy współczesnej i&nbsp;nowoczesnej pralni przemysłowej.
                    </p>

                </div>
            </div>

        </div>
    </section>
    <div class="hr"></div>
</article>


<?php
    } else {
        header("Location:../index.php?id=0&pid=0");
    }
?>
