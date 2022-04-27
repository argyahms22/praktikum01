<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.01">
    <link rel="stylesheet" href="latihan01a.css">
    <title>Latihan 03 - PHP dan File</title>
</head>
<body>
<?php
    
    $file = fopen("klasemen.csv","r");
    while (($data_row = fgetcsv($file, 1000, ",")) !== FALSE) {
        
        $racer_list[] = $data_row;
    }
    
    fclose($file);
?>

<h1>Klasemen Sementara (HTML + PHP + CSV File)</h1>
<table class="styled-table">
  <thead>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Points</th>
        <th>Team</th>
        <th>Negara</th>
      </tr>
  </thead>
  <tbody>
<?php
# tulis isi array ke page
foreach ($racer_list as $racer) {
  echo ("<tr><td>" . $racer[0] . "</td><td>" . $racer[1] ."</td><td>" . $racer[2] . "</td><td>" . $racer[3] . "</td><td>" . $racer[4] . "</td></tr>");
}

?>
  </tbody>
</table>
</body>
</html>



