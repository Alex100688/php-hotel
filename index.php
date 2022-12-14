<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => "true",
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => "true",
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => "false",
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => "false",
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => "true",
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ]; 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- INSERITO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--/ INSERITO BOOTSTRAP -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Elenco dei migliori Hotel della zona</h1>
            </div>
            <?php foreach ($hotels as $hotel){ ?>
                <div class="col-12  d-flex flex-column mt-5 py-3 ">
                    <h2 class="text-center mb-3">Nome</h2> 
                    <h3 class="mx-5 text-center name-hotel py-2"><?php echo $hotel['name']?></h3>
                <div class="col d-flex flex-column">
                    <h2 class="text-center mb-3">Descrizione</h2>
                    <h3 class="mx-5 text-center description-hotel py-2"><?php echo $hotel['description']?></h3>
                </div>
                <div class="col d-flex flex-column">
                    <h2 class="text-center mb-3">Parcheggio</h2>
                    <h3 class="mx-5 text-center parking-hotel py-2"><?php echo $hotel['parking']?></h3>
                </div>        
                <div class="col d-flex flex-column">
                    <h2 class="text-center mb-3">Voto</h2>
                    <h3 class="mx-5 text-center vote-hotel py-2"><?php echo $hotel['vote']?></h3>
                </div>
                <div class="col d-flex flex-column">
                    <h2 class="text-center mb-3">Distanza dal centro</h2>
                    <h3 class="mx-5 text-center vote-hotel py-2"><?php echo $hotel['vote']?></h3>
                </div>     
                    
                <?php } ?>
            </div>      
            

        </div>
    </div>
</body>
</html>