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
    <!-- filtro del pacheggio  -->
    <form method="GET" action="index.php">
        <label for="filterParking">Mostra solo hotel con parcheggio:</label>
        <input type="checkbox" id="filterParking" name="filterParking" value="1">
        
        <label for="filterRating">Filtra per Voto (3 o superiore):</label>
        <input type="number" id="filterRating" name="filterRating" min="1" max="5">
        
        <button type="submit">Filtra</button>
    </form>
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
if (isset($_GET['filterParking'])){
    $filteredHotels = array_filter($hotels, function ($hotel){
        return $hotel['parking'];
    });
}else{
    $filteredHotels = $hotels;
}

// gestione filtro voto 
if (isset($_GET['filterRating'])){
    $ratingFilter = intval($_GET['filterRating']);
    $filteredHotels = array_filter($filteredHotels, function ($hotel) use ($ratingFilter){
        return $hotel['vote'] >= $ratingFilter;
    });
}
?>
  


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
            <?php foreach($filteredHotels as $hotel) { ?>
                <tr>
                    <td><?= $hotel["name"] ?></td>
                    <td><?= $hotel["description"] ?></td>
                    <td>
                        <?php
                        if($hotel["parking"]){
                            echo "Si";
                        }else{
                            echo "No";
                        }
                        ?>
                    </td>
                    <td><?= $hotel["vote"] ?></td>
                    <td><?= $hotel["distance_to_center"] ?> Km</td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>
    
</body>
</html>