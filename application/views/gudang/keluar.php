<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      "columnDefs": [{
        "targets": 0
      }]
    });
  });
</script>
<select name="produk[]" id="produk" class="form-control" required>
						<?php foreach ($produk->result_array() as $p) { ?>
								<option value="<?php echo $p['id_produk'] ?>"><?php echo $p['nama_produk'] ?></option>
						<?php } ?>
						</select>

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
            <td>
            <?php if($rbk->status_barang == "pending") { ?>
              <a href="<?= base_url()?>Gudang/status_diterima_req_barangkeluar/<?php echo $rbk->id_request ?>"  
                 onclick="return confirm('Anda Yakin Ingin Menerima Request Produk : <?= $rbk->nama_produk ?> Ini?');"
                 class="btn btn-sm btn-success"><i class="fas fa-check"></i> Terima</a>
              <a href="<?= base_url()?>Gudang/status_ditolak_req_barangkeluar/<?php echo $rbk->id_request ?>" 
                 onclick="return confirm('Anda Yakin Ingin Menolak Request Produk : <?= $rbk->nama_produk ?> Ini?');"
                 class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Tolak</a>
            <?php } elseif($rbk->status_barang == "diterima") { ?>
              <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i> Diterima</a>
            <?php } elseif($rbk->status_barang == "ditolak") { ?>
              <a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i> Ditolak</a>
            <?php } ?>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>