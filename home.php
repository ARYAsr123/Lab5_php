<?php

$database = new Database();
$data = $database->x("lab5_php");

?>

<div class="main">
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data as $row) {
        ?>
            <tr>
                <td> <?= $row['nim']; ?></td>
                <td> <?= $row['nama']; ?></td>
                <td> <?= $row['gender']; ?></td>
                <td> <?= $row['hobi']; ?></td>
                <td>
                    <a href="update?nim=<?= $row['nim']; ?>">Ubah</a>
                    <a href="delete?nim=<?= $row['nim']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="tambah" href="add">tambah</a>
</div>