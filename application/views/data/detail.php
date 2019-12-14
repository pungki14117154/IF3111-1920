<!doctype html>
<head>
    <title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
</head>
<body>
<fieldset>     
    <h1 class="judul">SIMPLE LAPOR !</h1>
    
<ul class="isi">
    <h2>Detail laporan/Komentar</h2>
    <li class="isi"><h3><?= $keluhan['aspek'];?></h3>
    <li class="isi"><p><?= $keluhan['lapor'];?></p>
    <li class="isi"><p><?= $keluhan['waktu'];?></p>
    <li class="isi"><p>Lampiran :</p>
    <li class="isi"><img src="<?php echo base_url();?>asset/gambar/<?php echo $keluhan['gambar'];?>" widht="100" height="250">
        <br><br>
        
    <a href="<?=base_url();?>data/ubah/<?=$keluhan['id'];?>">ubah</a>
    <a href="<?=base_url();?>data/hapus/<?=$keluhan['id'];?>" onclick="return confirm('yakin?');">hapus</a>
    <a href="<?=base_url()?>">Back</a>
</ul>
</fieldset>    
