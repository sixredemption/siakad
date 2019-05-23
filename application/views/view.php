<html>

<head>
    <title>IMPORT EXCEL CI 3</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <hr>
    <a href="<?php echo base_url("index.php/siswas/form"); ?>">Import Data</a><br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID_guru</th>
            <th>ID_kelas</th>
            <th>ID_siswa</th>
            <th>ID_mapel</th>
            <th>nilai_siswa</th>
            <th>id_semester</th>
        </tr>

        <?php
        if (!empty($siswa)) { // Jika data pada database tidak sama dengan empty (alias ada datanya)
            foreach ($siswa as $data) { // Lakukan looping pada variabel siswa dari controller
                echo "<tr>";
                echo "<td>" . $data->id_nilai . "</td>";
                echo "<td>" . $data->id_kelas . "</td>";
                echo "<td>" . $data->id_siswa . "</td>";
                echo "<td>" . $data->id_mapel . "</td>";
                echo "<td>" . $data->nilai_siswa . "</td>";
                echo "<td>" . $data->id_semester . "</td>";
                echo "</tr>";
            }
        } else { // Jika data tidak ada
            echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
        }
        ?>
    </table>
</body>

</html>