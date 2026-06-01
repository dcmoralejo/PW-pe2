 <header class="cabeceraOrdenador">

        <!-- Logo de la agencia junto con el nombre -->
        <section class="logo-titulo">
            <img src="imagenes/logo_CeltaTravel.png" alt="Logo de Celta Travel" id="logo">
            <h1>Celta Travel</h1>
        </section>

        <?php if (isset($_SESSION['usuario'])): ?>
            <section class="info-usuario">
                <p><?php echo $_SESSION['usuario']; ?> (<?php echo $_SESSION['tipo']; ?>)</p>
                <a href="logout.php"><img src="imagenes/logout.png" alt="Cerrar sesión"></a>
            </section>
        <?php else: ?>
            <form action="index.php" method="post">
                <?php if ($error): ?>
                    <p style="color:red; font-weight:bold;"><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="clave">Contraseña:</label>
                <input type="password" id="clave" name="clave" required>

                <input type="submit" value="Entrar">
            </form>
            <a href="altausuarios.php">Alta de usuarios</a>
        <?php endif; ?>

        <!-- Menú principal de navegación del sitio -->
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="viajes.php">Viajes</a></li>
                <li><a href="viajes_grupo.php">Viajes en grupo</a></li>
                <li><a href="ofertas.php">Ofertas</a></li>
                <li><a href="sobre_agencia.php">Sobre nuestra agencia</a></li>
                <li><a href="sugerencias.php">Sugerencias</a></li>
            </ul>
        </nav>
    </header>

    <header class="cabeceraTelefono">

        <section class="logo-titulo">
            <img src="imagenes/logo_CeltaTravel.png" alt="Logo de Celta Travel" id="logo">
            <h1>Celta Travel</h1>
        </section>

        <?php if (isset($_SESSION['usuario'])): ?>
            <section class="info-usuario">
                <p><?php echo $_SESSION['usuario']; ?> (<?php echo $_SESSION['tipo']; ?>)</p>
                <a href="logout.php"><img src="imagenes/logout.png" alt="Cerrar sesión"></a>
            </section>
        <?php else: ?>
            <?php if ($error): ?>
                    <p style="color:red; font-weight:bold;"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
            <label for="login_desplegable">Iniciar sesión</label>
            <input type="checkbox" id="login_desplegable">

            <section class="loginTelefono">
                <form action="index.php" method="post">
                    <label for="usuario_movil">Usuario:</label>
                    <input type="text" id="usuario_movil" name="usuario_movil" required>

                    <label for="clave_movil">Contraseña:</label>
                    <input type="password" id="clave_movil" name="clave_movil" required>

                    <input type="submit" value="Entrar">
                </form>

                <a href="altausuarios.html">Alta de usuarios</a>
            </section>
        <?php endif; ?>

        <label for="menu_desplegable">☰ Menú</label>
        <input type="checkbox" id="menu_desplegable">

        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="viajes.php">Viajes</a></li>
                <li><a href="viajes_grupo.php">Viajes en grupo</a></li>
                <li><a href="ofertas.php">Ofertas</a></li>
                <li><a href="sobre_agencia.php">Sobre nuestra agencia</a></li>
                <li><a href="sugerencias.php">Sugerencias</a></li>
            </ul>
        </nav>

    </header>