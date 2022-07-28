<div class="container">
   <hr>
   <h5>Tambah Data Rekening</h5>
   <hr>
   <form action="<?= base_url('Master/rekening_save'); ?>" method="post">
      <div class="row">

         <div class="col-md-4">
            <div class="form-group">
               <label for="last">NAMA PEMILIK (A.N.)</label>
               <input type="text" class="form-control" name="atas_nama">
            </div>
         </div>

         <div class="col-md-4">
            <div class="form-group">
               <label for="last">NO. REKENING</label>
               <input type="number" class="form-control" name="norek">
            </div>
         </div>

         <div class="col-md-4">
            <div class="form-group">
               <label for="last">NAMA BANK</label>
               <input type="text" class="form-control" name="bank">
            </div>
         </div>
      </div>
      <button class="btn btn-lg btn-primary">Tambah Akun</button>
   </form>
</div>