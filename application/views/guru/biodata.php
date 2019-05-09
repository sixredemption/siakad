 <div class="container">
 <section class="content">
    <div class="jumbotron text-center"> 
      <h3> Biodata Guru </h3>
      </section> 
    </div>
            
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td rowspan="15" width="250px">
                            <img src="<?php echo base_url('foto/pengumuman/default.jpg') ?>" width="300px" height="300px" />
                        </td>
                    </tr>

                    <tr>
                        <td><b>NIG</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("nig_guru"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Nama</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("nama_lengkap"); ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>Tempat, Tanggal Lahir</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("tanggal_lahir"); ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>Kota Asal</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("asal_kota"); ?></td>
                    
                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("jenis_kelamin"); ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>Alamat</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("alamat"); ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>No Telfon</b></td>
                        <td>:</td>
						<td><?= $this->session->userdata("no_telp"); ?></td>
					</tr>
					
                </table>
				<?php echo anchor('guru/editbiodata/'.$this->session->userdata("id_guru") , 'Edit'); ?>
</fieldset>
</form>
</body>
</section>
</div> 
