<?php 
session_start();

class Database {
	private $host = "localhost";
	private $user = "root";
	private $pass = "fay";
	private $dbname = "hore";

	public $con;

	function __construct() {
		$this->con = new Mysqli($this->host, $this->user, $this->pass, $this->dbname);
		if ($this->con->errno > 0) {
			die('Gagal menghubungkan ke database');
		}
	}
}

function alert($pesan) {
	echo "<script>alert('{$pesan}');</script>";
}

function redirect($url) {
	echo "<script>window.location='{$url}';</script>";
}

function rupiah($num) {
	return number_format($num, 0, ',', '.');
}

include_once 'barang.class.php';
