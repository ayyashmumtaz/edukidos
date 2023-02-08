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
  <h3>BARANG KELUAR</h3>
  <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Produk</th>
          <th>Jumlah</th>
          <th>Tanggal</th>
          <th>Nama User</th> 
          <th>Action</th>
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
              <a class="btn btn-sm btn-primary" href="<?= base_url('Gudang/edit_req_barangkeluar/') . $rbk->id_request; ?>">Edit</a>
              <a class="btn btn-sm btn-danger remove" href="<?= base_url('Gudang/hapus_req_barangkeluar/') . $rbk->id_request; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data ID : <?= $rbk->id_request ?> Ini?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>