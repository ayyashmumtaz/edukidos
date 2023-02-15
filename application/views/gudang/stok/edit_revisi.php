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
   <hr>
   <div class="col-12 d-flex flex-row align-items-center justify-content-between pl-0">
      <h5 class="mb-0">Revisi Stok</h5>
      <button type="button" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#batal">
         <i class="fa-solid fa-xmark pr-2"></i>Batal
      </button>
   </div>
   <hr>
   <form action="<?= base_url('Gudang/revisi_update'); ?>" method="post">
      <div class="row">
         <input type="hidden" class="form-control" name="id_beli" value="<?= $barangRetur->id_beli ?>">
         <input type="hidden" class="form-control" id="id_bahan" name="id_barang" value="<?= $barangRetur->id_barang ?>">

         <div class="col-md-3">
            <div class="form-group">
               <label for="last">NOMER PO</label>
               <input type="text" class="form-control" name="no_po" value="<?= $barangRetur->no_po ?>" disabled>
            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
               <label for="last">NAMA BAHAN</label>
               <input type="text" class="form-control" name="nama_bahan" value="<?= $barangRetur->nama_bahan ?>" disabled>
            </div>
         </div>
</div>

<div class="row">


         <div class="col-md-3">
            <div class="form-group">
               <label for="last">JUMLAH BARANG MASUK</label>
               <input type="text" class="form-control" name="stok_lama" value="<?= $barangRetur->jumlah ?>" readonly>
            </div>
         </div>

         <div class="col-md-3">
            <div class="form-group">
               <label for="last">JUMLAH REVISI STOK</label>
               <input type="number" min="0" class="form-control" name="jumlah" id="jumlah" onchange="cekStok();" required>
            </div>
         </div>

         <div class="col-md-3">
            <div class="form-group">
               <label for="last">TANGGAL REVISI</label>
               <input type="date" class="form-control" name="tanggal_retur" required>
            </div>
         </div>

        
      </div>
      <button class="btn btn-primary">Revisi Barang</button>
   </form>
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
            <a href="<?= base_url('Gudang/revisi_stok') ?>" type="button" class="btn btn-primary">Ya</a>
         </div>
      </div>
   </div>
</div>

<script>
   function cekStok() {

let jumlah = $('#jumlah').val();

$.ajax({
   url: "<?= base_url() ?>Gudang/cek_stok/" + $('#id_bahan').val(),
   data: '&id_barang=' + id_bahan,

   success: function(result) {
      var data = JSON.parse(result);
      console.log(data[0].stok);
      if (data[0].stok < jumlah) {
         Swal.fire({
            icon: 'warning',
            title: 'Stok Melebihi Batas Revisi!'
         })
      }
   }
})
}
</script>