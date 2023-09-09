 <fieldset>
     <legend>Información general</legend>

     <label for="titulo">Titulo: </label>
     <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php echo s($propiedad->titulo); ?>">

     <label for="precio">Precio: </label>
     <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" min="0" value="<?php echo s($propiedad->precio); ?>">

     <label for="imagen">Imagen: </label>
     <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

    <?php if($propiedad->imagen): ?>
        <img src="/imagenes/<?php echo $propiedad->imagen ?>" alt="Imagen de la propiedad" class="imagen-small">
    <?php endif; ?>

     <label for="descripcion">Descripción: </label>
     <textarea id="descripcion" name="descripcion"><?php echo s($propiedad->descripcion); ?></textarea>
 </fieldset>

 <fieldset>
     <legend>Información de la propiedad</legend>

     <label for="habitaciones">Habitaciones: </label>
     <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejem: 3" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>">

     <label for="wc">Baños: </label>
     <input type="number" id="wc" name="wc" placeholder="Ejem: 3" min="1" max="9" value="<?php echo s($propiedad->wc); ?>">

     <label for="estacionamiento">Estacionamiento: </label>
     <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ejem: 3" min="1" max="9" value="<?php echo s($propiedad->estacionamiento); ?>">
 </fieldset>

 <fieldset>
     <legend>Vendedor</legend>

     <select name="vendedorId">
         <option value="">Selecione un vendedor</option>
         <?php foreach($vendedores as $vendedor): ?>
         <option 
         <?php echo $propiedad->vendedorId === $vendedor->id ? 'selected' : ''; ?>
         value="<?php echo s($vendedor->id);?>"><?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?></option>
         <?php endforeach;?>
     </select>
 </fieldset>