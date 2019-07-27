<?php
    if($this->exists) {
?>
<article class="productinfo">
    <hgroup class="section-header">
        <h2>Regulamin</h2>
        <h3>korzystania z serwisów należących do <abbr title="Przedsiębiorstwa Produkcji Urządzeń Pralniczych"></abbr> <b>PRALMA</b> sp. z o.o.</h3>
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
</article>
<?php
    } else {
        header("Location:../index.php?id=0&pid=0");
    }
?>
