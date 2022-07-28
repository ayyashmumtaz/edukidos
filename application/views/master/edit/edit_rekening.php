<div class="container">
   <hr>
   <h5>Edit Data Rekening</h5>
   <hr>
   <form action="<?= base_url('Master/update_rekening'); ?>" method="post">
      <div class="row">

         <?php foreach ($rekening as $r) : ?>
            <input type="hidden" class="form-control" name="id" value="<?= $r->id ?>">

            <div class="col-md-4">
               <div class="form-group">
                  <label for="last">NAMA PEMILIK (A.N.)</label>
                  <input type="text" class="form-control" name="atas_nama" value="<?= $r->atas_nama ?>">
               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                  <label for="last">NO. REKENING</label>
                  <input type="number" class="form-control" name="norek" value="<?= $r->norek ?>">
               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                  <label for="last">NAMA BANK</label>
                  <input type="text" class="form-control" name="bank" value="<?= $r->bank ?>">
               </div>
            </div>
         <?php endforeach ?>

      </div>
      <button class="btn btn-md btn-primary">Update Rekening</button>
   </form>
</div>