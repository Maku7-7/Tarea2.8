<?php
require_once("CadenasContraAtaca.php");
    $texto = "";
    $accion = "";
    $resultado = "";
    if (isset($_POST['texto'])) {
        $texto = $_POST['texto'];
        $accion = $_POST['accion'];

    if ($accion == "contar") {
        $resultado = "Caracteres: " . contarCaracteres($texto);
    }
    if ($accion == "minu") {
        $resultado = "Minusculas: " . aMinusculas($texto);
    }
    if ($accion == "mayu") {
        $resultado = "Mayusculas: " . aMayusculas($texto);
    }
    if ($accion == "invertir") {
        $resultado = "Invertida: " . invertirCadena($texto);
    }
    if ($accion == "palindromo") {
        $resultado = esPalindromo($texto);
    }
    if ($accion == "vocales") {
        $resultado = "Vocales: " . contarVocales($texto);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadenas</title>
    <link rel="stylesheet" href="styles.css">   
</head>
<body>
        <div class="contenedor">
        <h2>Cadenas</h2>
        <form method="POST" action="">
            <label>Escribe una palabra o frase:</label><br>
            <input type="text" name="texto" value="<?php echo $texto; ?>" required><br><br>   
            <button type="submit" name="accion" value="contar">Contador</button>
            <button type="submit" name="accion" value="minu">Minusculas</button>
            <button type="submit" name="accion" value="mayu">Mayusculas</button>
            <button type="submit" name="accion" value="invertir">Invertir</button>
            <button type="submit" name="accion" value="palindromo">¿Es palindromo?</button>
            <button type="submit" name="accion" value="vocales">Contar vocales</button>
        </form>
        <?php if ($resultado != "") { ?>
            <div class="resultado">
                <p><?php echo $resultado; ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>