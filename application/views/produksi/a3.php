<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>SPK - A3</h3>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Status Urgensi</th>
                <th>Nama Customer</th>
                
                <th>Tanggal Order</th>
                <th>Qty</th>
                <th>Status Bayar</th>
                <th>Status Pekerjaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($orderMasuk as $b){
            ?>
            <tr>
              <td><?php
$favcolor = $b->urgensi;

switch ($favcolor) {
  case "1":
    echo "<button class='btn btn-sm btn-danger'>SEGERA DIKERJAKAN</button>";
    break;
  default:
    echo "Tidak";
}
?></td>
                <td><?= $b->nama?></td>
                  
                <td><?=$b->tgl_order?></td>
                <td><?=$b->jumlah?></td>
                <td><?php
$favcolor = $b->status_bayar;

switch ($favcolor) {
  case "0":
    echo "<button class='btn btn-sm btn-danger'>Belum Lunas</button>";
    break;
    case "1":
    echo "<button class='btn btn-sm btn-success'>Sudah Lunas</button>";
    break;

  default:
    echo "Tidak";
}
?></td>
                <td><?php
$favcolor = $b->status_bayar;

switch ($favcolor) {
  case "0":
    echo "<button class='btn btn-sm btn-danger'>Belum Dikerjakan</button>";
    break;
    case "1":
    echo "<button class='btn btn-sm btn-warning'>Sedang Dikerjakan</button>";
    break;
    case "2":
    echo "<button class='btn btn-sm btn-success'>Selesai</button>";
    break;

  default:
    echo "Tidak";
}
?></td><td>
                             <a href="<?= base_url('Spk/download/'). $b->file;?>" style=""  class="btn btn-sm btn-primary" value="Download Data">Download Data</a>

    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#finishKerja">Selesaikan</a>
</td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>
 <div class="modal fade" id="finishKerja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pekerjaan sudah selesai?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pastikan lagi anda sudah menyelesaikan pekerjaan ini.</div>
                <div class="modal-footer">
                  <form action="<?= base_url('produksi/selesai_kerja/')?>" method="post">
                    <input type="hidden" name="id_order" value="<?=$b->id_order?>">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <input class="btn btn-primary" type="submit" value="Yakin">
                  </form>
                  </div>
            </div>
        </div>
    </div>