<script type="text/javascript">
   $(document).ready(function() {
      $('#example').DataTable();
   });
</script>


<div class="container">
   <h3>PRODUKSI - A3</h3>
   <div class="table-responsive">
      <table id="example" class="display" style="width:100%">
         <thead>
            <tr>
               <th>Status Urgensi</th>
               <th>Nama Customer</th>

               <th>Tanggal Order</th>
               <th>Qty</th>
               <th>Status Bayar</th>
               <th>Status Pekerjaan</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
            foreach ($finishJilid as $b) {
            ?>
               <tr>
                  <td><?php
                        $favcolor = $b->urgensi;

                        switch ($favcolor) {
                           case "1":
                              echo "<button class='btn btn-sm btn-danger'>SEGERA DIKERJAKAN</button>";
                              break;
                           default:
                              echo "Tidak";
                        }
                        ?></td>
                  <td><?= $b->nama_customer ?></td>
                  )
                  <td><?= $b->tgl_order ?></td>
                  <td><?= $b->jumlah ?></td>
                  <td><?php
                        $favcolor = $b->status_bayar;

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
                  <td><?php
                        $favcolor = $b->status_bayar;

                        switch ($favcolor) {
                           case "0":
                              echo "<button class='btn btn-sm btn-danger'>Belum Dikerjakan</button>";
                              break;
                           case "1":
                              echo "<button class='btn btn-sm btn-warning'>Sedang Dikerjakan</button>";
                              break;
                           case "2":
                              echo "<button class='btn btn-sm btn-success'>Selesai</button>";
                              break;

                           default:
                              echo "Tidak";
                        }
                        ?></td>
                  <td>
                     <a href="<?= base_url('Spk/download/') . $b->file; ?>" style="" class="btn btn-sm btn-primary" value="Download Data">Download Data</a>

                     <a class="btn btn-sm btn-primary" href="<?= base_url('Produksi/finishing/' . $b->id_order) ?>">Selesaikan</a>
                  </td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</div>