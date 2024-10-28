<style>
    h2.title {
        font-weight: normal;
        color: #333;
        font-size: 24px;
        text-align: left;
    }

    p.text,
    .info-block p {
        color: #555;
        line-height: 1.6;
        text-align: justify;
        font-size: 16px;
    }

    /* Layout for sections */
    .section-light,
    .section-pink {
        padding: 40px;
    }

    .section-light {
        background-color: #f9f7f6;
    }

    .section-pink {
        background-color: #f4e4e6;
    }

    .content-container {
        display: flex;
        max-width: 1100px;
        margin: 0 auto;
    }

    .title {
        flex: 1;
        max-width: 35%;
        margin-right: 20px;
        font-size: 26px;
    }

    .text,
    .info-content {
        flex: 2;
    }

    /* Pink Section Content */
    .info-content {
        display: flex;
        flex-direction: column;
    }

    .info-block {
        margin-bottom: 20px;
    }

    .info-block h3 {
        color: #666;
        margin-top: 20px;
    }

    .info-block p {
        color: #666;
        margin-top: 10px;
    }

    .more-info {
        color: #d58b93;
        text-decoration: none;
        display: inline-block;
        font-family: "Nunito Sans", Sans-serif;
        position: relative;
        font-size: 15px;
        padding: 10px 20px;
        margin-top: 20px;
        text-align: center;
    }

    .more-info::before,
    .more-info::after {
        content: "";
        display: block;
        width: 80%;
        /* Reduce el ancho de las líneas al 50% del enlace */
        height: 1px;
        background-color: #d58b93;
        margin: 15px auto; 
        /* Centra la línea debajo del enlace */
    }
</style>
<div class="section-light">
    <div class="content-container">
        <h2 class="title">CONOCE SUS PROPIEDADES</h2>
        <p class="text">
            BioFemme® Lifting Sérum es una fórmula innovadora que proporciona a la piel, instantáneamente, un efecto lifting y antiarrugas, otorgándole una textura uniforme que permita la aplicación del maquillaje en las mejores condiciones, y que este dure más tiempo.
        </p>
    </div>
</div>

<div class="section-pink">
    <div class="content-container">
        <h2 class="title">¿CÓMO ACTÚAN LOS INGREDIENTES BIO-ACTIVOS?</h2>

        <div class="info-content">
            <div class="info-block">
                <h3>TENS'UP™</h3>
                <p>Formado por la combinación de dos extractos vegetales, Achicoria y Tara, que juntos forman una matriz tridimensional sobre la piel aportándole efecto tensor inmediato. La Achicoria es originaria de Europa y de regiones templadas de Asia. Esta planta fue utilizada por los egipcios, los griegos y los romanos como planta medicinal y, además, en la Edad Media se la consideraba mágica. La Tara, por otra parte, es nativa de Perú pero se encuentra ampliamente distribuida en América Latina. Crece de manera silvestre en la altitud de los bosques y valles andinos, entre 1,000 y 3,100 metros de altura. Las moléculas que se extraen de estas dos plantas forman una red tridimensional sobre la piel que alisa la superficie cutánea proporcionando un aspecto terso y luminoso de forma inmediata.</p>
            </div>

            <div class="info-block">
                <h3>NEOSOME EM ULTRAFILL</h3>
                <p>Formado por Trehalosa y Trimetilglicina encapsulados en liposomas. Su mecanismo de acción es único y consiste en aumentar la flexibilidad de las membranas celulares y el contenido de agua en el interior de las células, para que éstas aumenten de volumen y se consiga un efecto de relleno de arrugas y aumento de firmeza en tan sólo unos minutos.</p>
            </div>

            <div class="info-block">
                <h3>PARTÍCULAS “SOFT FOCUS”</h3>
                <p>Estas partículas son capaces de difuminar ópticamente las arrugas y las líneas de expresión. Las arrugas son perceptibles a simple vista por el contraste entre claros y oscuros que se acentúa con cualquier pliegue de la piel, por sutil que sea. Para eliminar las zonas oscuras se introducen estas pequeñas partículas esféricas que dispersan la luz, consiguiendo difuminar las arrugas y enmascarar las imperfecciones.</p>
            </div>

            <a href="#" class="more-info">Conoce más sobre otros ingredientes Bio-Activos</a>
        </div>
    </div>
</div>