<div class="container">
   <hr>
   <h5>Tambah Data Bahan</h5>
   <hr>
   <form action="<?= base_url('Master/bahan_save'); ?>" method="post">
      <div class="row">

         <div class="col-md-3">
            <div class="form-group">
               <label for="last">NAMA BAHAN</label>
               <input type="text" class="form-control" name="nama_bahan">
            </div>
         </div>

         <div class="col-md-3">
            <div class="form-group">
               <label for="last">KATEGORI BAHAN</label>
               <select class="form-control" name="id_kategori">
                  <option selected disabled>-- PILIH KATEGORI --</option>
                  <?php foreach ($kategori as $k) { ?>
                     <option value="<?php echo $k['id']; ?>"><?php echo $k['nama_kategori']; ?></option>
                  <?php } ?>
               </select>
            </div>
         </div>

         <div class="col-md-3">
            <div class="form-group">
               <label for="last">HARGA BELI</label>
               <input type="number" class="form-control" name="harga_beli">
            </div>
         </div>

         <div class="col-md-3">
            <div class="form-group">
               <label for="last">HARGA JUAL</label>
               <input type="number" class="form-control" name="harga_jual">
            </div>
         </div>
      </div>
      <button class="btn btn-lg btn-primary">Tambah Bahan</button>
   </form>
</div>