<?php

if(!isset($_SESSION)){ // si ya estaba arrancada la sesion, entonces no hecemos nada
    session_start(); // si no esta iniciada la session, entonces la vamos a iniciar
}


$auth = $_SESSION['login_copy'] ?? null; //este codigo es para que no se caiga la pagina si no hay una session iniciada


?>

<header class="header <?php echo $inicio  ? 'inicio' : ''; ?>" >

    <div class="contenido-header contenedor">

        <div class="barra"> 

                <div class="nombre-usuario">
                    <p><?php echo $nombre ?? ''; ?></p>
                </div>

                <nav class="navegacion boton-cerrar-sesion">

                    <?php if($auth): ?>
                        <a href="/">Cerrar Sesión</a>
                    <?php endif; ?>

                </nav>
        </div>
        
    </div>

</header>

<main class="contenedor">


            <div class="acciones">
                <a href="/crear-cuenta">Crear una nueva cuenta de vendedor</a>
            </div>

            <h1>Administrador de Tienda Primavera</h1>

            <!-- <?php
                if($resultado){
                    $mensaje = mostrarNotificacion( intval($resultado) );

                    if($mensaje) { ?>
                        <p class="alerta exito"><?php echo s($mensaje) ?></p>
                    <?php }
                }
            ?> -->

            <a href="/propiedades/crear" class="boton boton-verde">Agregar Producto</a>

            <h2 class="botons" id="mostrar"><span class="alinear">Productos Estanteria 1</span> 
            <i class="bi bi-dash-circle-fill"></i>
            </h2>

            <table class="propiedades oculto" id="mostrarlistaactive" >
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

            <h2 class="botons" id="mostrar2"><span class="alinear">Productos Estanteria 2</span>
            <i class="bi bi-dash-circle-fill"></i>
            </h2>

            <table class="propiedades oculto" id="mostrarEstanteria2">
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

            <h2 class="botons" id="botonMostrar3"><span class="alinear">Productos Estanteria 3</span>
            <i class="bi bi-dash-circle-fill"></i>
            </h2>

            <table class="propiedades oculto" id="mostrarEstanteria3">
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

            <h2 class="botons" id="botonMostrar4"><span class="alinear">Productos Mostradores</span>
            <i class="bi bi-dash-circle-fill"></i>
            </h2>

            <table class="propiedades oculto" id="mostrarMostradores">
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

            <h2 class="botons" id="botonMostrar5"><span class="alinear">Productos Camaras</span>
            <i class="bi bi-dash-circle-fill"></i>
            </h2>

            <table class="propiedades oculto" id="mostrarCamaras">
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

            <h2 class="botons" id="botonMostrar6"><span class="alinear">Productos Concentrados</span>
            <i class="bi bi-dash-circle-fill"></i>
            </h2>

            <table class="propiedades oculto" id="mostrarConcentrados">
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

            <h2 class="botons" id="botonMostrar7"><span class="alinear">Productos Variedades</span> 
            <i class="bi bi-dash-circle-fill"></i>
            </h2>

            <table class="propiedades oculto" id="mostrarVariedades">
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

<footer class="footer seccion">
        <p class="copyright">Todos los derechos reservados 
            <?php echo date('Y') ?> &copy;</p>
</footer>









