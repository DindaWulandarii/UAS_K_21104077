<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASCODE","");
    define("DBNAME","mahasiswa");
    define("DBPORT","3306");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME) or 
        die("Koneksi ke DBMS Mysql gagal<br>");
    
    // Check connection
    if ($cnn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // if(mysqli_query($cnn)){
    //     echo "Database ".DBNAME." berhasil dibuat";
    // }else{
    //     echo "Database ".DBNAME." Gagal dibuat, check kondisi server database";
    //     die();
    // }
    // mysqli_select_db($cnn, DBNAME);
    $mhs = "CREATE TABLE mhs(
        NIM VARCHAR(12) PRIMARY KEY,
        NAMA VARCHAR(255),
        JURUSAN VARCHAR(10),
        JK VARCHAR(1),
        TGLLAHIR date
    )";

    $ds = "CREATE TABLE dosen(
        NIDN INT(20) PRIMARY KEY,
        NAMA VARCHAR(75) NOT NULL,
        MK VARCHAR(75) NOT NULL,
        JK VARCHAR(40) NOT NULL
    )";

    $sql = "CREATE TABLE mk(
        KODE_MK VARCHAR(10) PRIMARY KEY,
        NAMA_MK VARCHAR(75) NOT NULL,
        NAMA_DOSEN VARCHAR(255) NOT NULL
    )";


    if(mysqli_query($cnn,$mhs,$ds,$sql)){
        echo "Tabel mhs berhasil dibuat";
    }else{
        echo "Tabel mhs tidak berhasil dibuat";
    }