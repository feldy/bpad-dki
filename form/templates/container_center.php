<?php
    $txtSearch = "";
    if (isset($_POST['searching'])) {
        $txtSearch = $_POST['txt_search']; 
        include("form/public/result_search.php");

    } else if (isset($_GET['p'])) {
        $page = $_GET['p'];
        switch ($page) {
            case 'detail':
                include("form/public/artikel_detail.php");
                break;
            case 'dosir-detail':
                include("form/public/dosir_detail.php");
                break;                  
            case 'category-detail':
                include("form/public/category_detail.php");
                break;                                        
            default:
                include("form/public/home.php");
                break;
        }
    } else {
        include("form/public/home.php");
    }
?>