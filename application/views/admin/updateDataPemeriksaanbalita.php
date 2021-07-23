<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
            <?php foreach ($pemeriksaanbalita as $pb):?>
    		<form method="POST" action="<?php echo base_url('admin/dataPemeriksaanbalita/updateDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Nama</label>
                    <input type="hidden" name="id_pemeriksaanbalita" class="form-control" value="<?php echo $pb->id_pemeriksaanbalita ?>">
                    <input type="hidden" name="id_balita" class="form-control" value="<?php echo $pb->id_balita ?>">
    				<input type="text" name="nama" class="form-control" value="<?php echo $pb->nama ?>">
    				<?php echo form_error('nama','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" value="<?php echo $pb->ttl ?>">
                    <?php echo form_error('tanggal','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Berat badan</label>
                    <input type="text" name="berat_badan" class="form-control" value="<?php echo $pb->berat_badan ?>">
                    <?php echo form_error('berat_badan','<div class="text-small text-danger"></div>')?>
                </div>

                 <div class="form-group">
                    <label>Tinggi badan</label>
                    <input type="text" name="tinggi_badan" class="form-control" value="<?php echo $pb->tinggi_badan ?>">
                    <?php echo form_error('tinggi_badan','<div class="text-small text-danger"></div>')?>
                </div>

                 <div class="form-group">
                    <label>Lingkar Lengan</label>
                    <input type="text" name="lingkar_lengan" class="form-control" value="<?php echo $pb->lingkar_lengan ?>">
                    <?php echo form_error('lingkar_lengan','<div class="text-small text-danger"></div>')?>
                </div>

                 <div class="form-group">
                    <label>Lingkar Kepala</label>
                    <input type="text" name="lingkar_kepala" class="form-control" value="<?php echo $pb->lingkar_kepala ?>">
                    <?php echo form_error('lingkar_kepala','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Vitamin</label >
                    <select name="vitamin" class="form-control">
                        <option value="">--Pilih Vitamin--</option>
                        <?php foreach($vitamin as $v) : ?>
                        <option value="<?php echo $v->nama_vitamin?>"><?php echo $v->nama_vitamin ?></option>
            
                    </select>

                <div class="form-group">
                    <label>Imunisasi</label >
                    <select name="imunisasi" class="form-control">
                        <option value="">--Pilih Imunisasi--</option>
                        <?php foreach($imunisasi as $i) : ?>
                        <option value="<?php echo $i->nama_imunisasi?>"><?php echo $i->nama_imunisasi ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>


    			<button type="submit" class="btn btn-success">Update</button>
    		</form>

        <?php endforeach; ?>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->