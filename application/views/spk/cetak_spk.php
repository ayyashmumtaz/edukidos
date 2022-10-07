<style>
   * {
      color: black;
   }

   .tbl {
      width: 100%;
      line-height: inherit;
      text-align: left;
   }

   table tr td {
      vertical-align: top;
   }

   p {
      margin-bottom: 0px;
   }

   p.tab {
      margin-left: 20px;
   }
</style>
<div class="container my-2">
   <div class="card p-4 my-3">
      <div class="row">
         <div class="col-12">
            <table class="table mb-0">
               <tr>
                  <td style="border-top: 0px;">
                     <img src="<?php echo base_url('assets/img/edukidos_logo.png') ?>" style="width: 20%; max-width: 300px; float:left" />
                     <h4 class="mt-4 ml-5 pl-5 mb-0"><b>SURAT PERINTAH KERJA</b></h3>
                     <?php
                     $getTahun = explode("-", $rekapDetail->tgl_order);
                     $explode = explode("-", $rekapDetail->tgl_order);
                     $getBulan = explode("0", $explode[1]);
                     $getNoInv = explode("INV-", $rekapDetail->no_inv);
                     ?>
                     <p class="ml-5 pl-5">ID. <?= $getNoInv[1] ?>/SPK/<?php $bulan_romawi = $getBulan[1];
                                                                        switch ($bulan_romawi) {
                                                                           case 1:
                                                                              echo "I";
                                                                              break;
                                                                           case 2:
                                                                              echo "II";
                                                                              break;
                                                                           case 3:
                                                                              echo "III";
                                                                              break;
                                                                           case 4:
                                                                              echo "IV";
                                                                              break;
                                                                           case 5:
                                                                              echo "V";
                                                                              break;
                                                                           case 6:
                                                                              echo "VI";
                                                                              break;
                                                                           case 7:
                                                                              echo "VII";
                                                                              break;
                                                                           case 8:
                                                                              echo "VIII";
                                                                              break;
                                                                           case 9:
                                                                              echo "IX";
                                                                              break;
                                                                           case 10:
                                                                              echo "X";
                                                                              break;
                                                                           case 11:
                                                                              echo "XI";
                                                                              break;
                                                                           case 12:
                                                                              echo "XII";
                                                                              break;
                                                                        } ?>/<?= $getTahun[0] ?></p>
                  </td>
                  <td class="text-right" style="border-top: 0px;">
                     <b>Alamat</b>
                     <br>PT. Edukidos Madina Creativa Jl. Muhammad Thohir
                     <br>Ruko Podomoro Golf View B3 No.10 Gunung Putri, Kab. Bogor
                     <br>Telp. 081384434480
                  </td>
               </tr>
            </table>

            <hr class="mb-3 mt-0" style="height:4px;border:none;color:#333;background-color:#333;">

            <table class="tbl">
               <tr>
                  <td width="140px">Kepada Yth</td>
                  <td>: <?= $rekapDetail->nama_customer ?></td>
                  <td class="text-right" width="180px">Depok, <?= $rekapDetail->tgl_kirim ?></td>
               </tr>
               <tr>
                  <td>Email</td>
                  <td>: <?= $rekapDetail->email ?></td>
                  <td class="text-right" width="180px">Operator : <?= $rekapDetail->spk ?></td>
               </tr>
               <tr>
                  <td>Alamat Kirim</td>
                  <td>: <?= $rekapDetail->alamat ?></td>
                  <td></td>
               </tr>
            </table>
         </div>
      </div>
      <div class="row">
         <div class="col-12 mt-3">
            <p class="tab">Dengan Hormat</p>
            <p class="tab">Bersama ini kami kirimkan barang-barang sebagai berikut</p>
         </div>
      </div>

      <div class="row">
         <div class="col-12 mt-3">
            <table class="table table-bordered table-sm">
               <thead style="background-color: lightgrey;">
                  <tr>
                     <th>Nama Pekerjaan</th>
                     <th>Bahan</th>
                     <th>Harga</th>
                     <th>Panjang</th>
                     <th>Lebar</th>
                     <th>Qty</th>
                     <th>Total</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td><?= $rekapDetail->nama_kerja ?></td>
                     <td><?= $rekapDetail->nama_bahan ?></td>
                     <td><?= 'Rp. ' . number_format($rekapDetail->harga_jual, 0, ',', '.') ?></td>
                     <td><?= $rekapDetail->panjang ?></td>
                     <td><?= $rekapDetail->lebar ?></td>
                     <td><?= $rekapDetail->jumlah ?></td>
                     <?php
                     $totalUkuran = $rekapDetail->panjang + $rekapDetail->lebar;
                     $totalHargaSatuan =  $totalUkuran * $rekapDetail->harga_jual;
                     $totalSemua = $totalHargaSatuan * $rekapDetail->jumlah;
                     ?>

                     <td><?= 'Rp. ' . number_format($totalSemua, 0, ',', '.')  ?></td>
                  </tr>
                  <tr>
                     <td>Biaya Design</td>
                     <td>-</td>
                     <td><?= 'Rp. ' . number_format($rekapDetail->biaya_design, 0, ',', '.') ?></td>
                     <td>-</td>
                     <td>-</td>
                     <td>-</td>
                     <td><?= 'Rp. ' . number_format($rekapDetail->biaya_design, 0, ',', '.') ?></td>
                  </tr>
                  <tr class="total">
                     <td colspan="6" class="text-right"><b>Total :</b></td>
                     <?php
                     $biaya_design = $rekapDetail->biaya_design;
                     $total = $totalSemua + $biaya_design;
                     ?>
                     <td><b><?= 'Rp. ' . number_format($total, 0, ',', '.') ?></b></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>

      <div class="row">
         <div class="col-12 mt-4">
            <table class="tbl">
               <tr height="100px">
                  <td class="text-center">OPERATOR</td>
                  <td class="text-center">SUPERVISOR</td>
               </tr>
               <tr>
                  <td class="text-center">( .................................... )</td>
                  <td class="text-center">( .................................... )</td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>