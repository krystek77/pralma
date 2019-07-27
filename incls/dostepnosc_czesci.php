<?php
    if($this->exists) {
?>
<h3 class="sub">Tylko producent zapewnia, inni jedynie mog± zapewniaæ...</h3>
<p class="just">
    Jako producent przemys³owych maszyn pralniczych PPUP "PRALMA" gwarantuje dostêp do czê¶ci zamiennych wszystkich
    maszyn pralniczych oferowanych przez nas od ponad pó³ wieku. <br />
    W odró¿nieniu od firm handlowo - us³ugowych Pralma posiada  bogaty magazyn czê¶ci zamiennych co zapewnia
    ³atwy ich dostêp, nisk± cenê i szybk± wysy³kê. 
</p>
<p class="just">
    Wiêcej informacji mo¿esz uzyskaæ w sekcji <a href="index.php?sec=main&amp;mid=12">czê¶ci zamienne</a> naszej strony internetowej. Dzia³ zawiera
    podstawowe czê¶ci zamienne do najpopularniejszych przemys³owych urz±dzeñ pralniczych w Polsce. 
</p>
<?php
    } else {
        header("Location:../index.php?id=0&pid=0");
    }
?>