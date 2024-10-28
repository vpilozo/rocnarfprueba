<div class="product-categories">
    <h1 class="category-title">PRODUCTOS NUEVOS</h1>
</div>
<div class="product-container">
    <?php
    $oferta = '';
    $precio = 0;
    if (isset($productos) && count($productos) > 0) {
        foreach ($productos as $producto) {
            if ($producto->oferta == null) {
                $precio = number_format($producto->precio, 2);
            } else {
                $precio = '<del>' . number_format($producto->precio, 2) . '</del> $' . number_format($producto->oferta, 2); //<p><del>$20.70</del> $15.00</p>

            }
            echo '<div class="product">
                    <a href="producto/detalle/' . $producto->id . '">
                        <div style="text-align:center;"><img src="' . asset('img/productos/' . $producto->imagen.'.jpg') . '" alt="' . $producto->tipo . '" title="' . $producto->tipo . '"></div>
                        <h2 style="color:#c9727d;">' . $producto->nombre . '</h2>
                        <p style="color:#c9727d; font-size: 14px;">' . $producto->tipo . '</p>
                        <p style="font-size:13px;">' . $producto->descripcion . '</p>
                        <p style="font-size:15px; color:#666666" font-family: "Nunito Sans", Sans-serif;>$' . $precio . '</p>
                        <a href="javascript:;" style="font-family: "Nunito Sans", sans-serif; font-size: 14px; color: #666666; background-color: rgba(0, 0, 0, 0); border-style: solid; border-width: 0; display: inline-flex; align-items: center;" class="boton-carrito"><i class="fa fa-shopping-cart" style="margin-right: 7px; font-size: 14px;"></i> Añadir al carrito</a>
                    </a>
                </div>';
        }
    }
    ?>
</div>