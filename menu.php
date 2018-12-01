<?php
include 'koneksi/koneksi.php'; 
$brg = new Barang();
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="hhr.css">
	<title>HHR Coffee</title>
</head>
<body>
	<div id="sidebar1">
		<img src="Logo.png" alt="" class="Logo">
		<h1 class="Judul1"><span class="subjudul1">Our</span> Food</h1>
		<h3 class="textkosong">asdfghj</h3>
		<!-- <h1 class="Judul2">Apaan tuh? Masook?</h1> -->
		<hr class="garis">
<!-- 		<p class="Deskripsi1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			Modi molestias nesciunt temporibus ex repellendus est fugit! Dolore dicta accusamus
			sequi id doloremque cupiditate a? Ea sed at nisi nesciunt eveniet. Lorem ipsum dolor
			sit amet, consectetur adipisicing elit. Modi molestias nesciunt temporibus ex repellendus
		est fugit! Dolore dicta accusamus sequi id doloremque cupiditata?</p> -->
		<!-- <a href="View More" class="button1">View More</a> -->
	</div>
	<div id="konten_putih">
		<div class="blok_merah">
			<div class="navbar">
				<a href="index.php">Home</a>
				<a href="menu.php" class="border1">Menu</a>
				<a href="about.php">About</a>
				<a href="blog.php">Blog</a>	
			</div>
		</div>

		<a href="form_pesan.php" class="button2"><img src="Troli.png" alt=""></a>
		<!-- <img src="Coffee.png" alt="" class="coffee"> -->
		<!-- <img src="image_about.png" alt="" class="image_about"> -->
		<div class="slider_menu2">
			<div class="menu_sect1">
				<img src="menu_1.png" alt="" class="menu1">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 20.000</h2>
					<p class="menu_text2">Nasi Goreng</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect2">
				<img src="menu_2.png" alt="" class="menu2">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 25.000</h2>
					<p class="menu_text2">Chicken Cordon Bleu</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect3">
				<img src="menu_3.png" alt="" class="menu3">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 17.000</h2>
					<p class="menu_text2">Fettuccine Alfredo</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect1">
				<img src="menu_4.png" alt="" class="menu1">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 12.000</h2>
					<p class="menu_text2">Kentang Goreng</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect2">
				<img src="menu_5.png" alt="" class="menu2">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 55.000</h2>
					<p class="menu_text2">HHR Pizza</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect3">
				<img src="menu_6.png" alt="" class="menu3">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 20.000</h2>
					<p class="menu_text2">HHR Burger</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect1">
				<img src="menu_7.png" alt="" class="menu1">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 15.000</h2>
					<p class="menu_text2">Roti Bakar</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect2">
				<img src="menu_8.png" alt="" class="menu2">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 27.000</h2>
					<p class="menu_text2">Nasi HipHip Hore</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect3">
				<img src="menu_9.png" alt="" class="menu3">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 23.000</h2>
					<p class="menu_text2">Bakmi Goreng Hore</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect1">
				<img src="menu_10.png" alt="" class="menu1">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 20.000</h2>
					<p class="menu_text2">Americano</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect2">
				<img src="menu_11.png" alt="" class="menu2">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 22.000</h2>
					<p class="menu_text2">Cappucino</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect3">
				<img src="menu_12.png" alt="" class="menu3">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 18.000</h2>
					<p class="menu_text2">Hot Chocolate</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect1">
				<img src="menu_13.png" alt="" class="menu1">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 12.000</h2>
					<p class="menu_text2">Iced Tea</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect2">
				<img src="menu_14.png" alt="" class="menu2">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 15.000</h2>
					<p class="menu_text2">Juice</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
			<div class="menu_sect3">
				<img src="menu_15.png" alt="" class="menu3">
				<div class="text_menu">
					<h2 class="menu_text1">Rp 20.000</h2>
					<p class="menu_text2">Teler Hore</p>
					<p class="menu_text3">Jumlah</p>
					<input type="number" name="quantity" min="1" max="20" class="qty"> 
					<br>
					<img src="in_troly.png" alt="" class="in_troly">
				</div>
			</div>
		</div>
	</div>			


</div>
<div id="footer">
	<p class="textfooter">Copyright 2018 © HHRCoffee - All rights reserved.</p>
	<div class="icon">
		<a href="ig"><img src="igicon.png" alt=""></a>
		<a href="tw"><img src="twittericon.png" alt=""></a>
		<a href="fb"><img src="fbicon.png" alt=""></a>
		<a href="in"><img src="linkedinicon.png" alt=""></a>
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slider_menu2').slick({
			nextArrow: '<img src="arah_kanan_abu.png" alt="" / class="arrow_menu_kanan">',
			prevArrow: '<img src="arah_kiri_abu.png" alt="" / class="arrow_menu_kiri">',
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
	});
</script>	
</body>
</html>