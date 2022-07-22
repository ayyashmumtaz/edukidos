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
                <th>Username</th>
                
                <th>Nama</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($karyawan as $b){
            ?>
            <tr>
              <td><?php echo $b->id_user?></td>
                <td><?= $b->username?></td>
                  
                <td><?=$b->nama?></td>
                <td><?php switch ($b->role) {
                    case 0:
                        echo 'Superuser';
                        break;
                    case 1:
                        echo 'Admin';
                        break;
                    case 2:
                        echo 'Karyawan';
                        break;
                    default:
                      echo 'Not';
                        break;
                }
            ?></td>
                <td><a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_karyawan/'). $b->id_user;?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?= base_url('Master/hapus_karyawan/'). $b->id_user;?>">Hapus</a></td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>