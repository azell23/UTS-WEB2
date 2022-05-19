<?php

    include('../connection.php');
    if(isset($_POST['submit_update'])){
        $id = $_POST['id'];
        $number = $_POST['nomor'];
        $date= $_POST['tanggal'];
        $title = $_POST['judul'];

        $statement = pg_query($connection,"UPDATE outmail set nomor_surat='$number', tanggal_surat='$date',
        judul_surat='$title' WHERE id=$id");

        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Successfully update data</div>' ;
            header("location:../index.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Failed to update data</div>' ;
            header("location:../index.php");
        }

    }
?>