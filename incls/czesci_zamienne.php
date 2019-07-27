<?php
    if($this->exists) {
        if(!isset($_GET["page"])) {
            $_GET["page"] = 1;
        }
?>

<article class="productinfo">

        <h2>Części zamienne do pralek przemysłowych</h2>
        <h3>przykładowe części ekaploatacyjne i zamienne, do urządzeń marki Pralma, FMP Prama, IPSO i Primus</h3>
        <p class="introduction">
            Pomyśl o przyszłej eksploatacji urządzeń i zapewnij sobie szybki i realny dostęp do części zamiennych oraz
            eksploatacyjnych. Jako producent przemysłowych urządzeń pralniczych oraz autoryzowany
            serwis urządzeń marki Primus, posiadamy magazyn, wszystkich niezbędnych części do przemysłowych maszyn pralniczych.
            Dzięki temu gwarantujemy szybką realizację i wysyłkę tak, aby Twoja pralnia mogła sprawnie i bez przerw funkcjonować
            wydajnie i&nbsp;jeszcze bardziej ekonomicznie.
        </p>

    <section class="articles clearfix">
        <h6 class="hidden-header">Części zamienne do pralek i pralnicowirówek przemysłowych - Pralma, Prama, IPSO, Primus, Unimac, Electrolux</h6>


    <?php
        $this->InsertPageStr(18,$_GET["page"]);
    ?>

    </section>
</article>

<div class="links">
	<?php
	    $this->InsertLinks(18);
	?>
</div>

<?php
    } else {
        header("Location:../index.php?id=0&pid=0");
    }
?>
