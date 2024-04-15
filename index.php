<?php 
    $hotels = [
        [
            'nome' => 'Hotel Belvedere',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => `si`,
            'voto' => 4,
            'DDC' => 10.4 /* distanza dal centro */
        ],
        [
            'nome' => 'Hotel Futuro',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => `si`,
            'voto' => 2,
            'DDC' => 2
        ],
        [
            'nome' => 'Hotel Rivamare',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => `no`,
            'voto' => 1,
            'DDC' => 1
        ],
        [
            'nome' => 'Hotel Bellavista',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => `no`,
            'voto' => 5,
            'DDC' => 5.5
        ],
        [
            'nome' => 'Hotel Milano',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => `si`,
            'voto' => 2,
            'DDC' => 50
        ],
    ];

    /*$hotels_lenght = count($hotels);
    var_dump($hotels_lenght); */

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> PHP-Hotel</title>
</head>

<body>

<ul>
<?php foreach($hotels as $hotel): ?>
 <div class="card">
 <img src="..." class="card-img-top" alt="..."> 
  <div class="card-body">
    <h5 class="card-title"> <?php echo $hotel['nome'] ?> </h5>
    <p class="card-text"> <?php echo $hotel['descrizione'] ?> </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> Parcheggio: <?php echo $hotel['parcheggio'] ?> </li>
    <li class="list-group-item"> Distanza dal centro: <?php echo $hotel['DDC'] ?>Km </li>
    <li class="list-group-item"> Voto medio: <?php echo $hotel['voto'] ?> </li>
  </ul>
</div> 
<?php endforeach; ?>

</body>
</html>
