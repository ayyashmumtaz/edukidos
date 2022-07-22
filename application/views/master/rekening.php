<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>Data Rekening</h3>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Atas Nama</th>
                
                <th>Nomor Rekening</th>
                <th>Bank</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rekening as $b){
            ?>
            <tr>
              <td><?php echo $b->id?></td>
                <td><?= $b->atas_nama?></td>
                  
                <td><?=$b->norek?></td>
                <td><?= $b->bank?></td>
                <td><a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_rekening/'). $b->id;?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?= base_url('Master/hapus_rekening/'). $b->id;?>">Hapus</a></td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>