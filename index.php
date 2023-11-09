<?php 

require_once __DIR__ . '/Model/CarInfo.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>

  <title>DB FIRST</title>
</head>
<body>

  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">KEY</th>
          <th scope="col">CARATTERISTICHE</th>
          <th scope="col">ESEMPIO</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($car_info as $info): ?>
          <tr>
            <td><?php echo $info->key ?></td>
            <td><?php echo implode(' - ', $info->characteristics_key) ?></td>
            <td><?php echo $info->exemple ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>

  </div>
  
</body>
</html>