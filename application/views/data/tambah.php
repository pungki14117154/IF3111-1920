<!doctype html>
<head>
    <title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
</head>
<body>
<fieldset>    
        <h1 class="judul">LAPOR in AJA!</h1>
<div class="container">
    <label>Buat Laporan/Komentar</label></br>
    <hr />             
    <!--Laporan/Komentar-->
    <textarea class="komentar" placeholder="Laporan/Komentar"></textarea>
    <br><br>
    <div class="aspek">
        <select name="aspek">
            <option>Pilih Aspek Pelaporan/Komentar</option>
            <option>Administrasi</option>
            <option>Biaya Iuran</option>
            <option>BUMN
            <option>BPJS</option>
            <option>Cara pengajuan kecelakaan kerja</option>
            <option>Data dan Informasi Umum</option>
            <option>Energi dan Sumber Daya Alam</option>
            <option>Fasilitas Umum</option>
            <option>Gangguan aplikasi online</option>
            <option>Harga Pasar</option>
            <option>Informasi Nomor kartu</option>
            <option>Infrastruktur</option>
            <option>investasi MIGAS</option>
            <option>Jam Operasional Kantor</option>
            <option>Keamanan dan ketertiban Masyarakat</option>
            <option>Keluhan Masyarakat</option>
            <option>Lembaga Ombudsman</option>
            <option>Pariwisata</option>
            <option>Pensiunan</option>
            <option>Reformasi Birokrasi</option>
            <option>Situasi Khusus</option>
            <option>Kebencanaan</option>
        </select>
    </div>
    <br>
    <form action="aksi.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <div class="submit">
            <input type="submit" name="upload" value="Buat LAPOR!">
        </div>
    </form>
    <hr />
</div>
</fieldset>
</body>