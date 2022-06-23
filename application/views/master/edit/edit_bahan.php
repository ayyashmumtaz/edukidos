
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
         <h5>Spesifikasi & File Order</h5>
         <hr>
         <?php foreach($bahan as $u){ ?>
         <form action="<?php echo base_url(). 'Master/update_bahan'; ?>" method="post">
          <input type="hidden" name="id_bahan" value="<?php echo $u->id_bahan?>">
            <div class="row">
     <div class="col-md-3">
        <div class="form-group">
          <label for="last">Nama Bahan</label>
          <input type="text" name="nama_bahan" value="<?= $u->nama_bahan?>" class="form-control">
        </div>
      
        

      </div>

        <div class="col-md-3">
        <div class="form-group">
          <label for="last">Kategori</label>
          <select class="form-control" name="kategori"><?php foreach($kategori as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama_kategori']; ?></option>
                  <?php } ?></select>
        </div>
      </div>

      
    <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Harga Beli</label>
          <input class="form-control" type="number" name="harga_beli" value="<?php echo $u->harga_beli?>" >
        </div>
      </div>
     <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Harga Jual</label>
          <input class="form-control" type="number" name="harga_jual" value="<?php echo $u->harga_jual?>">
        </div>
      </div>

        


   </div>
    

       <input class="btn btn-primary" type="submit" name="">



    

         </form>
  
 <br> 
   
<?php } ?>
</div>


