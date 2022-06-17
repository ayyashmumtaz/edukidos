<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>Data Bahan Baku</h3>
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
              <td><?php echo $b->id?></td>
                <td><?= $b->nama_kategori?></td>
                  
                <td><?=$b->nama_bahan?></td>
                <td>1</td>
                <td><?= $b->harga_jual?></td>
                <td><?= $b->harga_beli?></td>
                <td><a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_bahan/'). $b->id;?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?= base_url('Master/hapus_bahan/'). $b->id;?>">Hapus</a></td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>