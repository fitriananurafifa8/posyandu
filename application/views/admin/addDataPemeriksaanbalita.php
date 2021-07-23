<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

    <div class="card">
    	<div class="card-body">
    		
    		<form method="POST" action="<?php echo base_url('admin/dataPemeriksaanbalita/addDataAksi') ?>">
    			
    			<div class="form-group">
    				<label>Id Pemeriksaan Balita</label>
    				<input type="text" name="kode_pemeriksaan" class="form-control">
    			</div>

    			<div class="form-group">
                        <label>Kode Balita</label>
                        <select class="form-control" name="kode_balita" id="kode_balita" required>
                            <option selected>Kode Balita</option>
                            <?php foreach ($balita as $b) : ?>
                                <option value="<?= $b->kode_balita ?>"><?= $b->kode_balita ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>

    			<div class="form-group">
                        <label>Nama</label>
                        <select class="form-control" name="nama" id="nama" required>
                            <option selected>Nama Balita</option>
                            <?php foreach ($balita as $b) : ?>
                                <option value="<?= $b->nama_balita ?>"><?= $b->nama_balita ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>

    			<div class="form-group">
    				<label>tanggal</label>
    				<input type="date" name="tanggal" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>berat badan</label>
    				<input type="number" name="berat_badan" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>tinggi badan</label>
    				<input type="number" name="tinggi_badan" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>lingkar lengan</label>
    				<input type="number" name="lingkar_lengan" class="form-control">
    			</div>
    			
				<div class="form-group">
    				<label>lingkar kepala</label>
    				<input type="number" name="lingkar_kepala" class="form-control">
    			</div>

				<div class="form-group">
                        <label>Vitamin</label>
                        <select class="form-control" name="vitamin" id="vitamin">
                            <option selected>Pilih Vitamin</option>
                            <?php foreach ($vitamin as $v) : ?>
                                <option value="<?= $v->nama_vitamin ?>"><?= $v->nama_vitamin ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>

				<div class="form-group">
                        <label>Pilih Imunisasi</label>
                        <select class="form-control" name="imunisasi" id="imunisasi">
                            <option selected>Pilih Imunisasi</option>
                            <?php foreach ($imunisasi as $i) : ?>
                                <option value="<?= $i->nama_imunisasi ?>"><?= $i->nama_imunisasi ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>
				
				<button type="submit" class="btn btn-success">Submit</button>
    		</form>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->

           