<?php
if ($this->exists) {
    ?>
    <!-- <article class="productinfo">
            <hgroup class="section-header">
                <h2>Polityka prywatności</h2>
                <h3>chronimy Twoje dane, uzgodnienia i warunki realizacji</h3>
                <p class="introduction">
                    ....
                </p>
            </hgroup>
            <section class="articles clearfix">
                <div class="temporary">
                    <h2>STRONA W PRZYGOTOWANIU</h2>
                    <p>Trwa modernizacja serwisu.</p>
                    <p>Zapraszamy wkrótce.</p>
                </div>
            </section>
        </article> -->
    <section class="RODO">
        <h2>Klauzula informacyjna</h2>
        <p>

            Od dnia 25 maja 2018 obowiązują nowe przepisy o ochronie danych osobowych RODO (RODO jest to powszechnie używany
            skrót Rozporządzenie Parlamentu Europejskiego i Rady (UE )2016/679 z dnia 27 kwietnia 2016r. w sprawie ochrony osób
            fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia
            dyrektywy 95/46 WE (ogólne rozporządzenie o ochronnie danych) (Dz. U. UE. L. Z 2016 Nr 119, str.1)., którego celem jest
            ujednolicenie zasad przetwarzania danych osobowych na terenie UE).

        </p>
        <ol>
            <li>
                Administratorem Pani/Pana danych osobowych jest:
                <strong>Przedsiębiorstwo Produkcji Urządzeń Pralniczych  &ldquo;Pralma&rdquo; Sp. z o.o. ul. Górnicza 49a, 25-651 Kielce</strong>
                NIP 6570081116, KRS 0000022564, tel. 41/3457408, 41/3450561,
                <a href="mailto:biuro@pralma.pl">biuro@pralma.pl</a>
            </li>
            <li>
                Administrator nie wyznaczył Inspektora Ochrony Danych Osobowych.
            </li>
            <li>
                Ma Pani/Pan prawo dostępu do swoich danych, otrzymania ich kopii, ich sprostowania, usunięcia,
                ograniczenia przetwarzania, oraz prawo do przenoszenia danych, a także wniesienia sprzeciwu.
            </li>
            <li>
                Do Pani/Pana danych mogą mieć dostęp podmioty przetwarzające (działające na nasze zlecenie), takie jak:
                firmy księgowe, kancelarie prawnicze, firmy kurierskie, podmioty świadczące usługi płatności
                elektronicznych, administrator systemu sprzedażowego, dostawcy usług IT.
                Podanie danych jest dobrowolne, ale niezbędne do realizacji powyższych celów, w szczególności
                obowiązków prawnych Spółki, w tym realizacji Państwa zgłoszeń lub spraw (bez ich podania nasza Spółka
                nie będzie mogła realizować swych obowiązków, w tym Państwa zgłoszenia).
            </li>
            <li>
                Dane przechowywane są bezterminowo.
            </li>
            <li>
                Przysługuje Pani/Panu wniesienia skargi do organu nadzorczego (Prezesa Urzędu Ochrony Danych
                Osobowych), jeśli Pani/Pana zdaniem przetwarzanie danych osobowych Pani/Pana narusza przepisy
                rozporządzenia RODO.
            </li>
            <li>
                Pani/Pana dane osobowe nie będą przekazywane do państw trzecich i organizacji międzynarodowych.
                Informujemy, że firma P. P.U.P. „Pralma” Sp. z o. o. dokłada wszelkich starań, aby zapewnić wszelkie
                środki fizycznej, technicznej i organizacyjnej ochrony danych osobowych przed ich
                przypadkowym bądź umyślnym zniszczeniem, przypadkową utratą, nieuprawnionym
                ujawnieniem lub wykorzystaniem, zgodnie z wszelkimi obowiązującym przepisami.
            </li>
        </ol>
    </section>


<?php
} else {
    header("Location:../index.php?id=0&pid=0");
}
?>