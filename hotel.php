
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista degli Hotel</title>
</head>
<body>
    <div class="container">
        <h1>Lista degli Hotel</h1>
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

        // Stampare tutti i dati per ogni hotel all'interno della struttura HTML
        foreach ($hotels as $hotel): ?>
            <div class="hotel">
                <h2><?= $hotel['name'] ?></h2>
                <p><strong>Descrizione:</strong> <?= $hotel['description'] ?></p>
                <p><strong>Parcheggio disponibile:</strong> <?= $hotel['parking'] ? 'Sì' : 'No' ?></p>
                <p><strong>Voto:</strong> <?= $hotel['vote'] ?></p>
                <p><strong>Distanza dal centro:</strong> <?= $hotel['distance_to_center'] ?> km</p>
                <br> <!-- Aggiungi un separatore tra gli hotel -->
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>