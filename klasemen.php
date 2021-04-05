<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
        <?php if (isset($table) == 0) {
            echo "";
        } else { ?>
            <?php echo $table['table'][0]['strLeague']; ?>
        <?php } ?>  
        </li>
        <li class="breadcrumb-item active" aria-current="page">klasemen</li>
    </ol>
</nav>

<a class="btn btn-dark mb-4" href="index.php">Kembali</a>

<table class="table">
    <tr>
        <th>No</th>
        <th>Klub</th>
        <th>Poin</th>
    </tr>
    <?php
    if (isset($table) == 0) { 
        echo  "<h3> Klasemen Tidak Tersedia </h3>";
    } else{ ?>
        <?php 
        foreach ($table['table'] as $t) { ?>     
        <tr>
            <td><?php echo $t['intRank'] ?></td>
            <td><?php echo $t['strTeam'] ?></td>
            <td><?php echo $t['intPoints'] ?></td>
        </tr>
    <?php } ?>
    <?php } ?>
</table>