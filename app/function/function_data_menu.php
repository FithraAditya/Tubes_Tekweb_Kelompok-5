<?php
function tampil_data($mysqli)
{
    $sql = $mysqli->query("SELECT * FROM tabel_menu");
    while ($row = $sql->fetch_assoc()) {

?>
        <tr>
            <td><?= $row['id_menu']; ?></td>
            <td><?= $row['jenis_menu']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td>
                <button type="button" class="btn btn-default" data-toggle="dropdown">
                    <i class="fas fa-cog"></i>
                </button>
                <div class="dropdown-menu">
                    <form action="data_menu" method="POST">
                        <input type="hidden" name="id_menu" value="<?= $row['id_menu']; ?>">
                        <button class="dropdown-item" type="submit" name="hapus_data" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                    <a href="edit_data_menu/<?= $row['id_menu']; ?>" class="dropdown-item">Edit</a>
                </div>
            </td>
        </tr>
<?php
    }
}
?>