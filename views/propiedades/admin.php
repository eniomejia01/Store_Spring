<main class="contenedor seccion">

            <div class="acciones">
                <a href="/crear-cuenta">Crear una nueva cuenta de vendedor</a>
            </div>

            <h1>Administrador de Store Spring</h1>

            <?php
                if($resultado){
                    $mensaje = mostrarNotificacion( intval($resultado) );

                    if($mensaje) { ?>
                        <p class="alerta exito"><?php echo s($mensaje) ?></p>
                    <?php }
                }
            ?>

            <a href="/propiedades/crear" class="boton boton-verde">Agregar Producto</a>

            <h2>Productos Estanteria 1</h2>

            <table class="propiedades">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>  
                    </tr>
                </thead>

                <tbody> <!--  Mostrar los Resultados -->
                    <?php foreach( $propiedades as $propiedad ): ?>
                    <tr>
                        <td> <?php echo $propiedad -> id; ?> </td>
                        <td> <?php echo $propiedad -> nombre_producto;  ?> </td>
                        <td> <?php echo $propiedad -> descripcion?></td>
                        <td>Q <?php echo $propiedad -> precio?></td>
                        <td>

                            <form method="POST" class="w-100" action="/propiedades/eliminar"> 
                                
                            
                                <input type="hidden" name="id" value="<?php echo $propiedad -> id; ?>">
                                <input type="hidden" name="tipo" value="propiedad">
                                <input type="submit" class="boton-rojo-eliminar" value="Eliminar">

                            </form>
                            <a href="/propiedades/actualizar?id=<?php echo $propiedad -> id; ?>" class="boton-amarillo-actualizar">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


            <a href="/estanteria_2/crear" class="boton boton-verde">Agregar Producto</a>

            <h2>Productos Estanteria 2</h2>

            <table class="propiedades">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>  
                    </tr>
                </thead>

                <tbody> <!--  Mostrar los Resultados -->
                    <?php foreach( $estanterias2 as $estanteria_2 ): ?>
                    <tr>
                        <td> <?php echo $estanteria_2 -> id; ?> </td>
                        <td> <?php echo $estanteria_2 -> nombre_producto;  ?> </td>
                        <td> <?php echo $estanteria_2 -> descripcion?></td>
                        <td>Q <?php echo $estanteria_2 -> precio?></td>
                        <td>

                            <form method="POST" class="w-100" action="/estanteria_2/eliminar"> 
                                
                            
                                <input type="hidden" name="id" value="<?php echo $estanteria_2 -> id; ?>">
                                <input type="hidden" name="tipo" value="estanteria_2">
                                <input type="submit" class="boton-rojo-eliminar" value="Eliminar">

                            </form>
                            <a href="/estanteria_2/actualizar?id=<?php echo $estanteria_2 -> id; ?>" class="boton-amarillo-actualizar">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

            <a href="/estanteria_3/crear" class="boton boton-verde">Agregar Producto</a>

            <h2>Productos Estanteria 3</h2>

            <table class="propiedades">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>  
                    </tr>
                </thead>

                <tbody> <!--  Mostrar los Resultados -->
                    <?php foreach( $estanterias3 as $estanteria_3 ): ?>
                    <tr>
                        <td> <?php echo $estanteria_3 -> id; ?> </td>
                        <td> <?php echo $estanteria_3 -> nombre_producto;  ?> </td>
                        <td> <?php echo $estanteria_3 -> descripcion?></td>
                        <td>Q <?php echo $estanteria_3 -> precio?></td>
                        <td>

                            <form method="POST" class="w-100" action="/estanteria_3/eliminar"> 
                                
                            
                                <input type="hidden" name="id" value="<?php echo $estanteria_3 -> id; ?>">
                                <input type="hidden" name="tipo" value="estanteria_3">
                                <input type="submit" class="boton-rojo-eliminar" value="Eliminar">

                            </form>
                            <a href="/estanteria_3/actualizar?id=<?php echo $estanteria_3 -> id; ?>" class="boton-amarillo-actualizar">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


            <a href="/mostradores/crear" class="boton boton-verde">Agregar Producto</a>

            <h2>Productos Mostradores</h2>

            <table class="propiedades">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>  
                    </tr>
                </thead>

                <tbody> <!--  Mostrar los Resultados -->
                    <?php foreach( $mostradores_p as $mostradores ): ?>
                    <tr>
                        <td> <?php echo $mostradores -> id; ?> </td>
                        <td> <?php echo $mostradores -> nombre_producto;  ?> </td>
                        <td> <?php echo $mostradores -> descripcion?></td>
                        <td>Q <?php echo $mostradores -> precio?></td>
                        <td>

                            <form method="POST" class="w-100" action="/mostradores/eliminar"> 
                                
                            
                                <input type="hidden" name="id" value="<?php echo $mostradores -> id; ?>">
                                <input type="hidden" name="tipo" value="mostradores">
                                <input type="submit" class="boton-rojo-eliminar" value="Eliminar">

                            </form>
                            <a href="/mostradores/actualizar?id=<?php echo $mostradores -> id; ?>" class="boton-amarillo-actualizar">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


            <a href="/camaras/crear" class="boton boton-verde">Agregar Producto</a>

            <h2>Productos Camaras</h2>

            <table class="propiedades">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>  
                    </tr>
                </thead>

                <tbody> <!--  Mostrar los Resultados -->
                    <?php foreach( $camaras as $camaras_p ): ?>
                    <tr>
                        <td> <?php echo $camaras_p -> id; ?> </td>
                        <td> <?php echo $camaras_p -> nombre_producto;  ?> </td>
                        <td> <?php echo $camaras_p -> descripcion?></td>
                        <td>Q <?php echo $camaras_p -> precio?></td>
                        <td>

                            <form method="POST" class="w-100" action="/camaras/eliminar"> 
                                
                            
                                <input type="hidden" name="id" value="<?php echo $camaras_p -> id; ?>">
                                <input type="hidden" name="tipo" value="camaras">
                                <input type="submit" class="boton-rojo-eliminar" value="Eliminar">

                            </form>
                            <a href="/camaras/actualizar?id=<?php echo $camaras_p -> id; ?>" class="boton-amarillo-actualizar">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


            <a href="/concentrados/crear" class="boton boton-verde">Agregar Producto</a>

            <h2>Productos Concentrados</h2>

            <table class="propiedades">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>  
                    </tr>
                </thead>

                <tbody> <!--  Mostrar los Resultados -->
                    <?php foreach( $concentrado as $concentrado_p ): ?>
                    <tr>
                        <td> <?php echo $concentrado_p -> id; ?> </td>
                        <td> <?php echo $concentrado_p -> nombre_producto;  ?> </td>
                        <td> <?php echo $concentrado_p -> descripcion?></td>
                        <td>Q <?php echo $concentrado_p -> precio?></td>
                        <td>

                            <form method="POST" class="w-100" action="/concentrados/eliminar"> 
                                
                            
                                <input type="hidden" name="id" value="<?php echo $concentrado_p -> id; ?>">
                                <input type="hidden" name="tipo" value="concentrados">
                                <input type="submit" class="boton-rojo-eliminar" value="Eliminar">

                            </form>
                            <a href="/concentrados/actualizar?id=<?php echo $concentrado_p -> id; ?>" class="boton-amarillo-actualizar">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


            <a href="/variedades/crear" class="boton boton-verde">Agregar Producto</a>

            <h2>Productos Variedades</h2>

            <table class="propiedades">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>  
                    </tr>
                </thead>

                <tbody> <!--  Mostrar los Resultados -->
                    <?php foreach( $variedad as $variedades_p ): ?>
                    <tr>
                        <td> <?php echo $variedades_p -> id; ?> </td>
                        <td> <?php echo $variedades_p -> nombre_producto;  ?> </td>
                        <td> <?php echo $variedades_p -> descripcion?></td>
                        <td>Q <?php echo $variedades_p -> precio?></td>
                        <td>

                            <form method="POST" class="w-100" action="/variedades/eliminar"> 
                                
                            
                                <input type="hidden" name="id" value="<?php echo $variedades_p -> id; ?>">
                                <input type="hidden" name="tipo" value="variedades">
                                <input type="submit" class="boton-rojo-eliminar" value="Eliminar">

                            </form>
                            <a href="/variedades/actualizar?id=<?php echo $variedades_p -> id; ?>" class="boton-amarillo-actualizar">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


</main>







