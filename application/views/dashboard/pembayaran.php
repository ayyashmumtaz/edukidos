
               <?php if($this->session->flashdata('kerja_selesai')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Pembayaran Berhasil!',
  html: 'Pembayaran berhasil, pekerjaan selesai!',
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
                    <?= $this->session->flashdata('kerja_selesai') ?>
           
        <?php endif ?>

<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <h3>Pembayaran</h3>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Nama Customer</th>
                
                <th>Tanggal Order</th>
                <th>Qty</th>
                <th>Status Bayar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($allPembayaran as $b){
            ?>
            <tr>
    
                <td><a href="<?= base_url('cek_bayar/').$b->nama;?>"><?= $b->nama_customer?></a></td>
                  
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

                  
    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bayarKerja">Konfirmasi Pembayaran</a>
                      </td>
            </tr>
             <div class="modal fade" id="bayarKerja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pastikan lagi anda sudah mengecek ulang mutasi rekening untuk pekerjaan ini.</div>
                <div class="modal-footer">
                  <form action="<?= base_url('produksi/konfirmasi_bayar/')?>" method="post">
                    <input type="hidden" name="id_order" value="<?=$b->id_order?>">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <input class="btn btn-primary" type="submit" value="Yakin">
                  </form>
                  </div>
            </div>
        </div>
    </div>
        <?php }?>
        </tbody>
       </table>
</div>

