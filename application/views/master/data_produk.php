<?php if ($this->session->flashdata('update_berhasil')) : ?>
  <script type="text/javascript">
    let timerInterval
    Swal.fire({
      title: 'Update Berhasil!',
      html: ' ',
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
  <?= $this->session->flashdata('update_berhasil') ?>

<?php endif ?>

<?php if ($this->session->flashdata('input-berhasil')) : ?>
  <script type="text/javascript">
    let timerInterval
    Swal.fire({
      title: 'Data Berhasil Ditambahkan!',
      html: ' ',
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
  <?= $this->session->flashdata('input-berhasil') ?>
<?php endif ?>

<?php if ($this->session->flashdata('hapus-berhasil')) : ?>
  <script type="text/javascript">
    let timerInterval
    Swal.fire({
      title: 'Data Berhasil Dihapus!',
      html: ' ',
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
  <?= $this->session->flashdata('hapus-berhasil') ?>
<?php endif ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      "columnDefs": [{
        "width": "2%",
        "targets": 0
      }]
    })
  });
</script>


<div class="container">
  <h3>Data Produk</h3>
  <a class="btn btn-sm btn-success" href="<?= base_url('Master/tambah_produk'); ?>">+ Tambah Produk</a>
  <div class="table-responsive">
    <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Produk</th>
          <th>Satuan</th>
          <th>Kategori</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($dataBahan as $b) {
        ?>
          <tr>
            <td><?php echo $i++ ?></td>
            <td><?= $b->nama_produk ?></td>
            <td><?= $b->satuan ?></td>     
            <td><?= $b->nama_kategori ?></td>
            <td>
              <a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_produk/') . $b->id_produk; ?>">Edit</a>
              <a class="btn btn-sm btn-danger remove" href="<?= base_url('Master/hapus_produk/') . $b->id_produk; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data ID : <?= $b->id_produk ?> Ini?');">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
