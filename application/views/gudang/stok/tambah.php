<div class="container">
   <hr>
   <div class="col-12 d-flex flex-row align-items-center justify-content-between pl-0">
      <h5 class="mb-0">Tambah Stok</h5>
      <button type="button" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#batal">
         <i class="fa-solid fa-xmark pr-2"></i>Batal
      </button>
   </div>
   <hr>
   <form action="<?= base_url('Gudang/insert_pembelian'); ?>" method="post">
      <div class="row">

         <div class="col-md-4">
            <div class="form-group">
               <label for="last">BAHAN BAKU</label>
               <select class="form-control" id="id" name="id_barang" onchange="return autofill();"><?php foreach ($bahanBaku as $i) { ?>
                     <option value="<?php echo $i['id_bahan']; ?>"><?php echo $i['nama_bahan']; ?></option>
                  <?php } ?>
               </select>
            </div>
         </div>

         <div class="col-md-4">
            <div class="form-group">
               <label for="last">JUMLAH</label>
               <input type="number" class="form-control" name="jumlah">
            </div>
         </div>

         <div class="col-md-4">
            <div class="form-group">
               <label for="last">TANGGAL</label>
               <input type="date" class="form-control" name="tanggal">
            </div>
         </div>

      </div>
      <button class="btn btn-primary">Tambah Stok</button>
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
            <a href="<?= base_url('Beranda/stok') ?>" type="button" class="btn btn-primary">Ya</a>
         </div>
      </div>
   </div>
</div>