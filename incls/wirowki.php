<?php
    if($this->exists) {
?>

<div class="models">
    <p class="available-models" id="lista-modeli">Dostępne modele</p>
    <ul class="model-list clearfix">
        <li><a class="scrollUp" href="javascript:void(null)" onclick="insertInfo('wirowki/C_8')" title="Wirówki przemysłowe, Pralma">C 8</a></li>
        <li><a class="scrollUp" href="javascript:void(null)" onclick="insertInfo('wirowki/WR_15_30_F')" title="Wirówki przemysłowe, Pralma">WR 15F</a></li>
        <li><a class="scrollUp" href="javascript:void(null)" onclick="insertInfo('wirowki/WR_15_30_F')" title="Wirówki przemysłowe, Pralma">WR 30F</a></li>
    </ul>
</div>

<?php
    } else {
        header("Location:../index.php?id=0&pid=0");
    }
?>
