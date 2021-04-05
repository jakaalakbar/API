<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Tim</li>
    </ol>
</nav>
<br>
<h4>Tabel Tim Favorit</h4>
<table class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nama tim</th>
            <th>Julukan</th>
            <th>Stadium</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php include 'koneksi.php' ?>
        <?php
        $sql = mysqli_query($conn, 'SELECT * FROM tim_favorit');

        foreach ($sql as $s) {
        ?>
            <tr>
                <td><?php echo $s['nama'] ?></td>
                <td><?php echo $s['julukan'] ?></td>
                <td><?php echo $s['stadium'] ?></td>
                <td>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $s['id'] ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>