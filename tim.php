<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><?php echo $league['leagues'][0]['strLeague'] ?></li>
        <li class="breadcrumb-item active" aria-current="page">Tim</li>
    </ol>
</nav>

<a class="btn btn-dark mb-2" href="index.php">Kembali</a>

<div class="row">
    <?php foreach ($team['teams'] as $t) { ?>
        <a href="index.php?page=detailTim&detailTim=<?php echo $t['idTeam']; ?>">
            <div class="card ml-4 mr-4 mb-4" style="width: 14rem;">
                <img src="<?php echo $t['strTeamBadge']; ?>" style="width: 100%; ">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <?php echo $t['strTeam']; ?>
                    </h5>
                    <h5 class="card-title text-center">
                        <?php echo $t['intFormedYear']; ?>
                        <br>
                        <?php echo $t['strStadium'] ?>
                    </h5>
                </div>
            </div>
        </a>
    <?php } ?>
</div>