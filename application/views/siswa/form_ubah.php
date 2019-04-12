<html>
  <head>
    <title>Form Ubah Data Siswa</title>
  </head>
  <body>
    <h1>Form Ubah Data Siswa</h1>
    <hr>

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <?php echo form_open("siswa/ubah/".$siswa->nis); ?>
      <table cellpadding="8">
        <tr>
          <td>NIS</td>
          <td><input type="text" name="input_nis" value="<?php echo set_value('input_nis', $siswa->nis); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $siswa->nama); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($siswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($siswa->jenis_kelamin == "Perempuan")? true : false); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp', $siswa->telp); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"><?php echo set_value('input_alamat', $siswa->alamat); ?></textarea></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>
