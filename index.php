<!-- CONSEGNA :
Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2 style="text-align:center">TABELLA HOTEL</h2>
    <table class=" table table-striped" >
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizone</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
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
    // adesso scrivo tramite echo le righe nel corpo della tabella 
    foreach ( $hotels as $hotel){
        echo "<tr>";
        echo "<td>" . $hotel["name"] . "</td>";
        echo "<td>" . $hotel["description"] . "</td>";
        echo "<td>";
        if($hotel["parking"]){
            echo "Si";
        }else{
            echo "No";
        }
        echo "</td>";
        echo "<td>" . $hotel["vote"] . "</td>";
        echo "<td>" . $hotel["distance_to_center"] . "Km </td>";

        echo "</tr>";

    }
// [

        // stampo tutto a schermo 
        // foreach($hotels as $hotel){
        //     $name = $hotel["name"];
        //     $description = $hotel["description"];
        //     $parking = $hotel["parking"];
        //     $vote = $hotel["vote"];
        //     $distance_to_center = $hotel["distance_to_center"];

            // echo che stampa tutti i dati in lista 

            // echo "Nome Hotel :" . $name . "<br>" . "Descrizione :" . $description . "<br>" . "Parcheggio" . $parking . "<br>" . "voto : " . $vote . "<br>" . "distanza dal centro :" . $distance_to_center; 
        // }
    // ]
?>
        </tbody>
    </table>
</div>
    
</body>
</html>