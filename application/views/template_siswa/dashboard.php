<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Selamat datang, username <?= $this->session->userdata("username"); ?></h1>
    <p>NISN : <?= $this->session->userdata("nisn"); ?></p>
    <p>Nama : <?= $this->session->userdata("nama_siswa"); ?></p>
    <p>Username : <?= $this->session->userdata("username"); ?></p>
    <p>Jenis Kelamin : <?= $this->session->userdata("jenis_kelamin"); ?></p>
</body>

</html>