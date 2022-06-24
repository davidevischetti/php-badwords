<?php
$bad_word = $_GET['bad_word'];
$text = "The Logitech G PRO X SUPERLIGHT and the Razer Viper Ultimate are both amazing wireless gaming mice. If you're a fan of ultra-light mice, the Logitech is worth considering as it's among the lightest wireless mice we've ever tested. It also has a wider CPI range and is fully compatible with Mac, which the Razer isn't. However, the Razer is still very lightweight, has two programmable buttons on each side, and feels more comfortable to use than the Logitech.";
$new_text = str_ireplace($bad_word, '***', $text)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- TESTO ORIGINALE E SUA LUNGHEZZA-->
    <p><?= $text?></p>
    <h2>Lunghezza testo&colon; <?= strlen($text)?></h2> 

    <!-- SCELTA PAROLA DA CENSURARE DA PARTE DELL'UTENTE -->
    <form action="" method="get">
        <label for="bad_word">nome</label>
        <input type="text" name="bad_word" id="bad_word">
        <button>clicca</button>
    </form>

    <!-- TESTO CENSURATO E SUA LUNGHEZZA -->
    <?php
    if ($bad_word != '')    
    echo '<p>' . $new_text . '</p>
    <h2>Lunghezza testo&colon;' . strlen($new_text) . '</h2>'
    ?>
</body>
</html>

