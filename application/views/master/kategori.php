<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>Data Kategori</h3>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($kategori as $b){
            ?>
            <tr>
              <td><?php echo $b->id?></td>
                <td><?= $b->nama_kategori?></td>

                <td><a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_kategori/'). $b->id;?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?= base_url('Master/hapus_kategori/'). $b->id;?>">Hapus</a></td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>