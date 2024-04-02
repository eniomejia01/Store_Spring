<fieldset>
        <legend>Informacion Producto</legend>

        <label for="titulo">Nombre:</label>
        <input type="text" 
                id="titulo" 
                name="camaras_p[nombre_producto]" 
                placeholder="Nombre Producto" 
                value="<?php echo s ( $camaras_p -> nombre_producto ); ?>">

        
        <label for="descripcion">Descripcion:</label>
        <textarea name="camaras_p[descripcion]" 
        id="descripcion" 
        cols="30" rows="10"> <?php echo s($camaras_p ->  descripcion); ?></textarea>
        
        <label for="precio">Precio:</label>
        <input type="text" 
                id="precio" 
                name="camaras_p[precio]" 
                placeholder="Precio Producto" 
                value="<?php echo s($camaras_p -> precio); ?>" 
        />

        <label for="precioCliente">PrecioCliente:</label>
        <input type="text" 
                id="precioCliente" 
                name="camaras_p[precioCliente]" 
                placeholder="Precio Producto Cliente" 
                value="<?php echo s($camaras_p -> precioCliente); ?>" 
        />

</fieldset>