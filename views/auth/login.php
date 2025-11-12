<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tús datos</p>

<?php
include_once __DIR__ . "../../templates/alertas.php"
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tú email" name="email">
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tú password">
    </div>

    <input type="submit" value="Iniciar sesión" class="boton">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/forget">¿Olvidaste tú password?</a>
</div>