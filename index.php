<?php 
    $hotels = [
        [
            'nome' => 'Habbo Hotel',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => 'si',
            'img' => 'assets/habbo.jpeg',
            'voto' => 4,
            'DDC' => 10.4 /* distanza dal centro */
        ],
        [
            'nome' => 'Heavenhold',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => 'si',
            'img' => 'assets/Heavenhold.webp',
            'voto' => 2,
            'DDC' => 2
        ],
        [
            'nome' => 'Jabba Palace',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => 'no',
            'img' => 'assets/Jabbas_Palace.webp',
            'voto' => 1,
            'DDC' => 1
        ],
        [
            'nome' => 'Vault Tec Fallout Shelter',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => 'no',
            'img' => 'assets/Vault.jpeg',
            'voto' => 5,
            'DDC' => 5.5
        ],
        [
            'nome' => 'Monopoly Park',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto esse voluptas, quibusdam ipsam pariatur laboriosam! Minus nemo esse ex saepe repudiandae quia, magni quo expedita?',
            'parcheggio' => 'si',
            'img' => 'assets/monopoly.jpeg',
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
 <div class="card d-flex w-50 my-5 mx-auto border-primary  ">
 <img src= "<?php echo $hotel['img']?>" class="card-img-top " alt="..."> 
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
