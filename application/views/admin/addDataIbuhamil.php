<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

    <div class="card" style="width: 60%; margin-bottom: 80px">
    	<div class="card-body">
    		
    		<form method="POST" action="<?php echo base_url('admin/dataIbuhamil/addDataAksi') ?>">
    			
    			<div class="form-group">
    				<label>Kode Ibu Hamil</label>
    				<input type="text" name="kode_ibuhamil" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Nama Ibu </label>
    				<input type="text" name="nama_ibuhamil" class="form-control">
    			</div>

				<div class="form-group">
    				<label>Tempat Lahir</label>
    				<input type="text" name="tempat_lahir" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Tanggal Lahir</label>
    				<input type="date" name="tanggal_lahir" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Usia</label>
    				<input type="text" name="usia" class="form-control">
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

           