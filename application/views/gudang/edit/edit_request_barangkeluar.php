<div class="container">
	<hr>
	<div class="col-12 d-flex flex-row align-items-center justify-content-between pl-0">
		<h5 class="mb-0">Edit Data Rekues Barang Keluar</h5>
		<button type="button" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#batal">
			<i class="fa-solid fa-xmark pr-2"></i>Batal
		</button>
	</div>
	<hr>
	<?php foreach ($reqBarangKeluar as $rbk) { ?>
	<form action="<?= base_url('Gudang/update_req_barangkeluar'); ?>" method="post">
	<input type="hidden" name="id_request" value="<?= $rbk->id_request; ?>">
		<div class="row">

        <div class="col-md-6">
				<div class="form-group">
					<label for="last">NAMA User</label>
				    <select name="user" id="user" class="form-control" required>
                    <?php foreach ($user->result_array() as $u) { ?>
                            <option value="<?php echo $u['id_user']; ?>"<?php echo $u['id_user'] == $rbk->id_user ? 'selected' : ''; ?>><?php echo $u['nama']; ?></option>
                    <?php } ?>
                    </select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="last">NAMA Produk</label>
				    <select name="produk" id="produk" class="form-control" required>
                    <?php foreach ($produk->result_array() as $p) { ?>
                            <option value="<?php echo $p['id_produk'] ?>" <?php echo $p['id_produk'] == $rbk->id_produk ? 'selected' : ''; ?>><?php echo $p['nama_produk'] ?></option>
                    <?php } ?>
                    </select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
				    <input type="number" name="jumlah" value="<?= $rbk->jumlah ?>" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="tanggal_req">Tanggal Rekues</label>
				    <input type="date" name="tanggal_req" value="<?= $rbk->tanggal_req ?>" class="form-control">
				</div>
			</div>


		</div>
		<button class="btn btn-primary">Edit Request </button>
	</form>
	<?php } ?>
</div>

<div class="modal fade" id="batal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Membatalkan ?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Jika anda menekan tombol "Ya" maka data yang sudah anda masukkan akan Hilang !</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<a href="<?= base_url('Gudang/reqBarangKeluar') ?>" type="button" class="btn btn-primary">Ya</a>
			</div>
		</div>
	</div>
</div>
