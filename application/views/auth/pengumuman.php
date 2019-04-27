<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>judul</th>
                <th>tanggal</th>
                <th>keterangan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($user as $key) { ?>
                <tr>
                    <td><?= $key->id;  ?></td>
                    <td><?= $key->judul;  ?></td>
                    <td><?= $key->tanggal;  ?></td>
                    <td><?= $key->keterangan;  ?></td>
                </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</body>

</html>