<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pembayaran SPP</li>
			</ol>
		</div>
	<div class="container-fluid" style="margin-top:10px;">
	 	<div class="card">
			<h2 class="card-header">Daftar Siswa Spp</h2>
 				 <div class="card-body">
						<form method="get" action="">NIS: <input type="text" name="nis" />
						<input type="submit" name="cari" value="Cari Siswa" />
					</form>
	 			</div>
		</div><br>
            <div class=col-sm-2>
                <div class="form-group">
                    <label for="">Tampilkan:</label>
                    <select class="form-control" name="" id="">
                        <option>Semua Siswa</option>
                        <option>Jurusan Ipa</option>
                        <option>Jurusan Ips</option>
                    </select>
                </div>
            </div>
			<div class=col-sm-2>
                <div class="form-group">
                    <label for="">Kelas: </label>
                    <select class="form-control" name="" id="">
                        <option>Semua Kelas</option>
                        <option>10-Ipa-1</option>
                        <option>10-Ipa-2</option>
						<option>11-Ipa-1</option>
						<option>11-Ipa-2</option>
						<option>12-Ipa-1</option>
						<option>12-Ipa-2</option>
						<option>10-Ips-1</option>
						<option>10-Ips-2</option>
						<option>11-Ips-1</option>
						<option>11-Ips-2</option>
						<option>12-Ips-1</option>
						<option>12-Ips-2</option>
						</select>
                </div>
            </div> 
    </div><br>
    <div class="container col-md-12">
    <table class="table table-striped clickable">
				<thead>
					<tr>
                        <th>No</th>                    
						<th>Nis</th>
						<th>Nama</th>
						<th>Gender</th>
						<th>Jurusan</th>
						<th>Kelas</th>
						<th>Alamat</th>
						<th>No Telepon</th>
						<th>Status Spp</th>
	                </tr>
					<tbody>
					 <tr>
                     <td>1</td>
					 <td>17271721721</td>
					 <td>Firman</td>
					 <td>Laki-Laki</td>
					 <td>Ipa</td>
					 <td>10-Ipa-1</td>
					 <td>Jl.Zimbawe</td>
					 <td>0831229191</td>
					 <td><a href="<?=base_url('admin/statusspp')?>"> lihat status spp</a></td>
					 </tr>
					</tbody>
					</thead>
	        </table>
    </div>
        
</div>