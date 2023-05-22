<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container my-5">
            <h1 class="text-center">Hotels</h1>
            <div>
                <table class="table w-100 rounded-5 overflow-hidden text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <?php foreach($hotels as $hotel): ?>
                                <td scope="col"><?php echo $hotel['name']?></td>
                            <?php endforeach; ?>    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Descrizione</th>
                                    <?php foreach($hotels as $hotel): ?>
                                        <td><?php echo $hotel['description']?></td>
                                    <?php endforeach; ?> 
                                </tr>
                                <tr>
                                    <th scope="row">Parcheggio</th>
                                    <?php foreach($hotels as $hotel): ?>
                                    <td><?php echo $hotel['parking']?></td>
                                    <?php endforeach; ?>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">Voto</th>
                                    <?php foreach($hotels as $hotel): ?>
                                    <td><?php echo $hotel['vote']?></td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <th scope="row">Distanza dal centro</th>
                                    <?php foreach($hotels as $hotel): ?>
                                    <td><?php echo $hotel['distance_to_center']?></td>
                                    <?php endforeach; ?>
                                    </tr>
                            </tbody>
                        </table>
            </div>
    </div>
    
</body>
</html>
