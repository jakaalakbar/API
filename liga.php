<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            Daftar Liga
        </li>
    </ol>
</nav>

<div class="row">
    <?php foreach ($profile['countrys'] as $p) { ?>
        <div class="card ml-4 mr-4 mb-4" style="width: 10rem;">
            <img src="<?php echo $p['strBadge']; ?>" class="card-img-top">
            <div class="card-body">
                <h6 class="text-center"><?php echo $p['strLeague']; ?></h6>
                <center>
                    <a class="btn btn-primary mb-2" href="index.php?page=pertandingan&idLeague=<?php echo $p['idLeague']; ?>">Pertandingan</a>
                    <br>
                    <a class="btn btn-primary mb-2" href="index.php?page=klasemen&table=<?php echo $p['idLeague']; ?>&s=2020-2021">
                        klasemen
                    </a>
                    <br>
                    <a class="btn btn-primary" href="index.php?page=tim&tim=<?php echo $p['idLeague']; ?>">Tim</a>
                </center>
            </div>

        </div>
    <?php } ?>
</div>