<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
  <h3>Riwayat Revisi Stok</h3>
  <div class="table-responsive">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nomor PO</th>
                <th>Nama Bahan</th>
                <th>Tanggal Retur</th>
                <th>Jumlah Retur</th>
                <th>Direvisi oleh</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($revisi as $b){
            ?>
            <tr>
                <td><?= $b->no_po ?></td>
                <td><?= $b->nama_bahan ?></td>
                <td><?= $b->tanggal_retur ?></td>
                <td><?= $b->jumlah_retur ?></td>
                <td><?= $b->user ?></td>
                <td><a class="btn btn-sm btn-info" href="<?= base_url('Gudang/retur_detail/'). $b->id_retur;?>">Detail</td>
            </tr>
        <?php }?>
        </tbody>
       </table>
       </div>
</div>
