<div class="container">
    <hr>
	<h5>Input Penjualan</h5>
	<hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="font-weight-bold text-right">Rp. 200.000</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Orderan</h5>
                    <div class="table-responsive">
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                   
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                   
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card shadow">
            <div class="card-body">
                <h5>Input Produk</h5>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Kategori</label>
                        <select name="kategori" id="kategori" onchange="pilihKategori();">
                                <?php 
                                foreach($kategori as $k) {
                                ?>
                                <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Jumlah</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah">
                            <div class="input-group-append">
                                <span class="input-group-text">Pcs</span>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <select name="produk" id="produk">
                         
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Barcode Produk</label>
                        <select name="produk" id="produk">
                         
                        </select>
                        <br>
                        
                        <div class="form-group">
                        <button type="button" class="btn btn-primary form-control">
                            <i class="fas fa-cart-shopping"></i>
                            Tambah ke keranjang
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-4">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class=" d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-arrow-right"></i> Proses
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function pilihKategori(){
        let id_kategori = document.getElementById('kategori').value;
        let produkk = document.getElementById('produk').value;
        $.ajax({
            url:'<?= base_url('Order/apiProduk/');?>'+id_kategori,
            method:'GET',
            success:function(response){
                let data = JSON.parse(response);
                let produkFix = data.produk;
                
                // produkFix.forEach(response => {
                //     console.log(response.nama_produk);
                //     $("#produk").append(`<option value="${response.id_produk}">${response.nama_produk}</option>`);
                // });
                
                let $select = $("#produk").selectize();
                let selectize = $select[0].selectize;
                
                selectize.setValue(0);
                selectize.clearOptions();
                selectize.refreshOptions(true);
                
                for (let i = 0; i < produkFix.length; i++) {
                    selectize.addOption([{
                        text: data.produk[i].nama_produk,
                        value: data.produk[i].id_produk
                    }]);
                }              
            }
        });
    }
</script>