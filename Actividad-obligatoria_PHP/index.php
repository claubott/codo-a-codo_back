<?php
// 1-Crear un programa en PHP en el cual muestre en la página nombre, apellido, edad, hobbie, 
// editor de código preferido, sistema operativo que utiliza.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>echo</title>
</head>
<body>
    <?php
    $nombre = "Claudia";
    $apellido = "Bottero";
    $edad = 44;
    $hobby = "Leer";
    $editor = "VSCode";
    $os = "Windows 10";
    $image_url = "weeme.jpg";
    $image_alt = "Mini me"
    ?>

    <?php
    // Using echo in every variable, concatenation when needed
    // Así es como se usa en WordPress, que es lo que conocía hasta el momento. Me parece que no es muy práctico. Busqué alternativas más limpias y las incluí más abajo.
    ?>
    <!-- <div class="container pt-5">
        <div class="card mb-3 mx-auto" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 text-center">
                    <img src="<?php echo $image_url; ?>" class="img-fluid rounded-start p-2" alt="<?php echo $image_alt; ?>" title="<?php echo $image_alt; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $nombre . ' ' . $apellido; ?></h5>
                        <hr>
                        <dl class="row">
                            <dt class="col-6 text-end">Edad</dt>
                            <dd class="col-6"><?php echo $edad; ?></dd>
                            <dt class="col-6 text-end">Hobby</dt>
                            <dd class="col-6"><?php echo $hobby; ?></dd>
                            <dt class="col-6 text-end">Editor de código</dt>
                            <dd class="col-6"><?php echo $editor; ?></dd>
                            <dt class="col-6 text-end">Sistema operativo</dt>
                            <dd class="col-6"><?php echo $os; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    

    <?php 
    // Using heredoc
    $cardHeredoc = <<<CARD
    <div class="container pt-5">
        <div class="card mb-3 mx-auto" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 text-center">
                    <img src="$image_url" class="img-fluid rounded-start p-2" alt="$image_alt" title="$image_alt">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-center">$nombre $apellido</h5>
                        <hr>
                        <dl class="row">
                            <dt class="col-6 text-end">Edad</dt>
                            <dd class="col-6">$edad</dd>
                            <dt class="col-6 text-end">Hobby</dt>
                            <dd class="col-6">$hobby</dd>
                            <dt class="col-6 text-end">Editor de código</dt>
                            <dd class="col-6">$editor</dd>
                            <dt class="col-6 text-end">Sistema operativo</dt>
                            <dd class="col-6">$os</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    CARD;
    // echo $cardHeredoc;
    ?>

    <?php 
    // Using double quotes and in-string variable
    // Funcionó sin llaves también. Tiene mejor rendimiento que heredoc según: https://www.droptica.com/blog/combining-string-literals-and-variables-php/
    $cardInString = "
    <div class='container pt-5'>
        <div class='card mb-3 mx-auto' style='max-width: 540px;'>
            <div class='row g-0'>
                <div class='col-md-4 text-center'>
                    <img src='{$image_url}' class='img-fluid rounded-start p-2' alt='{$image_alt}' title='{$image_alt}'>
                </div>
                <div class='col-md-8'>
                    <div class='card-body'>
                        <h5 class='card-title text-center'>{$nombre} {$apellido}</h5>
                        <hr>
                        <dl class='row'>
                            <dt class='col-6 text-end'>Edad</dt>
                            <dd class='col-6'>{$edad}</dd>
                            <dt class='col-6 text-end'>Hobby</dt>
                            <dd class='col-6'>{$hobby}</dd>
                            <dt class='col-6 text-end'>Editor de código</dt>
                            <dd class='col-6'>{$editor}</dd>
                            <dt class='col-6 text-end'>Sistema operativo</dt>
                            <dd class='col-6'>{$os}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
    echo $cardInString;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
