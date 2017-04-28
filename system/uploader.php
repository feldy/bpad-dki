<?php 
    $appName = "dosir";
    $root = $_SERVER['DOCUMENT_ROOT']."/".$appName."/";
    $parentDir = $root . 'img-uploads/';
    // $parentDir = 'img-uploads/';

    $message['is_ok'] = false;
    $sid = $_POST['sid'];

    if (isset($_FILES)) {
        if (!$_FILES['file']['error']) {
            if(preg_match("/image/", $_FILES['file']['type'])) {
                $name = md5(rand(100, 200));
                $ext = explode('.', $_FILES['file']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = $parentDir . $sid .'/'. $filename;

                if (!file_exists($parentDir . $sid)) { //create folder untuk kelompokan per article
                    mkdir($parentDir . $sid , 0775, true);
                }

                $location = $_FILES["file"]["tmp_name"];
                move_uploaded_file($location, $destination);
                $message['url'] = "img-uploads/". $sid .'/'. $filename; 
                $message['is_ok'] = true;
                $message['parentDir'] = $parentDir;
            } else {
                $message['error'] = 'Jenis File Bukan file photo !';
            }
        } else {
            $message['error'] = "Gambar belum berhasil di upload. Silahkan ulangi (".$_FILES['file']['error'].")";
        }   
    } else {
        $message['error'] = "File tidak ada yang dikirim";
    }

    echo json_encode($message);
?>