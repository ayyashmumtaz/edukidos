<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

<?php if ($this->session->flashdata('retur_sukses')) : ?>
	<script type="text/javascript">
		let timerInterval
		Swal.fire({
			title: 'Stok Berhasil direvisi!',
			html: 'Mohon di Cek Kembali',
			icon: 'success',
			timer: 1500,

			didOpen: () => {
				Swal.showLoading()
				const b = Swal.getHtmlContainer().querySelector('b')
			},
			willClose: () => {
				clearInterval(timerInterval)
			}

		})
	</script>
	<?= $this->session->flashdata('retur_sukses') ?>
<?php endif ?>

<div class="container">
	<h3>Revisi Stok</h3>
	<div class="table-responsive">
		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nomor PO</th>
					<th>Tanggal Datang</th>
					<th>Nama Bahan</th>
					<th>Qty</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($barangMasuk as $b) {
				?>
					<tr>
						<td><?php echo $b->no_po ?></td>
						<td><?= $b->tgl_beli ?></td>
						<td><?= $b->nama_bahan ?></td>
						<td><?= $b->jumlah ?></td>
						<td><a class="btn btn-sm btn-primary" href="<?= base_url('Gudang/edit_revisi/') . $b->id_beli; ?>">Revisi</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
