
<main class="contenedor">
    <h2 data-cy="heading-nosotros">Más Sobre Nosotros</h2>
    <?php include 'iconos.php';?>
</main>

<section class="seccion contenedor">
    <h2>Casas y Deptos en venta</h2>
    <?php 
    @include 'listado.php';
    ?>

    <div class="ver-todas">
        <a data-cy="ver-propiedades" href="/propiedades" class="boton-verde">Ver todas</a>
    </div>
</section>

<section data-cy="imagen-contacto" class="imagen-contacto">
    <h3>Encuentra la casa de tus sueños</h3>
    <p>Llena el formulario de contacto y un asesor se pondrá en contácto contigo a la brevedad</p>
    <a href="/contacto" class="boton-amarillo-inlineblock">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section data-cy="blog" class="blog">
        <h2>Nuestro blog</h2>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada de Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/21</span> por: <span>Amdin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada de Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>20/10/21</span> por: <span>Amdin</span></p>
                    <p>Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article>
    </section>
    <section data-cy="testimoniales" class="testimoniales">
        <h2>Testimoniales</h2>
        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atención y la casa cumple con todas mis expectativas.
            </blockquote>
            <p>- Cristhian Sevilla</p>
        </div>
    </section>
</div>