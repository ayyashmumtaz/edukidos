<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>Data Konsumen</h3>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                
                <th>Alamat</th>
                <th>Nomor Telp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($konsumen as $b){
            ?>
            <tr>
              <td><?php echo $b->id?></td>
                <td><?= $b->nama_customer?></td>
                  
                <td><?=$b->alamat?></td>
                <td><?= $b->no_telp?></td>
                <td><a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_konsumen/'). $b->id;?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?= base_url('Master/hapus_konsumen/'). $b->id;?>">Hapus</a></td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>