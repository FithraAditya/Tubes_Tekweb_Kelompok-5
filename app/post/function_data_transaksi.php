<?php
function tampil_data($mysqli)
{
    $sql = $mysqli->query("SELECT * FROM data_transaksi INNER JOIN tabel_menu on data_transaksi.id_menu = tabel_menu.id_menu; ");
    while ($row = $sql->fetch_assoc()) {
?>
        <tr>
            <td><?= $row['id_transaksi']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['jumlah']; ?></td>
            <td><?= $row['total_harga']; ?></td>
            <td><?= $row['tgl']; ?></td>
            <td>
                <button type="button" class="btn btn-default" data-toggle="dropdown">
                    <i class="fas fa-cog"></i>
                </button>
                <div class="dropdown-menu">
                    <form action="data_transaksi" method="POST">
                        <input type="hidden" name="id_transaksi" value="<?= $row['id_transaksi']; ?>">
                        <button class="dropdown-item" type="submit" name="hapus_data" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                    <a href="edit_data_transaksi/<?= $row['id_transaksi']; ?>" class="dropdown-item">Edit</a>
                </div>
            </td>
        </tr>
<?php
    }
}
