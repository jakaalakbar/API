<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><?php echo $detailTeam['teams'][0]['strTeam'] ?></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Tim</li>
    </ol>
</nav>

<a class="btn btn-dark mb-2" href="index.php">Kembali</a>

<div class="row">
    <div class="card ml-4 mr-4 mb-4" style="width: 100rem;">
        <img src="<?php echo $detailTeam['teams'][0]['strTeamBadge']; ?>" style="width: 14%; ">
        <div class="card-body">
            <form action="input_aksi.php" method="post">
                <input type="hidden" name="nama" value="<?php echo $detailTeam['teams'][0]['strTeam']; ?>">
                <input type="hidden" name="julukan" value="<?php echo $detailTeam['teams'][0]['strKeywords']; ?>">
                <input type="hidden" name="stadium" value="<?php echo $detailTeam['teams'][0]['strStadium']; ?>">
                <input class="btn btn-primary mb-2" type="submit" value="Tambah Favorit"></input>
            </form>
            <h6 class="card-title">
                <?php echo $detailTeam['teams'][0]['strAlternate']; ?>
                <br>
                <?php echo "Since : " . $detailTeam['teams'][0]['intFormedYear']; ?>
                <br>
                <?php echo "Stadium : " . $detailTeam['teams'][0]['strStadium']; ?>
                <br>
                <?php echo "Capacity : " . $detailTeam['teams'][0]['intStadiumCapacity'] ?>
                <br>
                <?php echo "Location : " . $detailTeam['teams'][0]['strStadiumLocation'] ?>
                <br>
                <?php echo "Website : " . $detailTeam['teams'][0]['strWebsite'] ?>
            </h6>
            <p><?php echo $detailTeam['teams'][0]['strDescriptionEN'] ?></p>
        </div>
    </div>
</div>