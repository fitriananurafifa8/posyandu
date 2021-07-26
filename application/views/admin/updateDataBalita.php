<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 50%" style="width: 60%; margin-bottom: 80px">
    	<div class="card-body">
    		
            <?php foreach ($balita as $b):?>
    		<form method="POST" action="<?php echo base_url('admin/dataBalita/updateDataAksi')?>">
    			<div class="form-group">
    				<label>Kode Balita</label>
                    <input type="hidden" name="id_balita" class="form-control" value="<?php echo $b->id_balita ?>">
    				<input type="text" name="kode_balita" class="form-control" value="<?php echo $b->kode_balita ?>">
    				<?php echo form_error('nama_balita','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                    <label>Nama Balita</label>
                    <input type="text" name="nama_balita" class="form-control" value="<?php echo $b->nama_balita ?>">
                    <?php echo form_error('tempat_lahir','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $b->tempat_lahir ?>">
                    <?php echo form_error('tempat_lahir','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $b->tanggal_lahir ?>">
                    <?php echo form_error('tempat_lahir','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Usia</label>
                    <input type="text" name="usia" class="form-control" value="<?php echo $b->usia ?>">
                    <?php echo form_error('usia','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Jenis kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="<?php echo $b->jenis_kelamin ?>"><?php echo $b->jenis_kelamin ?></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                </div>

                <div class="form-group">
                    <label>Nama Ortu</label>
                    <input type="text" name="nama_ortu" class="form-control" value="<?php echo $b->nama_ortu ?>">
                    <?php echo form_error('nama_ortu','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $b->no_hp ?>">
                    <?php echo form_error('no_hp','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $b->alamat ?>">
                    <?php echo form_error('alamat','<div class="text-small text-danger"></div>')?>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
    		</form>
        <?php endforeach; ?>
    	</div>
    </div>
</div>
<!-- /.container-fluid -->