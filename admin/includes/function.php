<?php

//============= DATABASE HELPER =============// 

function query($query){
    global $koneksi;
    return mysqli_query($koneksi, $query);
}

function confirmQuery($result){
    global $koneksi;
    if(!$result){
        die('QUERY FAILED ' . mysqli_error($koneksi));
    }
}

function escape($value){
    global $koneksi;
    return htmlspecialchars(mysqli_real_escape_string($koneksi, $value));
}

function redirect($url){
    return header('Location: ' . $url);
    exit;
}

//============= END DATABASE HELPER =============// 

//============= DASHBOARD HELPER =============// 

function getSumAlumni(){
    $query = query("SELECT SUM(jumlah_lulusan) AS 'total_alumni' FROM alumni");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_alumni'];
    return $result;
}

function getSumAlumniLanjut(){
    $query = query("SELECT SUM(jumlah_lanjut) AS 'total_alumni_lanjut' FROM alumni");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_alumni_lanjut'];
    return $result;
}

function getCountGuru(){
    $query = query("SELECT COUNT('*') AS 'total_guru' FROM guru_karyawan");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_guru'];
    return $result;
}

function getCountKomentarBerita(){
    $query = query("SELECT COUNT('*') AS 'total_comments' FROM komentar_berita");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_comments'];
    return $result;
}

function getSumSiswaLaki(){
    $query = query("SELECT SUM(jumlah_siswa_laki) AS 'total_siswa_laki' FROM siswa");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_siswa_laki'];
    return $result;
}

function getSumSiswaPr(){
    $query = query("SELECT SUM(jumlah_siswa_perempuan) AS 'total_siswa_perempuan' FROM siswa");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_siswa_perempuan'];
    return $result;
}

function getCountKelas(){
    $query = query("SELECT COUNT('*') AS 'total_kelas' FROM keadaan_kelas");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_kelas'];
    return $result;
}
//============= END DASHBOARD HELPER =============// 

?>