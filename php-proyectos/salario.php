<!DOCTYPE html>
<html>

<body>

    <form method="post">
        <p>
            <label for="bruto">Bruto al mes:</label>
            <input type="String" name="bruto" id="bruto">
        </p>
        <p>

            <label for="retencion">Retencion:</label>
            <input type="String" name="retencion" id="retencion">
        </p>

        <input type="submit" value="Enviar">
    </form>

        <?php

        $bruto = $_POST['bruto'];
        $retencion = $_POST['retencion'];

        $neto = $bruto - $retencion;

        echo "El salario neto es: " . $neto;



        ?>
    
</body>
</html>