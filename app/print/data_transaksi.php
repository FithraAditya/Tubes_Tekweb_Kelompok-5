<?php
include '../koneksi.php';
$url = "http://$_SERVER[HTTP_HOST]/terascafe/";
?>
<html>

<head>
    <title>Data Transaksi</title>
    <style type="text/css" media="print">
        @page {
            size: landscape;
        }

        body {
            font-family: 'Times New Roman', sans-serif;
        }

        .display-body {
            font-size: 10px;
            border: 1px solid black;
            width: 100%;
            border-collapse: collapse;
        }

        .display-body th {
            padding: 8px;
        }

        .display-body th,
        .display-body td {
            border: 1px solid black;
        }

        .display-header {
            margin-bottom: 1rem;
        }

        .display-header td {
            text-align: center;
        }

        .title-header {
            font-size: 1.2rem;
            font-weight: bold;
        }

        h4 {
            text-align: center;
        }

        .background-tr {
            background-color: silver;
        }
    </style>
</head>

<body>
    <table width="100%" class="display-header">
        <tr>
            <td>
                <img src="<?= $url; ?>dist/img/1633914908.64566163901c9d9ff.png" alt="logo-kab" width="50">
            </td>
        </tr>
        <tr>
            <td>
                <span class="title-header">Cafe O'Teras Cafe</span><br>
                <small>Cimahi</small>
            </td>
        </tr>
    </table>

    <table width="100%" class="display-body">
        <thead>
            <tr>
                <th width="10%">ID Transaksi</th>
                <th width="10%">ID Menu</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../koneksi.php';
            $sql = $mysqli->query("SELECT * FROM data_transaksi");
            while ($row = $sql->fetch_assoc()) {
            ?>
                <tr>
                    <td><?= $row['id_transaksi']; ?></td>
                    <td><?= $row['id_menu']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td><?= $row['total_harga']; ?></td>
                    <td><?= $row['tgl']; ?></td>
                <?php
            }
                ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>