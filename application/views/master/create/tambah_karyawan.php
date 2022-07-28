<div class="container">
   <hr>
   <h5>Tambah Data Karyawan</h5>
   <hr>
   <form action="<?= base_url('Master/karyawan_save'); ?>" method="post">
      <div class="row">

         <div class="col-md-6">
            <div class="form-group">
               <label for="last">NAMA</label>
               <input type="text" class="form-control" name="nama">
            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
               <label for="last">USERNAME</label>
               <input type="text" class="form-control" name="username">
            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
               <label for="last">PASSWORD</label>
               <input type="password" class="form-control" name="password" id="password">
            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
               <label for="last">CONFIRMASI PASSWORD</label>
               <input type="password" class="form-control" name="password" id="confirm_password">
               <span id='message'></span>
            </div>
         </div>
         
      </div>
      <button class="btn btn-md btn-primary">Tambah Karyawan</button>
   </form>
</div>

<script>
   $('#password, #confirm_password').on('keyup', function() {
      if ($('#password').val() == $('#confirm_password').val()) {
         $('#message').html('Password sama').css('color', 'green');
      } else
         $('#message').html('Password tidak sama!').css('color', 'red');
   });
</script>