<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>

	</div>


	<div class="card" style="width: 60%; margin-bottom : 80px">
		<div class="card-body">

			<!-- <form method="POST"> -->

				<div class="form-group">
					<label>Hari</label>
					<input type="text" name="hari" id="hari" class="form-control">
					<?php echo form_error('hari','<div class="text-small text-danger"></div>')?>
				</div>

				<div class="form-group">
					<label>Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" class="form-control">
					<?php echo form_error('tanggal','<div class="text-small text-danger"></div>')?>
				</div>

				<div class="form-group">
					<label>Keterangan</label>
					<textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="10"></textarea>
					<?php echo form_error('hari','<div class="text-small text-danger"></div>')?>
				</div>

				<button type="button" class="btn btn-success" id='btn-submit'>Submit</button>
			<!-- </form> -->
		</div>
	</div>

</div>
<script>
	$(document).ready(function () {
		$('#btn-submit').on('click', function () {
			$.ajax({
				url: 'https://api.telegram.org/bot1788464385:AAFEPCdXO1QYrzAG-MRowrwaYeYVe3PCwlk/sendMessage?parse_mode=Markdown',
				type: 'POST',
				data: {
					'chat_id': -599378496,
					'text': 'Jadwal posyandu pada tanggal ' + $('#tanggal').val() +'\n' + $('#keterangan').val()
				},
				dataType: 'html',
				success: function () {
					console.log("BERHASIL")
					simpanJadwalKeDatabase()		
				},
				error: function(error){
					console.log(error)
				}
			})
		})
	});

	function simpanJadwalKeDatabase(){
		var hari = $('#hari').val();
		var tanggal = $('#tanggal').val();
		var keterangan = $('#keterangan').val();

		$.ajax({
			url : '<?php echo base_url('admin/dataJadwal/addDataAksi') ?>',
			data : {
				hari,
				tanggal,
				keterangan,
			},
			type : 'POST',
			success: function(){
				window.location.href = '<?php echo base_url('admin/dataJadwal') ?>'
			}
		})
	}

</script>
<!-- /.container-fluid -->
