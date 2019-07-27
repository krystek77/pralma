<?php
header("Content-Type: text/html; charset=utf-8");
class PageCons {

    var $sec,$mid,$pid;
    var $exists;

    var $menu = array(
        0=>array("Główna","main","Przemysłowe urządzenia pralnicze, pralnicowirówki, suszarki bębnowe, prasownice oraz wózki do pralni przemysłowej każdego typu i wielkości, Pralma i Primus."),
        1=>array("Pralnice","pralnice","Urządzenia do pralni komercyjnych i przemysłowych każdego typu i wielkości. Poznaj pralki, zaprojektowane by zwiększać dochód i obniżać koszty prania."),
        2=>array("Pralnicowirówki","pralnicowirowki","Pralnicowirówki → Przemysłowe pralnicowirówki o wyjątkowej trwałości i wydajności. Poznaj innowacyjne pralnicowirówki aby podnieść wydajność pralni i obniżyć koszty."),
        3=>array("Suszarki","suszarki","Przemysłowe suszarki bębnowe i komorowe przeznaczone do suszenia tkanin każdego rodzaju.   Poznaj suszarki z najkrótszym czasem suszenia."),
        4=>array("Bariera higieny","bariera_higieny","Urządzenia z barierą higieny zaprojektowane, aby sprostać wymaganiom przemysłu medycznego w zakresie zachowania higieny i obrony przed bakteriami."),
        5=>array("Prasownice","prasownice","Prasownice nieckowe oraz magle walcowe przeznaczone do ekonomicznego i wydajnego prasowania. Poznaj prasowalnice pracujące w nowoczesnych pralniach."),
        6=>array("Wirówki","wirowki","Wirówki pralnicze marki Pralma o najlepszym stopniu odwirowania prania i historycznej trwałości oraz niezawodności. Zapewnij sobie oszczędne suszenie."),
        7=>array("Prasowanie fasonowe","prasowanie","Pełna linia jedynych w swoim rodzaju, innowacyjnych urządzeń do prasowania bielizny fasonowej, stoły do prasowania, manekiny."),
        8=>array("Wózki","wozki_regaly","Wózki, regały do pralni przemysłowej. Kompletna gama wózków do transportu mokrego, suchego bądź brudnego prania oraz regały do składowania prania."),
        9=>array("Klienci","klienci","Wyposażenie komercyjnych i przemysłowych pralni wodnych każdego typu i wielkości, pralnia dla hoteli, domów pomocy społecznej, do prania odzieży roboczej."),
        10=>array("Technologie","technologie","Nowoczesne technologie i rozwiązania w przemysłowych urządzeniach pralniczych. Dowiedz się jak obniżyć koszty prania, podnieść jego jakość i wydajność."),
        11=>array("3 x <b>E</b>","systemy_dozujace_do_pralni","Systemy dozujące do pralni przemysłowych - pompy płynnych środków piorących"),
        12=>array("Wiadomości","wiadomosci","Aktualności z branży wyposażenia dla przemysłowych i komercyjnych pralni. Targi wyposażenia do pralni przemysłowych, najnowsze pralnicowirówki i suszarki."),
        13=>array("Kontakt","kontakt","Producent przemysłowych i komercyjnych urządzeń pralniczych oraz autoryzowany serwis urządzeń marki Primus, wyposażenie pralni wodnych i obsługa techniczna."),
        14=>array("Pralnie samoobsługowe","pralnie_samoobslugowe","Pełna linia, jedynych w swoim rodzaju, uruchamianych na monety, żetony lub karty płatnicze, pralnicowirówek, suszarek bębnowych i prasownic do samoobsługi."),
        15=>array("Bariera higieny","pralnie_bariera_higieny","Dowiedz się jakie wymogi musi spełniać pralnia z barierą higieny, aby świadczyć usługi dla sektora medycznego w zakresie higieny i ochrony przed bakteriami"),
        16=>array("Serwis i Wsparcie","serwis_wsparcie","Dokumentacja techniczna do przemysłowych urządzeń pralniczych marki Pralma, Prama, Primus, instrukcje instalacji i obsługi."),
        17=>array("Maszyny używane","pralki_uzywane","Używane pralnicowirówki, suszarki i pralnice przemysłowe z gwarancją producenta. Tylko do tych pralnic przemysłowych jest serwis i części zamienne w Polsce."),
        18=>array("Części zamienne","czesci_zamienne","Części zamienne do pralnic przemysłowych marki Pralma, Prama, Primus i Ipso oraz starych urządzeń pralniczych. Mamy wszystkie części."),
        19=>array("Realizacje pralni","pralnie_realizacje","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus."),
        20=>array("Sterowniki","sterowniki","Top 10 profesjonalnych sterowników do przemysłowych urządzeń pralniczych dających pełną kontrolę nad ekonomią i procesem prania przemysłowego."),
        21=>array("Ważne przy dostawie","wazne_dostawa","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus."),
        22=>array("Warunki korzystania","warunki_korzystania","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus."),
        23=>array("Polityka prywatności","polityka_prywatności","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus.")
    );

    var $firma_menu = array(
        0=>array("Co robimy","czym","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus."),
        1=>array("Co oferujemy","co_oferujemy","Pralma – projekt wyposażenia lub doposażenia pralni przemysłowej każdego typu i wielkości. Tylko najlepsze urządzenia do pralni przemysłowych."),
        2=>array("Komu świadczymy usługi","komu","Wyposażenie pralni przemysłowych odpowiednie do hoteli, domów pomocy społecznej, apartamentowców, straży pożarnej, pralni samoobsługowych."),
        3=>array("Zainwestuj w pralnię","zainwestuj_pralnie","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus."),
        4=>array("Historia","historia","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus."),
        5=>array("Poznaj nas","poznaj_nas","Polskie urządzenia przemysłowe do pralni komercyjnych i przemysłowych, pralnicowirówki, suszarki przemysłowe oraz wózki do pralni, urządzenia marki Primus."),
    );

    var $startp = array(
        'main'=>array(
            1=>'pralnice/PBE_PBP_08_15_22_A',
            2=>'pralnicowirowki/PRALMA_10_16_22_F',
            3=>'suszarki/SE_SP_10_R',
            4=>'bariera_higieny/MXB_700',
            5=>'prasownice/I_30',
            6=>'wirowki/WR_15_30_F',
            7=>'prasowanie/EB3'
        )
    );


    function PageCons($sec,$mid,$pid) {

        $this->sec = $sec;

        $this->mid = $mid;
        $this->pid = $pid;
        $this->exists = true;
    }

    function GenerateMenu($menu) {

        $ct = $this->sec=='main' ? 9: count($menu);
        $start = $this->sec=='main' ? 1: 0;
        echo '<ul class="clearfix">';
        for($i = $start; $i < $ct; $i++) {
            echo '<li '.($this->sec=='firma' ? 'class="firma"' : '').'><a href="index.php?sec='.$this->sec.'&amp;mid='.$i.'"'.($i==($ct - 1) ? ' class="last"':'').'>'.$menu[$i][0].'</a></li>';
        }
        echo '</ul>';
    }

    function InsertMainMenu() {
        if($this->sec == 'main') {
            $this->GenerateMenu($this->menu);
        } else if($this->sec == 'firma') {
            $this->GenerateMenu($this->firma_menu);
        } else {
            $this->GenerateMenu($this->menu);
        }
    }

    function insertMeta(){
        if($this->sec == 'main')
        {
            echo $this->menu[$this->mid][2];
        }
        else if ($this->sec == 'firma')
        {
            echo $this->firma_menu[$this->mid][2];
        }
        else
        {
            echo $this->menu[0][2];
        }
    }


    function GenerateFooterMenu($menu) {
        if($menu==$this->menu){
            $start = 1;
            $count = 9;
            echo '<ul class="clearfix">';
            for($i=$start;$i<$count;$i++)
            {
                echo '<li><a href="index.php?sec=main&amp;mid='.$i.'">'.$menu[$i][0].'</a></li>';
            }
            echo '</ul>';
        }
        else {
            $start = 0;
            $count = count($menu);
            echo '<ul class="clearfix">';
            for($i=$start;$i<$count;$i++)
            {
                echo '<li><a href="index.php?sec=firma&amp;mid='.$i.'">'.$menu[$i][0].'</a></li>';
            }
            echo '</ul>';
        }
    }

    function InsertProducts(){
        $this->GenerateFooterMenu($this->menu);
    }

    function InsertNas(){
        $this->GenerateFooterMenu($this->firma_menu);
    }
    function InsertSide(){
        $start = 14;
        $count = 21;
        echo '<ul class="clearfix">';
        for($i=$start;$i<$count;$i++)
        {
            echo '<li><h2><a href="index.php?sec=main&amp;mid='.$i.'">'.$this->menu[$i][0].'</a></h2></li>';
        }
        echo '</ul>';
    }

    function InsertTxt($menu) {
        if(file_exists('incls/'.$menu[$this->mid][1].'.php')) { /*pralnice.php*/
            require_once('incls/'.$menu[$this->mid][1].'.php');
        } else {
            require_once('incls/main.php');
        }
    }

    /*
     * ?Wstawia główną treść
     */
    function InsertBody() {
        if($this->sec == 'main') {
            $this->InsertTxt($this->menu); /*pralnice.php*/
        } else if($this->sec == 'firma') {
            $this->InsertTxt($this->firma_menu);/*aktualnosci.php*/
        } else {
            require_once("incls/main.php");
        }
    }


    /*
     * Wstawia tytuł podstrony
     */
    function InsertTitle() {
        if($this->sec == 'main') {
            echo '<img src="img/'.$this->menu[$this->mid][1].'.gif" alt="'.$this->menu[$this->mid][0].'" class="title" />';
        } else if($this->sec == 'firma') {
            echo '<img src="img/'.$this->firma_menu[$this->mid][1].'.gif" alt="'.$this->firma_menu[$this->mid][0].'" class="title" />';
        } else {
            echo '<img src="img/suszarki.gif" alt="Suszarki przemys?owe" class="title" />';
        }

    }

    /*
     * Ustawia stronę startową każdego produktu
     */
    function StartPage() {
        if($this->sec=='main') {
            if($this->mid >= 1 && $this->mid <= 7) {
                echo "insertInfo('".$this->startp[$this->sec][$this->mid]."')";
            }
        }
    }

    /*
     * Wstawia linki
     */
    function InsertLinks($mid) {

        if($mid == 18) {
            $j = 3;
        }

        for($i = 1; $i < $j; $i++) {
            if($i == $_GET["page"]) {
                echo '<span class="current_page">'.$i.'</span>';
            } else {
                echo '<a class="other_page" href="index.php?sec=main&amp;mid='.$mid.'&amp;page='.$i.'">'.$i.'</a>';
            }

        }
    }
    /*
     * Wstawia podstrony stronicowane
     */
    function InsertPageStr($mid,$page) {
        if(file_exists('incls/czesci/'.$this->menu[$this->mid][1].$page.'.php')) {
            require_once('incls/czesci/'.$this->menu[$this->mid][1].$page.'.php');
        } else {
            require_once('incls/main.php');
        }
    }

    /*
        Pokazuje aktualn? dat?
     */
    function ShowDate() {
        $days = array("Niedziela","Poniedzia?ek", "Wtorek", "?roda", "Czwartek", "Pi?tek", "Sobota");
        $months = array("Stycze?", "Luty", "Marca", "Kwietnia", "Maj", "Czerwiec", "Lipiec", "Sierpie?", "Wrzesie?", "Pa?dziernika", "Listopada", "Grudzie?");

        //w - dzie? tygodnia 0 - niedziela, n - miesi?c 1 - stycze? ,j - dzie? miesi?ca 1 - 31
        $data = array(date("Y"),date("n"),date("w"),date("j"));

        echo $days[$data[2]],",<br />",$data[3]," ",$months[$data[1]-1]," ", $data[0],"<br />";
    }
}
