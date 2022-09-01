<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<div class="container">
    <div class="table-responsive">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nama Bahan</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Status Bayar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($allPembayaran as $b) : ?>
                    <tr>
                        <td><?= $b->nama_bahan ?></td>
                        <td><?= $b->nama_kategori ?></td>
                        <td><?= $b->stok ?></td>
                        <td><?php $favcolor = $b->status_bayar;
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
                            <a class="btn btn-sm btn-primary" href="<?= base_url('produksi/konfirmasi_bayar/') . $b->id_order ?>">Konfirmasi Pembayaran</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>