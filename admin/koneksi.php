<?php
class Database {
   function __construct() {
      $this->con = new Mysqli("localhost", "root", "fay", "hore");
   }

   function get(){
      $q = $this->con->query("SELECT * FROM barang");
      $res = [];
      if ($q->num_rows > 0) {
         while($r = $q->fetch_object()){
            $res[] = $r;
         }
      }
      return $res;
   }

   function detail($id) {
      $q = $this->con->query("SELECT * FROM barang WHERE id = '{$id}'");
      if ($q->num_rows > 0) {
         return $q->fetch_object();
      } else {
         return FALSe;
      }
   }

   function insert($id, $nama, $desc, $harga) {
      $this->con->query("INSERT INTO barang (id, nm_barang, deskripsi, harga) VALUES('{$id}', '{$nama}', '{$desc}', '{$harga}')");
   }

   function update($id, $nama, $desc, $harga) {
      $this->con->query("UPDATE barang SET id = '{$id}', nm_barang = '{$nama}', deskripsi = '{$desc}', harga = '{$harga}' WHERE id = '{$id}'");
   }

   function delete($id) {
      $this->con->query("DELETE FROM barang WHERE id = '{$id}'");
   }
}

$db = new Database();

// tambah data
if (isset($_POST['aksi']) && $_POST['aksi']=='tambah') {
   $db->insert($_POST['id'], $_POST['nama'], $_POST['desc'], $_POST['harga']);
   header('Location: index.php');
}

// hapus data
if (isset($_GET['aksi']) && $_GET['aksi']=='hapus') {
   $db->delete($_GET['id']);
   header('Location: index.php');
}

// ubah data
if (isset($_POST['aksi']) && $_POST['aksi']=='ubah') {
   $db->update($_POST['id'], $_POST['nama'], $_POST['desc'], $_POST['harga']);
   header('Location: index.php');
}