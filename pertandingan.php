<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><?php echo $league['leagues'][0]['strLeague'] ?></li>
        <li class="breadcrumb-item active" aria-current="page">Pertandingan</li>
    </ol>
</nav>

<a class="btn btn-dark mb-2" href="index.php">Kembali</a>

<div class="row">
    <?php foreach ($pertandinganPremierLeague['events'] as $ppl) { ?>
        <div class="card ml-4 mr-4 mb-4" style="width: 14rem;">
            <img src="<?php echo $ppl['strThumb']; ?>" style="width: 100%; ">
            <div class="card-body">
                <p class="text-center">FT | <?php echo date('d-m-Y', strtotime($ppl['dateEvent'])); ?></p>
                <h5 class="card-title text-center">
                    <?php echo $ppl['strHomeTeam']; ?> - <?php echo $ppl['intHomeScore'] ?>
                </h5>
                <h5 class="card-title text-center">
                    <?php echo $ppl['strAwayTeam']; ?> - <?php echo $ppl['intAwayScore'] ?>
                </h5>
                <center>
                    <a class="btn btn-primary" href="index.php?page=detailPertandingan&idEvent=<?php echo $ppl['idEvent']; ?>">
                        Detail Pertndingan
                    </a>
                </center>
            </div>
        </div>
    <?php } ?>
</div>