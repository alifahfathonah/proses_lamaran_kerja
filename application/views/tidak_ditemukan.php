<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $judul; ?></title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/dist/css/style.css'); ?>" />
</head>
<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>Oops! Halaman Tidak Ditemukan</h2>
			<p>Maaf ya, halaman yang kamu cari tidak dapat di temukan oleh sistem, kamu bisa kembali ke halaman dashboard dengan menekan tombol dibawah ini</p>
			<a href="<?= base_url('dashboard'); ?>" class="elevation-3">Go To Dashboard</a>
		</div>
	</div>
</body>
</html>
