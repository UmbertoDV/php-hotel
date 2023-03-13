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

// var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>HOTELS</h1>
        <div class="card">
          <div class="card-header">
            Elenco Hotels
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Parking</th>
                  <th scope="col">Vote</th>
                  <th scope="col">Distance</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($hotels as $key => $hotel):  ?>
                <tr>
                  <th scope="row"><?php echo $key + 1 ?></th>
                  <td><?php echo $hotel["name"] ?></td>
                  <td><?php echo $hotel["description"] ?></td>
                  <td><?php echo $hotel["parking"] ? "Sì" : "No" ?></td>
                  <td><?php echo $hotel["vote"] ?></td>
                  <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
                <?php endforeach;  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Seconda RIGA -->
    <div class="row my-5">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Filtraggio
          </div>
          <div class="card-body">
            <form method="$_GET">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="parkingFilter" id="parkingFilter1">
                <label class="form-check-label" for="parkingFilter1">
                  Con parcheggio
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="parkingFilter" id="parkingFilter2" checked>
                <label class="form-check-label" for="parkingFilter2">
                  Senza parcheggio
                </label>
              </div>
              <button class="btn btn-primary mt-3">Filtra</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>