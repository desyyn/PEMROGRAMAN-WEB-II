<?php
require 'Koneksi.php';

function getAllMember() {
    global $Koneksi;
    $query = "SELECT * FROM member";
    return mysqli_query($Koneksi, $query);
}

function getMemberById($id) {
    global $Koneksi;
    $query = "SELECT * FROM member WHERE id_member = $id";
    return mysqli_query($Koneksi, $query);
}

function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    global $Koneksi;
    $query = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
              VALUES ('$nama', '$nomor', '$alamat', '$tgl_mendaftar', '$tgl_terakhir_bayar')";
    return mysqli_query($Koneksi, $query);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    global $Koneksi;
    $query = "UPDATE member SET nama_member='$nama', nomor_member='$nomor', alamat='$alamat', tgl_mendaftar='$tgl_mendaftar', tgl_terakhir_bayar='$tgl_terakhir_bayar' 
              WHERE id_member = $id";
    return mysqli_query($Koneksi, $query);
}

function deleteMember($id) {
    global $Koneksi;
    $query = "DELETE FROM member WHERE id_member = $id";
    return mysqli_query($Koneksi, $query);
}

function getAllBuku() {
    global $Koneksi;
    $query = "SELECT * FROM buku";
    return mysqli_query($Koneksi, $query);
}

function getBukuById($id) {
    global $Koneksi;
    $query = "SELECT * FROM buku WHERE id_buku = $id";
    return mysqli_query($Koneksi, $query);
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    global $Koneksi;
    $query = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) 
              VALUES ('$judul', '$penulis', '$penerbit', $tahun)";
    return mysqli_query($Koneksi, $query);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    global $Koneksi;
    $query = "UPDATE buku SET judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit=$tahun 
              WHERE id_buku = $id";
    return mysqli_query($Koneksi, $query);
}

function deleteBuku($id) {
    global $Koneksi;
    $query = "DELETE FROM buku WHERE id_buku = $id";
    return mysqli_query($Koneksi, $query);
}

function getAllPeminjaman() {
    global $Koneksi;
    $query = "SELECT * FROM peminjaman";
    return mysqli_query($Koneksi, $query);
}

function getPeminjamanById($id) {
    global $Koneksi;
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    return mysqli_query($Koneksi, $query);
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $Koneksi;
    $query = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) 
              VALUES ($id_member, $id_buku, '$tgl_pinjam', '$tgl_kembali')";
    return mysqli_query($Koneksi, $query);
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $Koneksi;
    $query = "UPDATE peminjaman SET id_member=$id_member, id_buku=$id_buku, tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' 
              WHERE id_peminjaman = $id";
    return mysqli_query($Koneksi, $query);
}

function deletePeminjaman($id) {
    global $Koneksi;
    $query = "DELETE FROM peminjaman WHERE id_peminjaman = $id";
    return mysqli_query($Koneksi, $query);
}
?>