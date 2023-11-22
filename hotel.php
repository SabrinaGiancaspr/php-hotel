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
    <title>Lista degli Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <h1>Lista degli Hotel</h1>
        <table class="table">
            <?php foreach ($hotels as $hotel) { ?>
                <tbody>
                <tr>
                    <td><?php echo $hotel['name'] ?></td>
                    <td><?php echo $hotel['description'] ?></td>
                    <td>
                        <?php
                            if($hotel['parking'] === true){
                                echo 'si';
                            } else {
                                echo 'no';
                            }
                        ?>
                    </td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td><?php echo $hotel['distance_to_center']?></td>
                </tr>
                </tbody>
            <?php } ?>
            <thead>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parking</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </thead>
        </table>
    </div>
</body>
</html>
