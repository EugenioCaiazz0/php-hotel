<?php 
    $hotels = [
        [
            'nome' => 'Habbo Hotel',
            'descrizione' => 'Habbo is one of the most popular wirtual worlds of the planet! Meet new people and start new friendships.',
            'parcheggio' => 'si',
            'img' => 'assets/habbo.jpeg',
            'voto' => 4,
            'DDC' => 10.4 /* distanza dal centro */
        ],
        [
            'nome' => 'Heavenhold',
            'descrizione' => 'A link to the past! Relive your greatest adventures with Guardian Tales! From solving challenging puzzles in epic dungeons to strategic action combat, embark on this legendary journey to save the world of Kanterbury!',
            'parcheggio' => 'si',
            'img' => 'assets/Heavenhold.webp',
            'voto' => 2,
            'DDC' => 2
        ],
        [
            'nome' => 'Jabba`s Palace',
            'descrizione' => 'Hutt Castle, often simply called Jabba the Hutt`s Palace after its owner, is a large sandrock and durasteel complex located at the fringes of the Northern Dune Sea on the planet of Tatooine.',
            'parcheggio' => 'no',
            'img' => 'assets/Jabbas_Palace.webp',
            'voto' => 1,
            'DDC' => 1
        ],
        [
            'nome' => 'Vault Tec Fallout Shelter',
            'descrizione' => 'Fallout Shelter puts you in control of a state-of-the-art underground Vault from Vault-Tec. Build the perfect Vault, keep your Dwellers happy, and protect them from the dangers of the Wasteland.',
            'parcheggio' => 'no',
            'img' => 'assets/Vault.jpeg',
            'voto' => 5,
            'DDC' => 5.5
        ],
        [
            'nome' => 'Monopoly Park',
            'descrizione' => 'I know you know.',
            'parcheggio' => 'si',
            'img' => 'assets/monopoly.jpeg',
            'voto' => 2,
            'DDC' => 50
        ],
    ];

    /*$voto_ricerca = $_GET["voto"];
    $hotels_lenght = count($hotels);
    var_dump($hotels_lenght); */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title> PHP-Hotel</title>
</head>

<body>

<form action="index.php" method="GET">
<select class="form-select border-primary" aria-label="Rating-select" name="voto">
  <option selected>Voto minimo</option> <!-- HO PROVATO A INCLUDERE LE ICON DI FONTAWESOME DIRETTAMENTE NELLE OPTIONS MA NON COMPAIONO, SERVE QUALCHE LINK ULTERIORE -->
  <option value="1"> <span style="color: yellow;">&#9733</span> <span style="color: gray;"></span><span style="color: gray;"></span><span style="color: gray;"></span><span style="color: gray;"></span>
  <option value="2"> <span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: gray;"></span><span style="color: gray;"></span><span style="color: gray;"></span>
  <option value="3"><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: gray;"></span><span style="color: gray;"></span>
  <option value="4"><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: gray;"></span>
  <option value="5"><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span><span style="color: yellow;">&#9733</span>
</select> 
</form>

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
