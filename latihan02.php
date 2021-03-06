<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 02 - PHP dan Array</title>
</head>
<body>
    <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

/* mouse over link */
tr:hover {
    color: #009879;
}
    </style>
    <h1>Klasemen Sementara (HTML + PHP Array)</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $racer_list = array(
        array(1,"Agus", 6000,"Repsol Honda"),
        array(2,"Budi", "5150", "Monster Yamaha"),
        array(3,"Charli", "6000", "RedBull KTM"),
        array(4,"Dedi","5150","Petronas"),
        array(5,"Edi","6000","LCR"),
        array(6,"Farah","5150","RNF Moto"),
        array(7,"Ganda","6000","Ducati"),
        array(8,"Hari","5150", "Reale Avintia"),
        array(9,"Iyun","6000","Suzuki"),
        array(10,"Joko","5150","Pons Racing")
    );
    #tulis isi array ke page
    foreach ($racer_list as $racer) {
        echo("<tr><td>" . $racer[0] . "</td><td>". $racer[1] ."</td><td>"
        . $racer[2] ."</td><td>" . $racer[3] . "</td></tr>");
    }

    ?>
    </tbody>
</table>
</body>
</html>