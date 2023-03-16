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
          <th>Nama User Request</th>
          <th>Status ?</th> 
          <th>Aksi</th>
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
              case 'selesai':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-success"><i class="fas fa-thumbs-up"></i> Selesai</a>';
                echo '</td>';
                echo '<td>';
                echo '</td>';
                break;
              case 'dikirim':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Barang Sudah Dikirim</a>';
                echo '</td>';
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-primary" style="margin-bottom:3px;">Cetak Surat Jalan Edukidos</a>
                <a href="#" class="btn btn-sm btn-primary">Cetak Surat Jalan Digimaxie</a>';
                echo '</td>';
                break;
              case 'diterima':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-warning"><i class="fas fa-clock"></i> Menunggu Pengiriman Barang</a>';
                echo '</td>';
                echo '<td>';
                echo '<a href="'.base_url().'Gudang/status_dikirim_req_barangkeluar/'.$rbk->id_request.'" onclick="return confirm(`Anda Yakin Barang SUDAH DIKIRIM : '.$rbk->nama_produk.' Ini?`);" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Kirim Barang</a> ';
                echo '</td>';
                break;
              case 'ditolak':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i> Ditolak</a>';
                echo '</td>';
                echo '<td>';
                echo '</td>';
                break;
              case 'pending':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-warning"><i class="fas fa-clock"></i> Pending</a>';
                echo '</td>';
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