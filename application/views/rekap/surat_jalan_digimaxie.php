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

	.lunas {
		padding: 0.25rem 0.5rem;
		font-size: 0.875rem;
		line-height: 1.5;
		border-radius: 0.2rem;
		pointer-events: none;
		width: 80%;
	}
</style>
<div class="container my-2">
	<div class="card p-4 my-3">
		<div class="row">
			<div class="col-12">
				<table class="table mb-0">
					<tr>
						<td style="border-top: 0px; text-align: center; vertical-align: middle;">
							<img src="<?php echo base_url('assets/img/logo_digimaxie-rbg.png') ?>" style="width: 33%; max-width: 300px; float:left;" />
							<h3 style="margin-top:25px;"><b>SURAT JALAN</b></h3>
						</td>
						<td class="text-right" style="border-top: 0px;">
							<b>Alamat</b>
							<br>PT. DIGIMAX DAKSA NIRANKARA PERGUDANGAN KOPO BIZPARK BLOK A1
							<br> NO. R11 RTCIBADUYUT, BOJONGLOA KIDUL KOTA BANDUNG JAWA BARAT
							<br>Telp. -
						</td>
						<td style="border-top: 0px;padding-left: 0px">
							<img src="<?php echo base_url('assets/qrcache/' . $rekapDetail->id_request . '.png') ?>" style="width: 100%; max-width: 100px; float:right" />
						</td>
					</tr>
				</table>

				<hr class="mb-3 mt-0" style="height:4px;border:none;color:#333;background-color:#333;">

				<table class="tbl">
					<tr>
						<td width="180px">Nomor PO</td>
						<td>: <?= $rekapDetail->id_request ?></td>
						<td class="text-right" width="180px">Depok, <?= $rekapDetail->tgl_kirim ?></td>
					</tr>
					<tr>
						
						<td class="text-left" width="180px">Driver</td>
						<td> : <?= $rekapDetail->supir ?></td>
					</tr> 
					<tr>
						
					<td class="text-left" width="180px">Plat Nomor</td>
					<td> : <?= $rekapDetail->plat ?></td>
					</tr>
					<tr>
					<td class="text-left" width="180px">Jenis Kendaraan</td>
					<td> : <?= $rekapDetail->jenis_kendaraan ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-3">
				<p class="tab">Dengan Hormat</p>
				<p class="tab">Bersama ini kami kirimkan barang-barang sebagai berikut :</p>
			</div>
		</div>

		<div class="row">
			<div class="col-12 mt-3">
				<table class="table table-bordered table-sm">
					<thead style="background-color: lightgrey;">
						<tr>
							<th>Nama Produk</th>
							<th>Qty</th>
						
						
						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $rekapDetail->nama_produk ?></td>
							<td><?= $rekapDetail->jumlah?></td>
						
						</tr>
					
						
					
					</tbody>
				
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<p>Catatan :</p>
				<p>Barang-barang tersebut di atas diserahkan dalam jumlah cukup & baik, tidak dapat dikembalikan tanpa perjanjian terlebih dahulu.
					<br>Bila ada keluhan atas barang-barang yang dikirim ini, agar diberitahukan kepada kami selambat-lambatnya dalam waktu 2(dua) hari.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-12 mt-4">
				<table class="tbl">
					<tr height="110px">
						<td class="text-center">PENERIMA</td>
						<td class="text-center">PENGEMUDI</td>
						<td class="text-center">PENGIRIM</td>
				
					</tr>
					<tr>
						<td class="text-center">( .................................... )</td>
						<td class="text-center">( .................................... )</td>
						<td class="text-center">( .................................... )</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
