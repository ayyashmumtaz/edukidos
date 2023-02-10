<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      "columnDefs": [{
        "targets": 0
      }]
    });
  });
</script>
<div class="container">
  <h3>PERMINTAAN BARANG KELUAR</h3>
  <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Produk</th>
          <th>Jumlah</th>
          <th>Tanggal</th>
          <th>Nama User</th>
          <th>Status ?</th> 
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;foreach($reqBarangKeluar as $rbk) {?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $rbk->nama_produk ?></td>
            <td><?= $rbk->jumlah ?></td>
            <td><?= $rbk->tanggal_req ?></td>
            <td><?= $rbk->nama ?></td> 
            <?php switch ($rbk->status_barang) {
              case 'diterima':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i> Diterima</a>';
                echo '</td>';
                break;
              case 'ditolak':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i> Ditolak</a>';
                echo '</td>';
                break;
              case 'pending':
                echo '<td>';
                echo '<a href="'.base_url().'Gudang/status_diterima_req_barangkeluar/'.$rbk->id_request.'" onclick="return confirm(`Anda Yakin Ingin Menerima Request Produk : '.$rbk->nama_produk.' Ini?`);" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Terima</a> ';
                echo '<a href="'.base_url().'Gudang/status_ditolak_req_barangkeluar/'.$rbk->id_request.'" onclick="return confirm(`Anda Yakin Ingin Menolak Request Produk : '.$rbk->nama_produk.' Ini?`);"class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Tolak</a>';
                echo '</td>';
                break;
            }?>       
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>