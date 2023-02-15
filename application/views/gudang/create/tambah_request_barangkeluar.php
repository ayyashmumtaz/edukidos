<div class="container">
	<hr>
	<div class="col-12 d-flex flex-row align-items-center justify-content-between pl-0">
		<h5 class="mb-0">Tambah Data Rekues Barang Keluar</h5>
		<button type="button" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#batal">
			<i class="fa-solid fa-xmark pr-2"></i>Batal
		</button>
	</div>
	<hr>
	<form action="<?= base_url('Gudang/req_barangkeluar_save'); ?>" method="post">
		<!-- <div class="table-responsive"> -->
		<table class="table border-0" id="formProdukJumlah">
			<tr>
				<th><label for="last">Nama Produk</label></th>
				<th><label for="jumlah">Jumlah</label></th>
				<th></th>
			</tr>
			<tr id="row">
				<td>
					<input type="text" name="autocomplete_produk[]" id="autocomplete_produk" class="form-control">
					<input type="hidden" id="produk" name="produk[]">
				</td>
				<td>
					<input type="number" name="jumlah[]" id="" class="form-control">
				</td>
				<td>
					<a href="#" id="btnPlus" onclick="addForm()" class="btn btn-primary"><i class="fas fa-plus"></i></a>
				</td>
			</tr>
		</table>
		<!-- </div> -->
		<div class="form-group">
			<label for="tanggal_req">Tanggal Rekues</label>
			<input type="date" name="tanggal_req" id="" class="form-control">
		</div>
		<input type="hidden" value="<?= $this->session->userdata('id_user')?>" name="user">
		<button class="btn btn-primary">Tambah Request </button>
	</form>
</div>

<div class="modal fade" id="batal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Membatalkan ?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Jika anda menekan tombol "Ya" maka data yang sudah anda masukkan akan Hilang !</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<a href="<?= base_url('Gudang/reqBarangKeluar') ?>" type="button" class="btn btn-primary">Ya</a>
			</div>
		</div>
	</div>
</div>
<script>
	let count = 1;
	const addForm = () => {
		$.ajax({
			url:'<?= base_url('Gudang/getProdukApi')?>',
			method:'GET',
			success:function(response){
				let data = JSON.parse(response);
				let labelData = [];
				data.forEach(response => {
					labelData.push({ 
						label:response.nama_produk,
						value:response.id_produk
					});
				}); 
				count += 1;
				let table = "<tr id='row"+count+"'>"
				table += "<td><input type='text' name='autocomplete_produk[]' id='autocomplete_produk"+count+"' class='form-control'>"
				table += "<input type='hidden' id='produk"+count+"' name='produk[]'></td>"
				table += "<td><input type='number' name='jumlah[]' id='jumlah' class='form-control'></td>"
				table += '<td><a href="#" id="btnTimes" onclick="deleteForm()" class="btn btn-secondary"><i class="fas fa-times"></i></a></td>'
				table += "</tr>"
				$('#formProdukJumlah').append(table);

				$("#autocomplete_produk"+count).autocomplete({
					source:labelData, 
					select:function(event, ui){
						event.preventDefault();
						$("#autocomplete_produk"+count).val(ui.item.label);
						$("#produk"+count).val(ui.item.value)
					}
				})
			}
		})
	}
		$.ajax({
			url:'<?= base_url('Gudang/getProdukApi')?>',
			method:'GET',
			success:function(response){
				let data = JSON.parse(response); 
				let labelData = [];
				data.forEach(response => {
					labelData.push({ 
						label:response.nama_produk,
						value:response.id_produk
					});
				}); 
				$("#autocomplete_produk").autocomplete({
					source:labelData, 
					select:function(event, ui){
						// console.log(ui.item.label)
						event.preventDefault();
						$("#autocomplete_produk").val(ui.item.label);
						$("#produk").val(ui.item.value)
					}
				})
			}
		});
		const deleteForm = () => {
			let deleteRow = $("tr#row"+count).remove()
			count--;
		}
</script>
