<main class="contenedor seccion contenido-centrado">
    <h1 class="nombre-pagina">Login</h1>
    <p class="descripcion-pagina">Inicia sesión con tus datos</p>

    <?php 
        include_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form class="formulario" method="POST" action="/">

        <div class="campo">
            <label for="email">Email</label>
            <input 
                type="email"
                id="email"
                placeholder="Tu Email"
                name="email"
                
            /> <!-- el name"email" nos permite leerlo con POST -->
        </div>

        <div class="campo">
            <label for="password">Password</label>
            <input 
                type="password"
                id="password"
                placeholder="Tu Password"
                name="password"
            />

        </div>

        <input type="submit" class="boton" value="Iniciar Sesión">

    </form>

</main>





