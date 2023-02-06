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
  <h3>Data Kategori</h3>
  <a class="btn btn-sm btn-success" href="<?= base_url('Master/tambah_kategori'); ?>">+ Tambah Kategori</a>
  <div class="table-responsive">
    <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Kategori</th>
      
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($dataBahan as $b) {
        ?>
          <tr>
            <td><?php echo $b->id_kategori ?></td>
            <td><?= $b->nama_kategori ?></td>
       
            <td>
              <a class="btn btn-sm btn-primary" href="<?= base_url('Master/edit_kategori/') . $b->id_kategori; ?>">Edit</a>
              <a class="btn btn-sm btn-danger remove" href="<?= base_url('Master/hapus_kategori/') . $b->id_kategori; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data ID : <?= $b->id_kategori ?> Ini?');">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
