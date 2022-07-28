
               <?php if($this->session->flashdata('update_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Update Berhasil!',
  html: ' ',
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
                    <?= $this->session->flashdata('update_berhasil') ?>
           
        <?php endif ?>

<?php if ($this->session->flashdata('input-berhasil')) : ?>
   <script type="text/javascript">
      let timerInterval
      Swal.fire({
         title: 'Data Berhasil Ditambahkan!',
         html: ' ',
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
   <?= $this->session->flashdata('input-berhasil') ?>
<?php endif ?>

<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>Data Bahan Baku</h3>
    <a class="btn btn-sm btn-success" href="<?= base_url('Master/tambah_bahan');?>">+ Tambah Bahan Baku</a>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                
                <th>Nama Bahan</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($dataBahan as $b){
            ?>
            <tr>
              <td><?php echo $b->id_bahan?></td>
                <td><?= $b->nama_kategori?></td>
                  
                <td><?=$b->nama_bahan?></td>
                <td>1</td>
                <td><?= $b->harga_jual?></td>
                <td><?= $b->harga_beli?></td>
                <td><a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_bahan/'). $b->id_bahan;?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?= base_url('Master/hapus_bahan/'). $b->id_bahan;?>">Hapus</a></td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>