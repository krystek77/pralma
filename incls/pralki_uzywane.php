<?php
    if($this->exists) {
?>

<article class="productinfo">

        <h2>Używane pralki przemysłowe</h2>
        <h3>po generalnym remoncie, z gwarancją i dostępem do&nbsp;części&nbsp;zamiennych</h3>
        <p class="introduction">
            Czasami trafi się perełka - maszyna, w którą można tknąć nowe życie tak, aby pomagała
            Ci osiągnąć cele biznesowe, przy najniższych kosztach inwestycji. Pralki przemysłowe,
            często są silnie wyeksploatowane - przecież służą do ciągłej oraz wydajnej pracy.
            Ponadto, niejednokrotnie marki są już nieobecne na rynku
            i nie ma do nich części zamiennych. Zakup takiej maszyny to spory kłopot dla Ciebie.
            Z naszymi, używanymi maszynami pralniczymi, po generalnym remoncie, z gwarancją i realnym
            dostępem do części zamiennych, możesz zapewnić sobie zarówno niższe koszty inwestycji jak i spokój, na kolejne, długie lata ich eksploatacji.
        </p>

    <section class="articles clearfix">
        <h6 class="hidden-header">Przemysłowe pralki i pralnicowirówki używane - Pralma, Primus</h6>
        <div class="temporary">
            <h2>Wszystkie maszyny używane sprzedane.</h2>
            <p>Oferta jest na bieżąco uaktualniana.</p>
            <p>Zapraszamy do częstego odwiedzania.</p>
        </div>
    </section>
</article>

<?php
    } else {
        header("Location:../index.php?id=0&pid=0");
    }
?>
