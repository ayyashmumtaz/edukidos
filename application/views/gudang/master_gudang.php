<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "columnDefs": [{
                "width": "18%",
                "targets": 0
            }]
        });
    });
</script>

<?php if ($this->session->flashdata('supplier_sukses')) : ?>
    <script type="text/javascript">
        let timerInterval
        Swal.fire({
            title: 'Supplier Ditambahkan!',
            html: 'Data Supplier berhasil ditambahkan',
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
    <?= $this->session->flashdata('supplier_sukses') ?>

<?php endif ?>

<div class="container">
    <h3>Data Supplier</h3>
    <a class="btn btn-sm btn-success mb-3" href="<?= base_url('Gudang/tambah_supplier'); ?>">+ Tambah Supplier</a>
    <div class="table-responsive">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Pabrik</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supplier as $b) : ?>
                    <tr>
                        <td><?= $b->nama_pabrik ?></td>
                        <td><?= $b->no_telp ?></td>
                        <td><?= $b->alamat ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>