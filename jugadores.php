<?php include 'header.php'; ?>


<section class="section">
    <h2 class="title">Estos son nuestros jugadores de los ultimos 3 partidos de la Copa Del Mundo</h2>
    <ul class="lista_fechas">
        <li><a href="jugadores.php?jugadores=91222">9-12-22</a></li>
        <li><a href="jugadores.php?jugadores=131222">13-12-22</a></li>
        <li><a href="jugadores.php?jugadores=181222">18-12-22</a></li>
    </ul>
</section>

<?php
if (isset($_GET['jugadores'])) {
    switch ($_GET['jugadores']) {
        case '91222':
            $defensa =  array('M. Acuña', 'C. Romero', 'N.Molina', 'N.Otamendi', 'L.Martinez');
            $medio = array('R.De Paul', 'E.Fernandez', 'A. MacAllister');
            $delantera = array('L.Messi', 'J.Alvarez');
            break;
        case '131222':
            $defensa =  array('N.Tagliafico', 'C. Romero', 'N.Molina', 'N.Otamendi');
            $medio = array('R.De Paul', 'E.Fernandez', 'A. MacAllister', 'L. Paredes');
            $delantera = array('L.Messi', 'J.Alvarez');
            break;
        case '181222':
            $defensa = array('N.Tagliafico', 'C. Romero', 'N.Molina', 'N.Otamendi');
            $medio = array('R.De Paul', 'E.Fernandez', 'A. MacAllister');
            $delantera = array('L.Messi', 'J.Alvarez', 'A. Di Maria');
            break;
    }

?>

    <div class="container_jugadores">
        <h3>Defensa:</h3>
        <div class="section">
            <?php
            foreach ($defensa as $jugador) {
                echo $jugador . '<br>';
            }
            ?>
        </div>


        <h3>Medio:</h3>
        <div class="section">
            <?php
            foreach ($medio as $jugador) {
                echo $jugador . '<br>';
            }
            ?>
        </div>
        <h3>Delantera:</h3>
        <div class="section">
            <?php
            foreach ($delantera as $jugador) {
                echo $jugador . '<br>';
            }
            ?>
        </div>
    </div>


<?php } ?>
<?php include 'footer.php'; ?>