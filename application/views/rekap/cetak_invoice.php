<style>
   * {
      font-family: Arial, Helvetica, sans-serif;
      color: black;
   }
</style>

<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-6">
                           <h1>Invoice</h1>
                        </div>
                        <div class="col-md-6">
                           <h3 class="text-right">No. Invoice</h3>
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-md-6">
                           <h5>From</h5>
                           <p>
                              <b>Edukidos Digital Printing</b><br>
                              Jl. Raya Cibadak No. 1, Cibadak, Kec. Cibadak, Kabupaten Sukabumi, Jawa Barat 43171<br>
                              Phone: 0812-3456-7890<br>
                              Email:
                           </p>
                        </div>
                        <div class="col-md-6">
                           <h5>To</h5>
                           <p>
                              <b><? //= $invoice->nama 
                                 ?></b><br>
                              <? //= $invoice->alamat 
                              ?><br>
                              Phone: <? //= $invoice->no_hp 
                                       ?><br>
                              Email: <? //= $invoice->email 
                                       ?>
                           </p>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Subtotal</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php // $no = 1;
                                 // foreach ($detail as $d) : 
                                 ?>
                                 <tr>
                                    <td><? //= $no++ 
                                          ?></td>
                                    <td><? //= $d->nama_produk 
                                          ?></td>
                                    <td>Rp. <? //= number_format($d->harga, 0, ',', '.') 
                                             ?></td>
                                    <td><? //= $d->jumlah 
                                          ?></td>
                                    <td>Rp. <? //= number_format($d->subtotal, 0, ',', '.') 
                                             ?></td>
                                 </tr>
                                 <?php // endforeach; 
                                 ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>