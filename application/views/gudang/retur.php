<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
  <h3>BARANG RETUR</h3>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nomor PO</th>
                <th>Tanggal Datang</th>
                <th>Kategori</th>
                <th>Nama Bahan</th>
                <th>Qty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($barangRetur as $b){
            ?>
            <tr>
                <td><?= $b->no_po ?></td>
                <td><?= $b->tgl_beli ?></td>
                <td><?= $b->nama_kategori ?></td>
                <td><?= $b->nama_bahan ?></td>
                <td><?= $b->jumlah ?></td>
                <td><a class="btn btn-sm btn-danger" href="<?= base_url('Gudang/retur_barang/'). $b->id_beli;?>">Retur Barang</td>
            </tr>
        <?php }?>
        </tbody>
       </table>
</div>