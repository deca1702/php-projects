<?php
$clase = "proyectos";
require 'includes/header.php';

$proyectos = ['DEI', 'SGE', 'EIE', 'TFG', 'HLC', 'ACDAT', 'PMDMO',]
    ?>
<h1>
    PROYECTOS
</h1>
<div class="containder-fluid">
    <ul class="list-group">
        <?php
        foreach ($proyectos as $p) {
            echo '<li class="list-group-item">' . $p . '</li>';
        }
        ?>
    </ul>
</div>
</body>

</html>