<fieldset>
        <legend>Informacion Producto</legend>

        <label for="titulo">Nombre:</label>
        <input type="text" 
                id="titulo" 
                name="mostradores[nombre_producto]" 
                placeholder="Nombre Producto" 
                value="<?php echo s ( $mostradores -> nombre_producto ); ?>">

        
        <label for="descripcion">Descripcion:</label>
        <textarea name="mostradores[descripcion]" 
        id="descripcion" 
        cols="30" rows="10"> <?php echo s($mostradores ->  descripcion); ?></textarea>
        
        <label for="precio">Precio:</label>
        <input type="text" 
                id="precio" 
                name="mostradores[precio]" 
                placeholder="Precio Producto" 
                value="<?php echo s($mostradores -> precio); ?>" 
        />

        <label for="precioCliente">PrecioCliente:</label>
        <input type="text" 
                id="precioCliente" 
                name="mostradores[precioCliente]" 
                placeholder="Precio Producto Cliente" 
                value="<?php echo s($mostradores -> precioCliente); ?>" 
        />

</fieldset>