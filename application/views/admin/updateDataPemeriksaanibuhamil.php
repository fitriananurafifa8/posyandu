<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
            <?php foreach ($pemeriksaanibu as $pi):?>
    		<form method="POST" action="<?php echo base_url('admin/dataPemeriksaanibuhamil/updateDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Id Pemeriksaan Ibu Hami</label>
                    <input type="hidden" name="id_pemeriksaanibu" class="form-control" value="<?php echo $pi->id_pemeriksaanibu ?>">
    				<input type="text" name="kode_pemeriksaanibu" class="form-control" value="<?php echo $pi->kode_pemeriksaanibu ?>">
    				<?php echo form_error('nama','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                        <label>Kode Ibu Hamil</label>
                        <select class="form-control" name="kode_ibuhamil" id="kode_ibuhamil">
                            <option selected><?php echo $pi->kode_ibuhamil ?></option>
                            <?php foreach ($ibuhamil as $ib) : ?>
                                <option value="<?= $ib->kode_ibuhamil ?>"><?= $ib->kode_ibuhamil ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>

                <div class="form-group">
                        <label>Nama Ibu Hamil</label>
                        <select class="form-control" name="nama" id="nama">
                            <option selected><?php echo $pi->nama ?></option>
                            <?php foreach ($ibuhamil as $ib) : ?>
                                <option value="<?= $ib->nama_ibuhamil ?>"><?= $ib->nama_ibuhamil ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" value="<?php echo $pi->tanggal ?>">
                    <?php echo form_error('tanggal','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Berat badan</label>
                    <input type="text" name="berat_badan" class="form-control" value="<?php echo $pi->berat_badan ?>">
                    <?php echo form_error('berat_badan','<div class="text-small text-danger"></div>')?>
                </div>

                 <div class="form-group">
                    <label>Lingkar Lengan</label>
                    <input type="text" name="lingkar_lengan" class="form-control" value="<?php echo $pi->lingkar_lengan ?>">
                    <?php echo form_error('lingkar_lengan','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                        <label>Pilih Vitamin</label>
                        <select class="form-control" name="vitamin" id="vitamin">
                            <option selected><?php echo $pi->vitamin ?></option>
                            <?php foreach ($vitamin as $v) : ?>
                                <option value="<?= $v->nama_vitamin ?>"><?= $v->nama_vitamin ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>   

                <div class="form-group">
                        <label>Pilih Imunisasi</label>
                        <select class="form-control" name="imunisasi" id="imunisasi">
                            <option selected><?php echo $pi->imunisasi ?></option>
                            <?php foreach ($imunisasi as $i) : ?>
                                <option value="<?= $i->nama_imunisasi ?>"><?= $i->nama_imunisasi ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>    

    			<button type="submit" class="btn btn-success">Update</button>
    		</form>

        <?php endforeach; ?>
    	</div>
    </div>

</div>
