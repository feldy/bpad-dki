<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <?php 
                    $txtSearch = strip_tags($txtSearch); 
                    $txtSearch = mysqli_real_escape_string($conn, $txtSearch);
                    $txtSearch = trim($txtSearch, " ");

                    $sql = mysqli_query($conn, 
                        "SELECT     * 
                        FROM        tbl_artikel 
                        WHERE       MATCH(judul, category, sub_category, isi) AGAINST('$txtSearch' IN BOOLEAN MODE) and is_publish = 1  order by viewed desc LIMIT 15");
                    
                    $rowCount = mysqli_num_rows($sql);
                ?>
                
                <h2>
                    <?php echo $rowCount;?> hasil ditemukan terkait: <span class="text-navy">“<?php echo $txtSearch; ?>”</span>
                </h2>
                <?php 
                    while($arr = mysqli_fetch_array($sql)) {
                        //isi content
                        $content = strip_tags(htmlspecialchars_decode($arr['isi']));
                        // echo ">>".$content;

                        //pemotongan kata sekaligus pencarian kata. pemotongannya berdasarkan hasil yang ditemukan
                        $regex = '/([A-Za-z0-9.,-]+\s*){0,5}\s'.$txtSearch.'(\s|[,.!?])(\s*[A-Za-z0-9.,-]+){0,50}/i';
                        preg_match($regex, $content, $resultSearch);
                        // echo ">>".$resultSearch;
                        // print_r($resultSearch);

                        // implement highlightWords jika ada kata yang nyangkut di contentnya
                        $words = explode(" ", $txtSearch); //make search terms an array of terms'
                        if (!empty($resultSearch)) {
                            $resultSearch = highlightWords($resultSearch[0], $words);
                        } else {
                            $resultSearch = "";
                        }
                        // echo strlen($resultSearch);

                ?>
                <div class="hr-line-dashed"></div>
                <div class="search-result">
                    <h3><a href="?p=detail&id=<?php echo $arr['sid'];?>"><?php echo $arr['judul']?></a></h3>
                    <?php 
                        if (strlen($resultSearch)) {
                            echo $resultSearch;
                        } else {
                            echo trim_text($content, 500);
                        }
                    ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
