<style>
    /* Asignar la nueva imagen en hover */
    <?php
    if (isset($imgCategorias) && count($imgCategorias) > 0) {
        $cont = 0;
        foreach ($imgCategorias as $img) {
            $cont++;
            echo ".categoria:nth-child(" . $cont . ")::before {
                background-image: url('" . asset('img/menu/' . $img->imagen . "-hover.jpg") . "');
            }";
        }
    }
    ?>
</style>
<div class="product-categories p-[12px]">
    <h1 class="category-title font-principal font-normal">CATEGORÍAS DE PRODUCTOS BIOFEMME</h1>
    <br>
    <p class="click-text font-light font-principal">DALE CLICK Y DESCUBRE LOS PRODUCTOS DE CADA UNA</p>
</div>
<br>
<br>
<br>
<div class="categorias-container">
    <?php
    if (isset($imgCategorias) && count($imgCategorias) > 0) {
        foreach ($imgCategorias as $img) {
            echo '<div class="categoria">
                    <img src="' . asset('img/menu/' . $img->imagen . '.jpg') . '" alt="' . $img->funcion . '">
                    <div class="categoria-texto">' . $img->nombre . '</div>
                </div>';
        }
    }
    ?>

</div>