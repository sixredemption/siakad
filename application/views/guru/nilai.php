<div class="container">
  <section class="showcase">

    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Menu</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="#">Menu</a></li>
              <li class="active">Upload Nilai</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>Silahkan Upload Nilai</h2>
      </div>


      <div class="row padall border-bottom">
        <div class="col-lg-12">
          <div class="float-right">
            <a href="<?php echo base_url("excel/format.xlsx"); ?>" class="btn btn-info btn-sm"><i class="fa fa-file-excel"></i> Download Format .XLSX</a>
          </div>
        </div>
      </div>

      <form action="<?php echo base_url("Siswas/import"); ?>" enctype="multipart/form-data" method="post">
        <div class="row padall">
          <div class="col-lg-6 order-lg-1">

            <input type="file" class="custom-file-input" name="file">
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          </div>
          <div class="col-lg-6 order-lg-2">
            <button type="submit" name="import" class="float-right btn btn-primary">Import</button>
            <input type="submit" name="preview" value="Preview">
            <?php
            if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form 
              if (isset($upload_error)) { // Jika proses upload gagal
                echo "<div style='color: red;'>" . $upload_error . "</div>"; // Muncul pesan error upload
                die; // stop skrip
              }

              // Buat sebuah tag form untuk proses import data ke database
              echo "<form method='post' action='" . base_url("index.php/Siswas/import") . "'>";

              // Buat sebuah div untuk alert validasi kosong
              echo "<div style='color: red;' id='kosong'>
		Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
		</div>";

              echo "<table border='1' cellpadding='8'>
		<tr>
			<th colspan='6'>Preview Data</th>
		</tr>
		<tr>
			<th>ID_guru</th>
			<th>ID_kelas</th>
			<th>ID_siswa</th>
			<th>ID_mapel</th>
			<th>nilai_siswa</th>
			<th>id_semester</th> 
		</tr>";

              $numrow = 1;
              $kosong = 0;

              // Lakukan perulangan dari data yang ada di excel
              // $sheet adalah variabel yang dikirim dari controller
              foreach ($sheet as $row) {
                // Ambil data pada excel sesuai Kolom
                $id_guru = $row['A']; // Ambil data NIS
                $id_kelas = $row['B']; // Ambil data nama
                $id_siswa = $row['C']; // Ambil data jenis kelamin
                $id_mapel = $row['D']; // Ambil data alamat
                $nilai_siswa = $row['E']; // Ambil data nilai
                $id_semester = $row['F']; // Ambil data semester

                // Cek jika semua data tidak diisi
                if (empty($nilai_siswa))
                  continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                // Cek $numrow apakah lebih dari 1
                // Artinya karena baris pertama adalah nama-nama kolom
                // Jadi dilewat saja, tidak usah diimport
                if ($numrow > 1) {
                  // Validasi apakah semua data telah diisi
                  $guru_td = (!empty($id_guru)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                  $kelas_td = (!empty($id_kelas)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                  $siswa_td = (!empty($id_siswa)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                  $mapel_td = (!empty($id_mapel)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $nilai_td = (!empty($nilai_siswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $semester_td = (!empty($id_semester)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

                  // Jika salah satu data ada yang kosong
                  if (empty($nilai_siswa)) {
                    $kosong++; // Tambah 1 variabel $kosong
                  }

                  echo "<tr>";
                  echo "<td" . $guru_td . ">" . $id_guru . "</td>";
                  echo "<td" . $kelas_td . ">" . $id_kelas . "</td>";
                  echo "<td" . $siswa_td . ">" . $id_siswa . "</td>";
                  echo "<td" . $mapel_td . ">" . $id_mapel . "</td>";
                  echo "<td" . $nilai_td . ">" . $nilai_siswa . "</td>";
                  echo "<td" . $semester_td . ">" . $id_semester . "</td>";
                  echo "</tr>";
                }

                $numrow++; // Tambah 1 setiap kali looping
              }

              echo "</table>";

              // Cek apakah variabel kosong lebih dari 0
              // Jika lebih dari 0, berarti ada data yang masih kosong
              if ($kosong > 0) {
                ?>
                <script>
                  $(document).ready(function() {
                    // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                    $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                    $("#kosong").show(); // Munculkan alert validasi kosong
                  });
                </script>
              <?php
            } else { // Jika semua data sudah diisi
              echo "<hr>";

              // Buat sebuah tombol untuk mengimport data ke database
              echo "<button type='submit' name='import'>Import</button>";
              echo "<a href='" . base_url("index.php/Siswas") . "'>Cancel</a>";
            }

            echo "</form>";
          }
          ?>
          </div>
        </div>
      </form>

  </section>
</div>