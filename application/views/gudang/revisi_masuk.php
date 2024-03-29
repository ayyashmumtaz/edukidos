<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

<?php if ($this->session->flashdata('update_berhasil')) : ?>
  <script type="text/javascript">
    let timerInterval
    Swal.fire({
      title: 'Update Berhasil!',
      html: ' ',
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
  <?= $this->session->flashdata('update_berhasil') ?>

<?php endif ?>

<?php if ($this->session->flashdata('stok_revisi_gagal')) : ?>
	<script type="text/javascript">
		Swal.fire({
			icon: 'warning',
			title: 'Stok Melebihi Batas Revisi!',
		})
	</script>
	<?= $this->session->flashdata('stok_revisi_gagal') ?>
<?php endif ?>

<div class="container">
	<h3>Riwayat Revisi Stok</h3>
	<div class="table-responsive">
		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>

					<th>Tanggal Revisi</th>
					<th>Nama Bahan</th>
					<th>Jumlah Revisi</th>
					<th>Direvisi Oleh</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($revisi as $b) {
				?>
					<tr>
						<td><?= $b->tgl_revisi ?></td>
						<td><?= $b->nama_bahan ?></td>
						<td><?= $b->jumlah ?></td>
						<td><?= $b->user ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
