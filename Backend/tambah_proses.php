<?php

    include('../connection.php');
    if(isset($_POST['submit'])){
        $number= $_POST['nomor'];
        $date = new Datetime($_POST['tanggal']);
        $fix_date = $date->format('Y-m-d');
        $title = $_POST['judul'];

        $statement = pg_query($connection,"INSERT INTO outmail(nomor_surat,tanggal_surat,judul_surat) VALUES('$number','$fix_date','$title')");

        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Successfully added data</div>' ;
            header("location:../index.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Failed to add data</div>' ;
            header("location:../index.php");
        }
    }

?>