<div class="container">
   <hr>
         <h5>Data Customer & Urgensi</h5>
         <hr>
   <div class="row">

    <div class="col-md-3">
        <div class="form-group">
          <label for="last">ID ORDER</label>
          <input type="text" class="form-control" value="<?= uniqid();?>" readonly>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">TANGGAL ORDER</label>
          <input type="date" class="form-control" >
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">NO. PO</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA CUSTOMER</label>
           <select class="form-control" name="layanan">
            <option selected disabled>-- PILIH CUSTOMER --</option>
                  <?php foreach($customer as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama']; ?></option>
                  <?php } ?></select><a style="margin-top:6px;" class="btn btn-primary btn-sm" href="">Tambah Customer Baru</a>

        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">NO. TELEPON</label>
          <input type="text" class="form-control">
        </div>
         <input type="checkbox" name=""> URGENT
      </div>


</div>
</div>


<div class="container">

   <hr>
         <h5>Spesifikasi & File Order</h5>
         <hr>

   <div class="row">

        <div class="col-md-3">
        <div class="form-group">
          <label for="last">Kategori</label>
          <select class="form-control"></select>
        </div>
      </div>

       <div class="col-md-3">
        <div class="form-group">
          <label for="last">Bahan Baku</label>
          <select class="form-control"></select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">File Orderan</label>
          <input type="file" name="">
          <label>max. 100mb</label>
        </div>
      </div>
      


   </div>
         <hr>
         <h5>Ukuran & Catatan</h5>
         <hr>
   <div class="row">

         <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Panjang</label>
          <input class="form-control" type="" name="">
           <small>Kosongkan jika bahan baku A3.</small>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">Lebar</label>
          <input class="form-control" type="" name="">
        </div>
      </div>
      <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Jumlah Order</label>
          <input class="form-control" type="number" name="">
        </div>
      </div>
         <div class="col-md-12">
          <label for="last">Note Order</label>
          <br>
          <textarea class="form-control"></textarea>
      </div>
      </div>
      <hr>
         <h5>Total Biaya</h5>
         <hr>
  <br>
  <div class="row">
     <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Biaya Cetak</label>
          <input class="form-control" type="number" name="" readonly>
        </div>
      </div>

        <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Biaya Design</label>
          <input class="form-control" type="number" name="">
        </div>
      </div>
  </div>


</div>


