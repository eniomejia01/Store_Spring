<body class="login">
    <main class="contenedor seccion contenido-centrado">
            <div class="transparente">

                <h1 class="nombre-pagina">Login</h1>
                <p class="descripcion-pagina">Inicia sesión con tus datos</p>
                

                <?php 
                    include_once __DIR__ . "/../templates/alertas.php";
                ?>

                <form class="formulario-cuenta" method="POST" action="/">

                    <div class="campo">
                        <label for="email">Email</label>
                        <input 
                            type="email"
                            id="email"
                            placeholder="Tu Email"
                            name="email"
                            
                        /> <!-- el name"email" nos permite leerlo con POST -->
                    </div>

                    <!-- <div class="campo">
                        <label for="password">Password</label>
                        <input 
                            type="password"
                            id="password"
                            placeholder="Tu Password"
                            name="password"
                        />

                    </div> -->

                    <div class="campo">
                        <label for="password">Password</label>
                        <div class="password-container">
                            <input type="password" id="password" placeholder="Tu Password" name="password" />
                            <span class="toggle-password" onclick="togglePasswordVisibility()">&#128065;</span>
                        </div>
                    </div>



                    <input type="submit" class="color-b" value="Iniciar Sesión">

                </form>
            </div>

    </main>
</body>


