<?php
    $page = $_GET['p'];
    if (isset($page)) {
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