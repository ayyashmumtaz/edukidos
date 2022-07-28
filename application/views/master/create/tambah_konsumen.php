<div class="container">
   <hr>
   <h5>Tambah Data Konsumen</h5>
   <hr>
   <form action="<?= base_url('Master/konsumen_save'); ?>" method="post">
      <div class="row">

         <div class="col-md-6">
            <div class="form-group">
               <label for="last">NAMA</label>
               <input type="text" class="form-control" name="nama_customer">
            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
               <label for="last">NO. TELPHONE</label>
               <input type="number" class="form-control" name="no_telp">
            </div>
         </div>

         <div class="col-md-12">
            <div class="form-group">
               <label for="last">ALAMAT</label>
               <textarea class="form-control" name="alamat"></textarea>
            </div>
         </div>

      </div>
      <button class="btn btn-md btn-primary">Tambah Konsumen</button>
   </form>
</div>