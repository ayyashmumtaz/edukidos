<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>SPK - FINISHING</h3>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Status Urgensi</th>
                <th>Nama Customer</th>
                
                <th>Tanggal Order</th>
                <th>Qty</th>
                <th>Status Bayar</th>
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
                <td>
<form action="<   <td>
<form action="<?= base_url('Spk/ambil_kerja_a3/')?>" method="post">
  <input type="hidden" name="id_order" value="<?= $b->id_order;?>">
  <input type="submit"  style="margin-bottom:2%;"class="btn btn-sm btn-primary" value="Ambil Pekerjaan">
</form>
                  
                  <a class="btn btn-sm btn-primary" style="margin-right: 2%;" href="<?= base_url('Spk/cetak_spk/'). $b->id_order;?>">Cetak SPK</a>
                           <a href="<?= base_url('Spk/download/'). $b->file;?>"  class="btn btn-sm btn-primary" value="Download Data">Download Data</a>
                      </td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>