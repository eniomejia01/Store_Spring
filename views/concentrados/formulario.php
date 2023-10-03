<fieldset>
        <legend>Informacion General</legend>

        <label for="titulo">Nombre:</label>
        <input type="text" 
                id="titulo" 
                name="concentrado_p[nombre_producto]" 
                placeholder="Nombre Producto" 
                value="<?php echo s ( $concentrado_p -> nombre_producto ); ?>">

        
        <label for="descripcion">Descripcion:</label>
        <textarea name="concentrado_p[descripcion]" 
        id="descripcion" 
        cols="30" rows="10"> <?php echo s($concentrado_p ->  descripcion); ?></textarea>
        
        <label for="precio">Precio:</label>
        <input type="text" 
                id="precio" 
                name="concentrado_p[precio]" 
                placeholder="Precio Producto" 
                value="<?php echo s($concentrado_p -> precio); ?>" >

</fieldset>