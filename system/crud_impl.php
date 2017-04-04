<?php
	include("../config/configuration.php");
    if (isset($_POST['btnDeleteArtikel'])) {
    	$id = $_POST['sid'];
        $message['is_ok'] = false;

        $str = "UPDATE tbl_artikel SET is_publish = 0 where sid = '$id'";
        $query = mysqli_query($conn, $str) or die(mysqli_error($conn));
        if ($query) {
            $message['is_ok'] = true;
        } else {
            $message['is_ok'] = false;
        }
        
        echo json_encode($message);
    } else if (isset($_POST['btnSaveArtikel'])) {
        //generat sid
        $id = $_POST['sid'];

    	$judul = $_POST['judul'];
        $authorID = $_POST['authorID'];
        $category = $_POST['category'];
        $subCategory = $_POST['subCategory'];
    	$sumberArtikel = $_POST['sumberArtikel'];
    	$isiArtikel = htmlspecialchars($_POST['isiArtikel']);
        // echo "$isiArtikel";

        //pengecekan apakah edit atau add new
        $str = "SELECT * FROM tbl_artikel where sid = '$id'";
        $query = mysqli_query($conn, $str) or die(mysqli_error($conn));
        $rowCount = mysqli_num_rows($query); 
        if ($rowCount > 0) { //jika sid ketemu maka edit, jika tidak maka add new
            //edit action
            $str = "UPDATE tbl_artikel SET judul = '$judul', category = '$category', sub_category = '$subCategory', sumber = '$sumberArtikel', isi = '$isiArtikel' WHERE sid = '$id'";
            // echo ">>>>".$str;
            $query = mysqli_query($conn, $str) or die(mysqli_error($conn));
        } else {
    	   //save action
        	$str = "INSERT INTO tbl_artikel (sid, tanggal, judul, author, isi, category, sub_category, sumber, is_publish) VALUES 
        	('$id', now(), '$judul', '$authorID', '$isiArtikel', '$category', '$subCategory', '$sumberArtikel', 1)";
        	// echo ">>>>".$str;
        	$query = mysqli_query($conn, $str) or die(mysqli_error($conn));
        }

    	if ($query) {
            // showDialogUtama("Berhasil", "Data Berhasil disimpan !", "success", "../form/admin/?page=noc&form=view");
            echo "<script>alert('Berhasil Menyimpan Data'); window.location.href = '../form/admin';</script>";
        } else {
            // showDialogUtama("Maaf!", "Data Gagal Disimpan!", "error", "../form/admin/?page=noc&form=new");
			echo "<script>alert('Gagal Menyimpan Data');window.history.back();</script>";
		}	
    }
?>