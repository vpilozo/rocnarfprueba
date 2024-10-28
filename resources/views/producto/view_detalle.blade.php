<style>
    .header {
        background-color: #fdeef2;
        text-align: center;
        padding: 20px 0;
    }

    .header h1 {
        margin: 0;
        font-size: 36px;
        color: #555;
    }

    .header p {
        margin: 0;
        font-size: 15px;
        color: #888;
    }

    .breadcrumb {
        margin: 20px;
        font-size: 14px;
        margin-left: 300px;
        color: #C9777D;
        font-family: "Nunito Sans", Sans-serif;
        font-weight: normal;
    }

    .breadcrumb a {
        color: #606060;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }

    .content {
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }

    .product-image {
        text-align: center;
        position: relative;
        overflow: hidden;
        /* Evita que el zoom se salga del contenedor */
        width: 300px;
        height: 400px;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        transition: transform 0.3s ease;
        /* Transición suave de zoom */
    }

    .product-image:hover img {
        transform: scale(1.5);
        /* Factor de zoom, puedes ajustarlo */
        cursor: zoom-in;
    }

    .product-image:hover {
        cursor: zoom-in;
    }

    /* Mueve la imagen al mover el puntero */
    .product-image:hover img {
        transform: scale(1.5);
        cursor: zoom-in;
    }

    /* Agrega movimiento en función de la posición del puntero */
    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-image:hover img {
        transform-origin: center;
        /* Ajusta el punto de zoom */
        transform: scale(1.5);
        /* Factor de zoom, puedes ajustarlo */
    }

    .product-details {
        max-width: 400px;
        margin-right: 20px;
        /* Espacio entre los divs */
    }

    .product-details h2 {
        font-size: 24px;
        color: #d67878;
        margin: 0;
    }

    .product-details p {
        font-size: 16px;
        /* color: #888; */
        margin: 5px 0;
    }

    /* .product-details ul {
        padding: 0;
        list-style-type: none;
        margin: 10px 0;
    } */

    .product-details ul li {
        font-size: 14px;
        margin: 5px 0;
    }

    .product-price {
        font-size: 24px;
        color: #333;
        font-weight: bold;
        margin-top: 20px;
    }

    /* Estilos adicionales */
    .additional-info {
        margin-top: 30px;
    }

    .additional-info a {
        display: block;
        font-size: 16px;
        color: #d67878;
        text-decoration: none;
        margin: 5px 0;
    }

    .additional-info a:hover {
        text-decoration: underline;
    }

    .linea-fina {
        border: none;
        /* Elimina el estilo predeterminado */
        border-top: 1px solid #888;
        /* Cambia el grosor y color de la línea */
        width: 70%;
        /* Ajusta el ancho de la línea */
        margin: 20px auto;
        /* Centro horizontal */
    }
</style>

<div class="bg-[rgb(255,240,244)] grid place-items-center">
    <div class="text-[#606060] text-center p-12">
        <h3 class="text-[2rem] font-light">LIFTING SERUM</h3>
        <p class="font-thin text-[30px]">Sérum Tensor</p>
    </div>
</div>

<div class="py-[29.5px] border-b border-b-gray-200 ml-12">
    <p class="font-thin text-sm">
        Inicio <span class="text-[#C9777D]">/</span> Productos <span
            class="text-[#C9777D]">/</span> Proage <span class="text-[#C9777D]">/</span>
        <span class="text-[#C9777D]">{{$producto->nombre}}</span>
    </p>
</div>

<div class="max-w-[1000px] my- mx-auto">
    <div class="grid grid-cols-3 gap-9 font-principal">
        <div class="product-image">
            <img src="{{asset('img/productos/'.$producto->imagen)}}" alt="Lifting Serum">
        </div>
        <div class="product-details font-principal">
            <h2>{{$producto->nombre}}</h2>
            <p class="text-[#C9777D]">{{$producto->tipo}}</p>
            <p class="text-sm">{{$producto->descripcion}}</p>
            <ul class="my-12 text-[#AAAAAA] pl-6 list-disc">
                <li class="">Efecto Inmediato</li>
                <li>Reduce Arrugas</li>
                <li>Make Up Primer</li>
            </ul>
            <?php
            if ($producto->oferta == null) {
                $precio = number_format($producto->precio, 2);
            } else {
                $precio = '<del>' . number_format($producto->precio, 2) . '</del> $' . number_format($producto->oferta, 2); //<p><del>$20.70</del> $15.00</p>

            }
            ?>
            <div class="text-[30px] font-thin font-principal ">$<?= $precio; ?></div>

            <div class="flex gap-3 items-center">
                <input class=" w-[50px] p-[.3em] border rounded-md border-gray-200 text-lg text-center" value="1" type="text">
                <button class=" whitespace-nowrap text-[#C9777D] border border-gray-200 py-2 px-4 w-full rounded-md text-base font-thin flex gap-2 items-center justify-center">
                    @php $width = 23; @endphp
                    @include('icons.cart')
                    Añadir al carrito
                </button>
                <button class="text-xl bg-green-500 rounded-full px-[15px] py-[10px] text-white " id="">
                    <a href="https://web.whatsapp.com/" target="_blank"> <i class="fab fa-whatsapp"></i> </a><!-- Ícono de WhatsApp -->
                </button>
            </div>
        </div>

        <div class="grid place-items-center">
            <div class="w-full">
                <details class=" border-b border-gray-200 p-3">
                    <summary class="text-[#C9777D] uppercase">Modo de empleo</summary>
                    <ul class="text-sm font-thin leading-relaxed">
                        <li>1. Realizar la rutina de cuidado facial habitual.</li>
                        <li>2. Aplicar y extender sobre cara, cuello y escote, incluyendo contorno de ojos y párpados antes del maquillaje.</li>
                    </ul>
                </details>
                <details class=" border-b border-gray-200 p-3">
                    <summary class="text-[#C9777D] uppercase">INGREDIENTES BIO-ACTIVOS</summary>
                    <ul class="text-sm font-thin leading-relaxed list-disc py-5">
                        <li>Tens’ Up™</li>
                        <li> Neosome EM Ultrafill</li>
                        <li>Partículas “Soft Focus”</li>
                    </ul>
                    <a href="" class="underline text-sm text-[#606060] font-principal">
                        Conoce cómo actúan cada uno de ellos
                    </a>
                </details>
            </div>
        </div>
    </div>
</div>
@include('producto.imagenes-cambi')
@include('producto.estilo')

<br><br>
<hr class="linea-fina">

<br>

<div style="max-width: 1100px; margin: 0 auto; padding: 20px;">
    <h2 style="font-weight: normal; color: #606060; font-weight: 400; font-size: 22px;">VALORACIONES DE ESTE PRODUCTO</h2>
    <br>
    <div style="margin-top: 10px;">
        <h3 style="font-weight: normal; color: #C9777D; font-family: 'Nunito Sans', sans-serif;">LIFTING SERUM</h3>

        <div style="font-size: 24px; color: #606060;">
            ★★★★★
        </div>
        <br>

        <p style="font: 15px 'Biofemme Confortaa', sans-serif; margin: 0px 0px 26.25px; color: #000000;">No hay valoraciones aún.</p>

        <div style="border: none; 
             border: 1px solid #888; 
             padding: 20px 30px; /* Ajuste el padding superior/inferior e izquierdo/derecho */
             width: 100%; 
             min-height: 100px; /* Aumenta si necesitas más altura */
             max-width: 900px; /* Ancho máximo */
             margin-top: 20px;">
            <p style="margin: 0 0 15px; /* Margen inferior para separación entre párrafos */
              font: 15px 'Biofemme Confortaa', sans-serif; 
              color: #000000;">Sé el primero en valorar “LIFTING SERUM”.</p>
            <p style="margin: 0; /* Sin margen para el segundo párrafo */
              font: 15px 'Biofemme Confortaa', sans-serif; 
              color: #000000;">
                Debes <a href="#" style="color: #C9727D; text-decoration: none;">acceder</a> para publicar una valoración.
            </p>
        </div>

    </div>
</div>




<hr class="linea-fina">
<div style="font-family: Arial, sans-serif; max-width: 1100px; margin: 0 auto; padding: 20px;">
    <h3 style="font-weight: normal;">TAMBIÉN TE PUEDE INTERESAR</h3>
</div>


<div class="product-container">
    <?php
    $oferta = '';
    $precio = 0;
    if (isset($listaProductos) && count($listaProductos) > 0) {
        foreach ($listaProductos as $producto) {
            if ($producto->oferta == null) {
                $precio = number_format($producto->precio, 2);
            } else {
                $precio = '<del>' . number_format($producto->precio, 2) . '</del> $' . number_format($producto->oferta, 2); //<p><del>$20.70</del> $15.00</p>

            }
            echo '<div class="product">
                    <a href="producto/detalle/' . $producto->id . '">
                        <div style="text-align:center;"><img src="' . asset('img/productos/' . $producto->imagen) . '" alt="' . $producto->tipo . '" title="' . $producto->tipo . '"></div>
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