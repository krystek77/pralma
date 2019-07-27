<?php
    if($this->exists) {
?>

<article class="productinfo">

        <h2>Pralnie z tzw. &bdquo;barierą higieny&rdquo;</h2>
        <h3>
            najlepsza ochrona przed zarazkami, bakteriami wszędzie tam,
            gdzie zachowanie wysokiego poziomu higieny prania jest sprawą najważniejszą.
        </h3>
        <p class="introduction">
            Badania pokazują, że pranie jest główną przyczyną przenoszenia zakażeń i bakterii.
            Czy wiedziałeś, że od 10% do 15% zakażeń szpitalnych, wynika z niezadowalającej
            czystości prania. W najlepszym razie kończy się przedłużonym pobytem w szpitalu
            o 4 - 5 dni, w najgorszym - śmiercią pacjenta.
        </p>
        <p class="introduction">
            Starsi i najmłodsi pacienci są najbardziej narażeni na ryzyko zakażenia z powodu ich
            słabszego układu odpornościowego. Dlatego też, operatorzy urządzeń pralniczych muszą
            mieć pełną kontrolę nad procesem prania, aby móc zachować najwyższy z możliwych
            poziom higieny, aby być pewnym, że pranie jest wolne od niektórych bakterii np.
            <b>Staphylococcus aureus</b>, <b>Salmonella</b>, <b>Listeria</b> itp.
        </p>

    <section class="articles clearfix">
        <h6 class="hidden-header">Jakie warunki trzeba spełnić dla pralni z barierą higieny</h6>
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
