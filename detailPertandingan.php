<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><?php echo $event['events'][0]['strLeague'] ?></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Pertandingan</li>
    </ol>
</nav>

<div class="row">
    <div class="col-sm-3">
        <img src="<?php echo $detailEvent['events'][0]['strThumb'] ?>" width="100%">
    </div>
    <div class="col-sm-9">
        <h4>
            <?php echo $detailEvent['events'][0]['strHomeTeam'] ?> <?php echo $detailEvent['events'][0]['intHomeScore'] ?>
            vs
            <?php echo $detailEvent['events'][0]['intAwayScore'] ?> <?php echo $detailEvent['events'][0]['strAwayTeam'] ?>
        </h4>

        <?php echo $detailEvent['events'][0]['strLeague'] ?> <?php echo $detailEvent['events'][0]['strSeason'] ?>
        <br>
        Venue : <?php echo $detailEvent['events'][0]['strVenue'] ?>
        <br>
        Match : <?php echo $detailEvent['events'][0]['strStatus'] ?>
    </div>
</div>