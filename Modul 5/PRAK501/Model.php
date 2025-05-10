<?php
require 'Koneksi.php';

function getMember() {
    $conn = getConnection();
    $stmt = $conn->query("SELECT * FROM member;");
    return $stmt-> fetchAll(PDO::FETCH_ASSOC);
}

function createMember($data) {
    $conn = getConnection();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$data['nama'], $data['nomor'], $data['alamat'], $data['tgl_daftar'], $data['tgl_bayar']]);
}

function updateMember($id, $data) {
    $conn = getConnection();
    $sql = "UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$data['nama'], $data['nomor'], $data['alamat'], $data['tgl_daftar'], $data['tgl_bayar'], $id]);
}

function deleteMember($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM member WHERE id_member=?");
    return $stmt->execute([$id]);
}

function getMemberById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM member WHERE id_member=?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getBuku() {
    $conn = getConnection();
    $stmt = $conn->query("SELECT * FROM buku;");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createBuku($data) {
    $conn = getConnection();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$data['judul'], $data['penulis'], $data['penerbit'], $data['tahun']]);
}

function updateBuku($id, $data) {
    $conn = getConnection();
    $sql = "UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$data['judul'], $data['penulis'], $data['penerbit'], $data['tahun'], $id]);
}

function deleteBuku($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku=?");
    return $stmt->execute([$id]);
}

function getBukuById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku=?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getPeminjaman() {
    $conn = getConnection();
    $stmt = $conn->query("SELECT * FROM peminjaman;");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createPeminjaman($data) {
    $conn = getConnection();
    $sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_member, id_buku) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$data['tgl_pinjam'], $data['tgl_kembali'], $data['id_member'], $data['id_buku']]);
}

function updatePeminjaman($id, $data) {
    $conn = getConnection();
    $sql = "UPDATE peminjaman SET tgl_pinjam=?, tgl_kembali=?, id_member=?, id_buku=? WHERE id_peminjaman=?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$data['tgl_pinjam'], $data['tgl_kembali'], $data['id_member'], $data['id_buku'], $id]);
}

function deletePeminjaman($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman=?");
    return $stmt->execute([$id]);
}

function getPeminjamanById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman=?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>