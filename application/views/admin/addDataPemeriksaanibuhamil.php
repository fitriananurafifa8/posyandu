<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

    <div class="card">
    	<div class="card-body">
    		
    		<form method="POST" action="<?php echo base_url('admiin/dataPemeriksaanibuhamil/addDataAksi') ?>">
    			
    			<div class="form-group">
    				<label>id pemeriksaan ibu hamil</label>
    				<input type="text" name="id_balita" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Nama</label>
    				<input type="text" name="nama" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Ttl</label>
    				<input type="text" name="tll" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Usia</label>
    				<input type="number" name="usia" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Jk</label>
    				<select name="jk" class="form-control">
    					<option value="">--Pilih Jenis Kelamin--</option>
    					<option value="Laki-laki">Laki-laki</option>
    					<option value="Perempuan">Perempuan</option>
    				</select>

    			</div>

    			<div class="form-group">
    				<label>Nama Ortu</label>
    				<input type="text" name="nama_ortu" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>No Hp</label>
    				<input type="text" name="no_hp" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Alamat</label>
    				<input type="text" name="alamat" class="form-control">
    			</div>
				<button type="submit" class="btn btn-success">Submit</button>

    		</form>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->

           