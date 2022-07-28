<div class="container">
   <hr>
   <h5>Tambah Data Karyawan</h5>
   <hr>
   <form action="<?= base_url('Master/update_karyawan'); ?>" method="post">
      <div class="row">

         <?php foreach ($karyawan as $k) : ?>
            <input type="hidden" class="form-control" name="id_user" value="<?= $k->id_user ?>">

            <div class="col-md-6">
               <div class="form-group">
                  <label for="last">NAMA</label>
                  <input type="text" class="form-control" name="nama" value="<?= $k->nama ?>">
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="last">USERNAME</label>
                  <input type="text" class="form-control" name="username" value="<?= $k->username ?>">
               </div>
            </div>

            <div class="col-md-6">
               <div class="form-group">
                  <label for="last">PASSWORD</label>
                  <input type="password" class="form-control" name="password" id="showpass" value="<?= $k->password ?>">
                  <input type="checkbox" onclick="showpassword()"> Show Password
               </div>
            </div>

         <?php endforeach ?>
      </div>

      <button class="btn btn-md btn-primary">Update Karyawan</button>
   </form>
</div>

<script>
   function showpassword() {
      var x = document.getElementById("showpass");
      if (x.type === "password") {
         x.type = "text";
      } else {
         x.type = "password";
      }
   }
</script>