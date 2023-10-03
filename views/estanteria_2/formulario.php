<fieldset>
        <legend>Informacion General</legend>

        <label for="titulo">Nombre:</label>
        <input type="text" 
                id="titulo" 
                name="estanteria_2[nombre_producto]" 
                placeholder="Nombre Producto" 
                value="<?php echo s ( $estanteria_2 -> nombre_producto ); ?>">

        
        <label for="descripcion">Descripcion:</label>
        <textarea name="estanteria_2[descripcion]" 
        id="descripcion" 
        cols="30" rows="10"> <?php echo s($estanteria_2 ->  descripcion); ?></textarea>
        
        <label for="precio">Precio:</label>
        <input type="text" 
                id="precio" 
                name="estanteria_2[precio]" 
                placeholder="Precio Producto" 
                value="<?php echo s($estanteria_2 -> precio); ?>" >

</fieldset>