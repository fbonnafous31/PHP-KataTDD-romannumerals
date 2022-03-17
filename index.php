<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php

use App\Roman;

require_once ('src/Roman.php');

    if (isset ($_POST['input_roman'])) {
        $value = $_POST['input_roman'];
        $roman = new Roman();
        $result = $roman->toNumeric($value);
    }

?>

<div class="container">
    <form action="index.php" method="POST">
        <div class="form-group">
            <input type="text" name="input_roman" id="input_roman" class="form-control" placeholder="Entrer une valeur" value="<?= $value ?>">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>  

    <?php if (!is_null($result)): ?>
        <div class="alert alert-success">
            <?= $result ?>
        </div>
    <?php endif ?>
</div>