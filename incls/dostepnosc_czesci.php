<?php
    if($this->exists) {
?>
<h3 class="sub">Tylko producent zapewnia, inni jedynie mog� zapewnia�...</h3>
<p class="just">
    Jako producent przemys�owych maszyn pralniczych PPUP "PRALMA" gwarantuje dost�p do cz�ci zamiennych wszystkich
    maszyn pralniczych oferowanych przez nas od ponad p� wieku. <br />
    W odr�nieniu od firm handlowo - us�ugowych Pralma posiada  bogaty magazyn cz�ci zamiennych co zapewnia
    �atwy ich dost�p, nisk� cen� i szybk� wysy�k�. 
</p>
<p class="just">
    Wi�cej informacji mo�esz uzyska� w sekcji <a href="index.php?sec=main&amp;mid=12">cz�ci zamienne</a> naszej strony internetowej. Dzia� zawiera
    podstawowe cz�ci zamienne do najpopularniejszych przemys�owych urz�dze� pralniczych w Polsce. 
</p>
<?php
    } else {
        header("Location:../index.php?id=0&pid=0");
    }
?>