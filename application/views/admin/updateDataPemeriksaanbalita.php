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
    				<label>Kode Pemeriksaan</label>
                    <input type="hidden" name="id_pemeriksaan" class="form-control" value="<?php echo $pb->id_pemeriksaan ?>">
    				<input type="text" name="kode_pemeriksaan" class="form-control" value="<?php echo $pb->kode_pemeriksaan ?>">
    				<?php echo form_error('kode_pemeriksaaan','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                        <label>Kode Balita</label>
                        <select class="form-control" name="nama" id="nama">
                            <option selected><?php echo $pb->kode_balita ?></option>
                            <?php foreach ($balita as $b) : ?>
                                <option value="<?= $b->kode_balita ?>"><?= $b->kode_balita ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>

                <div class="form-group">
                        <label>Nama</label>
                        <select class="form-control" name="nama" id="nama">
                            <option selected><?php echo $pb->nama ?></option>
                            <?php foreach ($balita as $b) : ?>
                                <option value="<?= $b->nama_balita ?>"><?= $b->nama_balita ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?php echo $pb->tanggal ?>">
                    <?php echo form_error('nama','<div class="text-small text-danger"></div>')?>
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
                        <label>Pilih Vitamin</label>
                        <select class="form-control" name="vitamin" id="vitamin">
                            <option selected><?php echo $pb->vitamin ?></option>
                            <?php foreach ($vitamin as $v) : ?>
                                <option value="<?= $v->nama_vitamin ?>"><?= $v->nama_vitamin ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>   

                <div class="form-group">
                        <label>Pilih Imunisasi</label>
                        <select class="form-control" name="imunisasi" id="imunisasi">
                            <option selected><?php echo $pb->imunisasi ?></option>
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