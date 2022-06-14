
               <?php if($this->session->flashdata('order_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Order Berhasil!',
  html: 'Order telah di input, silahkan konfirmasi SPK!',
  icon: 'success',
  timer: 1500,
  
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
  },
  willClose: () => {
    clearInterval(timerInterval)
  }

})
            </script>
                    <?= $this->session->flashdata('order_berhasil') ?>
           
        <?php endif ?>
<div class="container">
   <hr>
         <h5>Data Customer & Urgensi</h5>
         <hr>
         <form action="<?= base_url('Order/tambah_order');?>" method="post">
   <div class="row">

  

    <div class="col-md-3">
        <div class="form-group">
          <label for="last">ID ORDER</label>
          <input type="text" class="form-control" value="<?= uniqid();?>" name="id_order" readonly>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">TANGGAL ORDER</label>
          <input type="date" class="form-control" name="tgl_order">
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">NO. PO</label>
          <input type="text" class="form-control" name="no_po">
        </div>
      </div>

      <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA CUSTOMER</label>
           <select class="form-control" name="nama">
            <option selected disabled>-- PILIH CUSTOMER --</option>
                  <?php foreach($customer as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama']; ?></option>
                  <?php } ?></select><a style="margin-top:6px;" class="btn btn-primary btn-sm" href="">Tambah Customer Baru</a>

        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">NO. TELEPON</label>
          <input type="text" name="no_telp" class="form-control">
        </div>
        <input type="hidden" name="urgensi" value="0">
         <input type="checkbox" name="urgensi" value="1"> URGENT

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
          <select class="form-control" name="kategori"><?php foreach($kategori as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama']; ?></option>
                  <?php } ?></select>
        </div>
      </div>

       <div class="col-md-3">
        <div class="form-group">
          <label for="last">Bahan Baku</label>
          <select class="form-control" name="id_barang"><?php foreach($bahanBaku as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama_bahan']; ?></option>
                  <?php } ?></select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">File Orderan</label>
          <input type="file" name="file">
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
          <input class="form-control" type="" name="panjang">
           <small>Kosongkan jika bahan baku A3.</small>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">Lebar</label>
          <input class="form-control" type="" name="lebar">
        </div>
      </div>
      <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Jumlah Order</label>
          <input class="form-control" type="number" min="1" value="1" name="jumlah">
        </div>
      </div>
      <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Finishing</label>
          <select onchange="yesnoCheck(this);" name="finishing">
            <option value="Standar">Standar</option>
            <option value="custom">Custom</option>
          </select>
        </div>
      </div>
       <div id="ifYes" style="display: none;" class="col-md-12">
          <label for="last">Custom Finishing</label>
          <br>
          <textarea class="form-control" name="finishing"></textarea>
      </div>
         <div class="col-md-12">
          <label for="last">Note Order</label>
          <br>
          <textarea class="form-control" name="catatan"></textarea>
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
          <input class="form-control" type="number" name="harga_bahan">
        </div>
      </div>

        <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Biaya Design</label>
          <input class="form-control" type="number" name="biaya_design">
        </div>
      </div>
  </div>

<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>
<script type="text/javascript">
    $(document).ready(function(){
             $('#kategori').on('input',function(){
                 
                var kode=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/pos/get_barang')?>",
                    dataType : "JSON",
                    data : {kode: kode},
                    cache:false,
                    success: function(data){
                        $.each(data,function(kode, nama_barang, harga, satuan){
                            $('[name="nama"]').val(data.nama_barang);
                            $('[name="harga"]').val(data.harga);
                            $('[name="satuan"]').val(data.satuan);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
</script>

<script type="text/javascript">
   function yesnoCheck(that) {
    if (that.value == "custom") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}
</script>

