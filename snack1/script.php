<?php
    $matches = [
        [
            'home_team' => 'Olimpia Milano',
            'home_score' => 35,
            'guest_team' => 'Virtus Bologna',
            'guest_score' => 20,
        ],
        [
            'home_team' => 'Reyer Venezia Mestre',
            'home_score' => 40,
            'guest_team' => 'Germani Brescia',
            'guest_score' => 30,
        ],
        [
            'home_team' => 'Universo Treviso',
            'home_score' => 15,
            'guest_team' => 'Dinamo Sassari',
            'guest_score' => 30,
        ],
        [
            'home_team' => 'Vanoli Cremona',
            'home_score' => 25,
            'guest_team' => 'Pall. Trieste',
            'guest_score' => 25,
        ],
    ]
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Leonardo Olia">
    <title>Snack1</title>
</head>

<body>
   <div>
   <ul>
        <?php foreach ($matches as $match): ?>
            <li>
                <?= "{$match['home_team']} - {$match['guest_team']} | {$match['home_score']}-{$match['guest_score']}"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
   </div>
</body>

</html>