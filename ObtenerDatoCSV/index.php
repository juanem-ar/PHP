<?php
    if( isset($_POST['submit'])){
        $datoEnviar = $_POST['dato'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="variable">C.P.</label>
        <input type="number" id="dato" name="dato" require>
        <button type="submit" id="submit" name="submit">Consultar</button>
        <div>
            <?php
                include("validar.php");
            ?>    
        </div>
        
    </form>
</body>
</html>