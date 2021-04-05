<?php

function http_request($url)
{
    // persiapkan curl
    $ch = curl_init();

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);

    // set user agent    
    curl_setopt(
        $ch,
        CURLOPT_USERAGENT,
        'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13'
    );

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string 
    $output = curl_exec($ch);

    // tutup curl 
    curl_close($ch);

    // mengembalikan hasil curl
    return $output;
}

// Data API
// API Liga Inggris
$profile = http_request("https://www.thesportsdb.com/api/v1/json/1/search_all_leagues.php?c=England&s=Soccer");
// ubah string JSON menjadi array
$profile = json_decode($profile, TRUE);

// API Pertandingan
if (isset($_GET['idLeague'])) {
    $pertandinganPremierLeague = http_request("https://www.thesportsdb.com/api/v1/json/1/eventspastleague.php?id=" . $_GET['idLeague']);
    $league = http_request("https://www.thesportsdb.com/api/v1/json/1/lookupleague.php?id=" . $_GET['idLeague']);

    $pertandinganPremierLeague = json_decode($pertandinganPremierLeague, TRUE);
    $league = json_decode($league, TRUE);
}

// API Pertandingan
if (isset($_GET['idEvent'])) {
    $event = http_request("https://www.thesportsdb.com/api/v1/json/1/lookupevent.php?id=" . $_GET['idEvent']);
    $detailEvent = http_request("https://www.thesportsdb.com/api/v1/json/1/lookupevent.php?id=" . $_GET['idEvent']);

    $event = json_decode($event, TRUE);
    $detailEvent = json_decode($detailEvent, TRUE);

    // echo "<pre>";
    // print_r($detailEvent);
    // echo "</pre>";
}

// API Klasemen
if (isset($_GET['table'])) {
    $table = http_request("https://www.thesportsdb.com/api/v1/json/1/lookuptable.php?l=" . $_GET['table']);
    $table = json_decode($table, TRUE);
}

// API All Team
if (isset($_GET['tim'])) {
    $team = http_request("https://www.thesportsdb.com/api/v1/json/1/lookup_all_teams.php?id=" . $_GET['tim']);
    $league = http_request("https://www.thesportsdb.com/api/v1/json/1/lookupleague.php?id=" . $_GET['tim']);

    $team = json_decode($team, TRUE);
    $league = json_decode($league, TRUE);
}

// API Detail Tim
if (isset($_GET['detailTim'])) {
    $detailTeam = http_request("https://www.thesportsdb.com/api/v1/json/1/lookupteam.php?id=" . $_GET['detailTim']);
    $detailTeam = json_decode($detailTeam, TRUE);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>LIGA INGGRIS</title>
</head>

<body>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3F1052;">
            <img src="<?php echo $profile['countrys'][9]['strBadge']; ?>" style="width:50px;height:50px;" class="card-img-top mr-2">
            <a class="navbar-brand" style="color: white;" href="index.php">Liga Inggris</a>
            <a class="btn" style="color: white;" href="index.php?page=timFavorit">Tim Favorit</a>
        </nav>
    </section>
    <!-- Akhir Navbar -->
    <br>
    <!-- Content -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'home':
                            include "halaman/liga.php";
                            break;
                        case 'pertandingan':
                            include "pertandingan.php";
                            break;
                        case 'detailPertandingan':
                            include "detailPertandingan.php";
                            break;
                        case 'klasemen':
                            include "klasemen.php";
                            break;
                        case 'tim':
                            include "tim.php";
                            break;
                        case 'detailTim':
                            include "detailTim.php";
                            break;
                        case 'timFavorit':
                            include "timFavorit.php";
                            break;
                        default:
                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                            break;
                    }
                } else {
                    include 'liga.php';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Akhir Content -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>