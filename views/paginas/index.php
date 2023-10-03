<main class="contenedor">
    <h2>Productos Estanteria 1</h2>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            </tr>
        </thead>

        <tbody> <!--  Mostrar los Resultados -->
            <?php foreach( $propiedades as $propiedad ): ?>
            <tr>
                <td> <?php echo $propiedad -> id; ?> </td>
                <td> <?php echo $propiedad -> nombre_producto;  ?> </td>
                <td> <?php echo $propiedad -> descripcion?></td>
                <td>Q <?php echo $propiedad -> precio?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <h2>Productos Estanteria 2</h2>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            </tr>
        </thead>

        <tbody> <!--  Mostrar los Resultados -->
            <?php foreach( $estanteria2_productos as $estanteria_2 ): ?>
            <tr>
                <td> <?php echo $estanteria_2 -> id; ?> </td>
                <td> <?php echo $estanteria_2 -> nombre_producto;  ?> </td>
                <td> <?php echo $estanteria_2 -> descripcion?></td>
                <td>Q <?php echo $estanteria_2 -> precio?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>


    <h2>Productos Estanteria 3</h2>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            </tr>
        </thead>

        <tbody> <!--  Mostrar los Resultados -->
            <?php foreach( $estanteria3_productos as $estanteria_3 ): ?>
            <tr>
                <td> <?php echo $estanteria_3 -> id; ?> </td>
                <td> <?php echo $estanteria_3 -> nombre_producto;  ?> </td>
                <td> <?php echo $estanteria_3 -> descripcion?></td>
                <td>Q <?php echo $estanteria_3 -> precio?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <h2>Productos Mostradores</h2>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            </tr>
        </thead>

        <tbody> <!--  Mostrar los Resultados -->
            <?php foreach( $mostradores_productos as $mostradores ): ?>
            <tr>
                <td> <?php echo $mostradores -> id; ?> </td>
                <td> <?php echo $mostradores -> nombre_producto;  ?> </td>
                <td> <?php echo $mostradores -> descripcion?></td>
                <td>Q <?php echo $mostradores -> precio?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>


    <h2>Productos Camaras</h2>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            </tr>
        </thead>

        <tbody> <!--  Mostrar los Resultados -->
            <?php foreach( $camaras_productos as $camaras_p ): ?>
            <tr>
                <td> <?php echo $camaras_p -> id; ?> </td>
                <td> <?php echo $camaras_p -> nombre_producto;  ?> </td>
                <td> <?php echo $camaras_p -> descripcion?></td>
                <td>Q <?php echo $camaras_p -> precio?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <h2>Productos Concentrados</h2>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            </tr>
        </thead>

        <tbody> <!--  Mostrar los Resultados -->
            <?php foreach( $concentrados_productos as $concentrado_p ): ?>
            <tr>
                <td> <?php echo $concentrado_p -> id; ?> </td>
                <td> <?php echo $concentrado_p -> nombre_producto;  ?> </td>
                <td> <?php echo $concentrado_p -> descripcion?></td>
                <td>Q <?php echo $concentrado_p -> precio?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <h2>Productos Variedades</h2>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            </tr>
        </thead>

        <tbody> <!--  Mostrar los Resultados -->
            <?php foreach( $variedades_productos as $variedades_p ): ?>
            <tr>
                <td> <?php echo $variedades_p -> id; ?> </td>
                <td> <?php echo $variedades_p -> nombre_producto;  ?> </td>
                <td> <?php echo $variedades_p -> descripcion?></td>
                <td>Q <?php echo $variedades_p -> precio?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</main>