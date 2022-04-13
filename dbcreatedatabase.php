<?php
    /**
     * Untuk membuat database
     * 1.koneksi ke DBMS Msql
     * 2.script SQL untuk create database
     * 3.execute scrip tersebut
     */
    include_once("dbkoneksi.php");
    if($cnn){
        $sql = "CREATE DATABASE mahasiswa;";

        $hsl = mysqli_query($cnn, $sql);

        if($hsl){
            echo "Database mahasiswa <strong>sukses</strong> dibuat<br>";   
        }else{
            echo "Database mahasiswa <strong>gagal</strong> dibuat<br>";
        }
        mysqli_close($cnn);
    }