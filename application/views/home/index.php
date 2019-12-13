<fieldset>
<div class="judul">
<h1>LAPOR in Aja!</h1>
</div>
<form action="" method="post">
<form>
    <input class="search" type="text" placeholder="Cari..." required>
    <input class="button" type="button" value="Cari">		
</form>
</form>
</div>
<?php if($this->session->flashdata('flash')):?>
	<div>Data <strong> laporan <strong>berhasil</strong> ditambahkan!<?= $this->session->flashdata('flash');?>
	</div>
<?php endif;?>
<br>
<div class="tambah">
	<a href="<?=base_url()?>data/tambah">Buat Laporan/Komentar<img src="asset/gambar/add-circle-512.png" alt="simbol" style=" height: 20px; width: 25px;"></a>
</div>

<div class="komentar">
	<p>laporan/komentar terakhir</p>
</div>
	<hr />
<div class="komentar2">
<div class="newshead">
	<ul class="detail">
<?php foreach($lapor as $rows):?>
<?= $rows['lapor'].' ';?>
<br>
<?= $rows['aspek'].' ';?>
<?= $rows['gambar'].' ';?>
<?= $rows['waktu'].' ';?>
<li class="detail">
	
	<a href="<?=base_url()?>data/detail/<?=$dt['id']; ?>">Lihat Selengkapnya &rarr;</a>

</li>
<br>
<?php endforeach?>
</ul>
</div>
</div>
<hr />
</fieldset>