<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php

use App\Roman;

require_once ('src/Roman.php');

    if (isset ($_POST['input_roman'])) {
        $value = $_POST['input_roman'];
        $roman = new Roman();
        $result = $roman->toNumeric($value);
    }

    if (isset ($_POST['input_arabic'])) {
        $arabic_value = $_POST['input_arabic'];
        $roman = new Roman();
        $arabic_result = $roman->toRoman($arabic_value);
    }

?>

<div class="container">
    <form action="index.php" method="POST">
        <div class="form-group">
            <input placeholder="Entrer un chiffre romaine" type="text" name="input_roman" id="input_roman" class="form-control" value="<?= $value ?>">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>  

    <?php if (!is_null($result)): ?>
        <div class="alert alert-success">
            <?= $result ?>
        </div>
    <?php endif ?>
</div>

<div class="container">
    <form action="index.php" method="POST">
        <div class="form-group">
            <input placeholder="Entrer un chiffre numérique" type="text" name="input_arabic" id="input_arabic" class="form-control" value="<?= $arabic_value ?>">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>  

    <?php if (!is_null($arabic_result)): ?>
        <div class="alert alert-success">
            <?= $arabic_result ?>
        </div>
    <?php endif ?>
</div>