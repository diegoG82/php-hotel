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
// stampa semplice array

// foreach ($hotels as $hotelist) {
//     foreach ($hotelist as $hotelname) {
//         echo $hotelname . "<br>";
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPhotel</title>
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-4">

        <h1 class="text-center">Lista Hotel</h1>


        <form action="index.php" method="GET">

            <select class="form-select mb-4" name="stars" id="stars">
                <option selected>Seleziona stelle Hotel</option>
                <option value="1">1 stella</option>
                <option value="2">2 stelle</option>
                <option value="3">3 stelle</option>
                <option value="4">4 stelle</option>
                <option value="5">5 stelle</option>
            </select>
            <button class="mb-2" type="submit">cerca</button>

        </form>


        


        <form action="index.php" method="GET">
            <select class="form-select mb-4" aria-label="Default select example" name="parking" id="parking">
                <option value="1">Con parcheggio</option>
                <option value="2">Senza parcheggio</option>

            </select>
            <button class="mb-2 type=" submit">cerca</button>

        </form>


        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Position </th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($hotels as $key => $hotelist) {



                ?>

                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <th scope="row"><?php echo $hotelist['name'] ?></th>
                        <th scope="row"><?php echo $hotelist['description'] ?></th>
                        <th scope="row"><?php echo $hotelist['parking'] ? 'Yes' : 'No'; ?></th>
                        <th scope="row"><?php echo $hotelist['vote'] ?> Stars</th>
                        <th scope="row"><?php echo $hotelist['distance_to_center'] ?> km</th>
                    </tr>

                <?php }

                ?>

            </tbody>
        </table>










    </div>





</body>

</html>