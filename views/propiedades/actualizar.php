<main class="contenedor contenido-centrado">
    <h1 class="titulos">Actualizar Propiedad</h1>

    <?php foreach ($errores as $error) :  ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">

        <?php include __DIR__ . '/formulario.php'; ?>

        <div class="botones-formulario">
        <a href="/admin/" class="boton boton-verde">Regresar</a>  
        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </div>
    </form>

</main>