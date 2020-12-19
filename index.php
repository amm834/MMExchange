<?php

$data = json_decode(file_get_contents('http://forex.cbm.gov.mm/api/latest'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Myanmar Exchange Rate(PHP)</title>
  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
  />
  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.css"
  rel="stylesheet"
  />
</head>
<body>
  <div class="container my-5">
    <h1 class="display-6 text-center my-3"><? echo $data->info; ?></h1>
    <p class="text-center my-3">
      <? echo $data->description; ?>
    </p>
    <table class="table table-hover table-bordered text-center">
      <thead>
        <tr>
          <td>Country</td>
          <td>Rate (Kyats)</td>
        </tr>
      </thead>
      <tbody>
        <? foreach ($data->rates as $key => $value): ?>
        <tr>
          <td>
            <? echo $key ?>
          </td>
          <td>
            <? echo $value ?>
          </td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>

  </div>
</body>
</html>