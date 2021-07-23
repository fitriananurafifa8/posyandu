<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

    <div class="card">
    	<div class="card-body">
    		
    		<form method="POST" action="<?php echo base_url('admin/dataPemeriksaanibuhamil/addDataAksi') ?>">
    			
            <div class="form-group">
    				<label>Id Pemeriksaan Ibu</label>
    				<input type="text" name="kode_pemeriksaanibu" class="form-control">
    			</div>

				<div class="form-group">
                        <label>Kode Ibu Hamil</label>
                        <select class="form-control" name="kode_ibuhamil" id="kode_ibuhamil">
                            <option selected>Kode Ibu Hamil</option>
                            <?php foreach ($ibuhamil as $ib) : ?>
                                <option value="<?= $ib->kode_ibuhamil ?>"><?= $ib->kode_ibuhamil ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>

				<div class="form-group">
                        <label>Nama Ibu Hamil</label>
                        <select class="form-control" name="nama" id="nama">
                            <option selected>Nama Ibu Hamil</option>
                            <?php foreach ($ibuhamil as $ib) : ?>
                                <option value="<?= $ib->nama_ibuhamil ?>"><?= $ib->nama_ibuhamil ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>

    			<div class="form-group">
    				<label>Tanggal</label>
    				<input type="date" name="tanggal" class="form-control">
    			</div>

    			<div class="form-group">
    				<label>Berat Badan</label>
    				<input type="number" name="berat_badan" class="form-control">
    			</div>

				<div class="form-group">
    				<label>Lingkar Lengan</label>
    				<input type="number" name="lingkar_lengan" class="form-control">
    			</div>

				<div class="form-group">
                        <label>Pilih Vitamin</label>
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

           