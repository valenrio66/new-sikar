<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<title>Diagnosa Penyakit Cabai</title>
</head>

<body>
	<div class="container py-3">
		<h1>Diagnosa Penyakit Cabai</h1>
		<form action="<?php echo site_url('diagnosa/deteksipenyakit'); ?>" method="POST">
			<fieldset class="">
				<legend>Pilih Gejala:</legend>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala1" id="gejala1">
					<label class="form-check-label" for="gejala1">
						Daun Bawah Berubah Menjadi Kuning
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala2" id="gejala2">
					<label class="form-check-label" for="gejala2">
						Tanaman Layu dan Daun - Daunnya Menggulung
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala3" id="gejala3">
					<label class="form-check-label" for="gejala3">
						Batang Dalam Tanaman Menunjukkan Perubahan Warna Menjadi Cokelat Atau Kehitaman
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala4" id="gejala4">
					<label class="form-check-label" for="gejala4">
						Sistem Perakaran Terlihat Cokelat dan Berbusa
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala5" id="gejala5">
					<label class="form-check-label" for="gejala5">
						Kecokelatan Pada Pangkal Batang atau Bagian Bawah Tanaman
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala6" id="gejala6">
					<label class="form-check-label" for="gejala6">
						Daun - Daun Menjadi Kuning dan Kemudian Layu
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala7" id="gejala7">
					<label class="form-check-label" for="gejala7">
						Gejala Datang Saat Musim Hujan atau Kondisi Kelembaban Tinggi
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala8" id="gejala8">
					<label class="form-check-label" for="gejala8">
						Tanaman Cabai Terinfeksi Terlihat Kecil dan Tidak Sehat
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala9" id="gejala9">
					<label class="form-check-label" for="gejala9">
						Akar Tanaman Berwarna Cokelat atau Hitam dan Berair
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala10" id="gejala10">
					<label class="form-check-label" for="gejala10">
						Daun - Daun Menguning dan Tanaman Menjadi Layu
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala11" id="gejala11">
					<label class="form-check-label" for="gejala11">
						Gejala Terlihat Jelas Saat Cuaca Panas
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala12" id="gejala12">
					<label class="form-check-label" for="gejala12">
						Bercak - Bercak Kecil Berwarna Cokelat Pada Daun
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala13" id="gejala13">
					<label class="form-check-label" for="gejala13">
						Bercak - Bercak Membesar dan Menjadi Hitam dengan Tepi Yang Lebih Terang
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala14" id="gejala14">
					<label class="form-check-label" for="gejala14">
						Daun - Daun Mengering dan Gugur
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala15" id="gejala15">
					<label class="form-check-label" for="gejala15">
						Permukaan Daun Ditutupi Oleh Lapisan Serbuk Putih Seperti Tepung
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala16" id="gejala16">
					<label class="form-check-label" for="gejala16">
						Daun - Daun Menjadi Keriting dan Menguning
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="gejala[]" value="gejala17" id="gejala17">
					<label class="form-check-label" for="gejala17">
						Pertumbuhan Tanaman Terhambat dan Hasil Panen Berkurang
					</label>
				</div>
			</fieldset>
			<div class="py-4">
				<button type="submit" class="btn btn-success">Diagnosa</button>
			</div>
		</form>

		<?php if (!empty($hasilDeteksi)) : ?>
			<h2>Hasil Diagnosa:</h2>
			<p><?php echo $hasilDeteksi; ?></p>
		<?php endif; ?>
	</div>
</body>

</html>