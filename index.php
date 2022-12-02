
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



$tableHeader = ['nome hotel','descrizione','posto auto', 'stelle','distanza dal centro'];

$title = 'PHP Hotel' ;

$filteredHotels = $hotels ;


function checkParking($hotel){
  return $hotel['parking'] == $_GET['parking'] ;
}

function checkVote($hotel){
  return $hotel['vote'] >= $_GET['vote'];
}



if( !empty($_GET['parking']) || isset($_GET['parking']) &&  empty($_GET['parking'])){
  $filteredHotels = array_filter($filteredHotels, 'checkParking');
  }
  
  if(!empty($_GET['vote'])){
    $filteredHotels = array_filter($filteredHotels, 'checkvote');
  }

?>



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


<body>

<div class="container py-5">

  <div class="row">
    <div class="col">

      <h1 class=" text-center ">
        <?php echo $title ;?>
      </h1>

    </div>
  </div>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class="row pt-5">

     <div class="col-2">
        <input name="parking" type="radio" value="" class="form-check-input" id="park2">
        <label class="form-check-label" for="park">Senza posto Auto</label>
      </div>

      <div class="col-2">
        <input name="parking" type="radio" value="1" class="form-check-input" id="park">
        <label class="form-check-label" for="park1">Posto Auto</label>
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

  <?php  foreach($filteredHotels as $hotel) :?>
  
  <tr> 
    <td class="text-center"><?php echo $hotel['name'] ?></td>
    <td class="text-center"><?php echo $hotel['description'] ?></td>
    <td class="text-center"><?php echo $hotel['parking'] ?'Si' : 'No' ?></td>
    <td class="text-center"><?php echo $hotel['vote'] ?></td>
    <td class="text-center"><?php echo $hotel['distance_to_center'] ?></td>
  </tr>

  <?php endforeach; ?>
   
  </tbody>
</table>

    </div>
  </div>

</div>

</body>

</html>


