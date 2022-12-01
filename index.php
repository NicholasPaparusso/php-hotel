<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.css' integrity='sha512-tBwPRcI1t+0jTsIMtf//+V1f0xAWHh7pvPE82A2n5FcBrzl6b0LRE6XnxUTRHti59y4Js7z4Wb/zal2HBsVVOQ==' crossorigin='anonymous'/>

  <link rel="stylesheet" href="style.css">

  <title>PHP Hotel</title>
</head>

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

$tableHeader = ['nome hotel','descrizione','posto auto', 'valutazione','distanza dal centro'];

$title = 'PHP Hotel' ;

?>



<body>

<div class="container py-5">

  <div class="row">
    <div class="col">

      <h1 class=" text-center ">
        <?php echo $title ;?>
      </h1>

    </div>
  </div>

  <form action="./index.php">
    <div class="row pt-5">

      <div class="col-2">
        <input name="park" type="checkbox" class="form-check-input" id="park">
        <label class="form-check-label" for="park">Posto Auto</label>
      </div>

      <div class="col-2">
        <input name="noPark" type="checkbox" class="form-check-input" id="park">
        <label class="form-check-label" for="park">Senza Posto Auto</label>
      </div>

      <div class="col-1">
        <select name="vote" class="form-select " name="Media Voto recensioni" id="">
          <option selected value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <div class="col-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </div>
  </form>
  

  <div class="row pt-3">
    
    <table class="table border">

  <thead>
    <tr>

      <?php 
      foreach ($tableHeader as $value){
        echo ' <th class="text-center" scope="col">'. ucfirst($value) .'</th>';
      }
      ?>

    </tr>
  </thead>

  <tbody>

  <?php  foreach($hotels as $hotel) :?>
    
  <tr> <?php foreach ($hotel as $value){
    echo "<td class='text-center' > $value </td>" ;
  } ?>  </tr>

  <?php endforeach; ?>
   
  </tbody>
</table>

    </div>
  </div>

</div>

</body>

</html>

<!-- 
  Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
Usiamo la logica con le nozioni che abbiamo fino ad ora senza cercare possibilità di filtri più evoluti che vedremo domani
buon lavoro!
 -->

 <!-- 


 
  -->