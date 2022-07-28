<div class="container">
   <hr>
   <h5>Edit Data Konsumen</h5>
   <hr>
   <form action="<?= base_url('Master/update_konsumen'); ?>" method="post">
      <div class="row">

         <?php foreach ($customer as $c) : ?>
            <input type="hidden" class="form-control" name="id" value="<?= $c->id ?>">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="last">NAMA</label>
                  <input type="text" class="form-control" name="nama_customer" value="<?= $c->nama_customer ?>">
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="last">NO. TELPHONE</label>
                  <input type="number" class="form-control" name="no_telp" value="<?= $c->no_telp ?>">
               </div>
            </div>

            <div class="col-md-12">
               <div class="form-group">
                  <label for="last">ALAMAT</label>
                  <textarea class="form-control" name="alamat"><?= $c->alamat ?></textarea>
               </div>
            </div>
         <?php endforeach ?>

      </div>
      <button class="btn btn-md btn-primary">Tambah Konsumen</button>
   </form>
</div>