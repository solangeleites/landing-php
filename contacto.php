<?php include("header.php") ?>

<section class="section">
    <h2>Contacto</h2>
    <form action="enviar_consulta.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name">

        <label for="email">Email</label>
        <input type="email" name="email">

        <label for="phone">Teléfono</label>
        <input type="number" name="phone">

        <label for="msg">Mensaje</label>
        <textarea name="msg" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="Enviar" class="submit">
    </form>
</section>

<?php include("footer.php") ?>