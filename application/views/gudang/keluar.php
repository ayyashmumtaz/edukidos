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
          <th>Tanggal Request</th>
          <th>Nama User Request</th>
          <th>Status</th> 
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;foreach($reqBarangKeluar as $rbk) {?>
          <div class="modal fade" id="modal<?=$rbk->id_request?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Pengisian Surat Jalan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('Gudang/status_dikirim_req_barangkeluar/');?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Produk :</label>
            <input type="text" class="form-control" value="<?=$rbk->nama_produk ?>" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Plat Nomor :</label>
            <input type="text" class="form-control" name="plat">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Supir :</label>
            <input type="text" class="form-control" name="supir">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jenis Kendaraan :</label>
            <input type="text" class="form-control" name="jenis_kendaraan">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Kirim :</label>
            <input type="date" class="form-control" name="tgl_kirim" require>
          </div>
          <button class="btn btn-primary" type="submit">Kirim Barang</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $rbk->nama_produk ?></td>
            <td><?= $rbk->jumlah ?></td>
            <td><?= $rbk->tanggal_req ?></td>
            <td><?= $rbk->nama ?></td> 
            <?php switch ($rbk->status_barang) {
              case 'selesai':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-success"><i class="fas fa-thumbs-up"></i>Sudah Diterima - Selesai</a>';
                echo '</td>';
                echo '<td>';
                echo '</td>';
                break;
              case 'dikirim':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Sudah Dikirim</a>';
                echo '</td>';
                echo '<td>';
                echo '<a href="'.base_url().'Surat/sj_edukidos/'.$rbk->id_request.'" target="_blank" class="btn btn-sm btn-primary" style="margin-bottom:3px;">Cetak Surat Jalan Edukidos</a>
                <a href="'.base_url().'Surat/sj_digimaxie/'.$rbk->id_request.'" target="_blank" class="btn btn-sm btn-primary">Cetak Surat Jalan Digimaxie</a>';
                echo '</td>';
                break;
              case 'diterima':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-warning"><i class="fas fa-clock"></i> Menunggu Pengiriman Barang</a>';
                echo '</td>';
                echo '<td>';
                echo'<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal'.$rbk->id_request.'">Kirim Barang</button>';
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

