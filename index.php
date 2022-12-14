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
        <div class="row gx-4">
            <div class="col-12">
                <h1 class="text-center my-5">Elenco dei migliori Hotel della zona</h1>
            </div>
            <?php foreach ($hotels as $hotel){ ?>
                <div class="square box-hotel d-flex flex-column  ">
                    <h5 class="text-center mb-3">Nome</h5> 
                    <h6 class="mx-5 text-center name-hotel py-2"><?php echo $hotel['name']?></h6>
                </div>      
                <div class="square box-hotel d-flex flex-column">
                    <h5 class="text-center mb-3">Descrizione</h5>
                    <h6 class="mx-5 text-center description-hotel py-2"><?php echo $hotel['description']?></h6>
                </div>
                <div class="square box-hotel d-flex flex-column">
                    <h5 class="text-center mb-3">Parcheggio</h5>
                    <h6 class="mx-5 text-center parking-hotel py-2"><?php echo $hotel['parking']?></h6>
                </div>        
                <div class="square box-hotel d-flex flex-column">
                    <h5 class="text-center mb-3">Voto</h5>
                    <h6 class="mx-5 text-center vote-hotel py-2"><?php echo $hotel['vote']?></h6>
                </div>
                <div class="square box-hotel d-flex flex-column">
                    <h5 class="text-center mb-3">Distanza dal centro</h5>
                    <h6 class="mx-5 text-center vote-hotel py-2"><?php echo $hotel['distance_to_center']?> km</h6>
                </div>             
            <?php } ?>
            

        </div>
    </div>
</body>
</html>