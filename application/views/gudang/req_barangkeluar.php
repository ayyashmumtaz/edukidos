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

<?php if ($this->session->flashdata('update_status_berhasil')) : ?>
  <script type="text/javascript">
    let timerInterval
    Swal.fire({
      title: 'Status Data Berhasil Diperbarui!',
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
  <?= $this->session->flashdata('update_status_berhasil') ?>
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
  <h3>Request Barang Keluar</h3>
  <a class="btn btn-sm btn-success" href="<?= base_url('Gudang/tambah_reqBarangKeluar'); ?>">+ Tambah Req Barang Keluar</a>
  <div class="table-responsive">
    <table id="example" class="display" >
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Produk</th>
          <th>Jumlah</th>
          <th>Tanggal</th>
          <th>Nama User</th>
          <th>Status ?</th>
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
            <?php switch ($rbk->status_barang) {
              case 'diterima':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-warning"><i class="fas fa-check-circle"></i> Menunggu Pengiriman Barang</a>';
                echo '</td>';
                echo '<td>';
                echo '</td>';
                break;
              case 'ditolak':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i> Ditolak</a>';
                echo '</td>';
                echo '<td>';
                echo '</td>';
                break;
              case 'pending':
                echo '<td>';
                echo '<a href="#" class="btn btn-sm btn-warning"><i class="fas fa-clock"></i> Pending</a> ';
                echo '</td>';
                echo '<td>';
                echo '<a class="btn btn-sm btn-primary" href="'.base_url('Gudang/edit_req_barangkeluar/') . $rbk->id_request.'">Edit</a> ';
                echo '<a class="btn btn-sm btn-danger remove" href="'. base_url('Gudang/hapus_req_barangkeluar/') . $rbk->id_request .'" onclick="return confirm(`Anda Yakin Ingin Menghapus Data ID :'.$rbk->id_request.' Ini?`);">Hapus</a>';
                echo '</td>';
                break;
            }?>       
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
