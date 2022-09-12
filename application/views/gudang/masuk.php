<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
  <h3>BARANG MASUK</h3>
  <div class="table-responsive">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
              <th>Nomor PO</th>
                <th>Tanggal Datang</th>
                <th>Kategori</th>
                <th>Nama Bahan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($barangMasuk as $b){
            ?>
            <tr>
                <td><?php echo $b->no_po ?></td>
                <td><?= $b->tgl_beli?></td>
                <td><?=$b->nama_kategori?></td>
                <td><?=$b->nama_bahan?></td>
                <td><?=$b->jumlah?></td>
               
            </tr>
        <?php }?>
        </tbody>
       </table>
       </div>
</div>