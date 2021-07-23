<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

    <div class="card" style="width: 60%; margin-bottom: 80px">
    	<div class="card-body">
    		
    		<form method="POST" action="<?php echo base_url('admin/dataUser/tambahDataAksi') ?>">
    			
    			<div class="form-group">
    				<label>id user</label>
    				<input type="number" name="id_balita" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Username</label>
    				<input type="text" name="username" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Passsword</label>
    				<input type="text" name="password" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Nama</label>
    				<input type="number" name="nama" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Level</label>
    				<select name="level" class="form-control">
    					<option value="">--Pilih Jenis Level--</option>
    					<option value="Petugas">Petugas</option>
    					<option value="Admin">Admin</option>
    			</select>
    			</div>

                <button type="submit" class="btn btn-success">Submit</button>
    		</form>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->

           