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
                        WHERE       MATCH(judul, category, isi) AGAINST('$txtSearch' IN BOOLEAN MODE)  order by viewed desc LIMIT 15");
                    
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
                        // echo ">>".$resultSearch[0];

                        // implement highlightWords jika ada kata yang nyangkut di contentnya
                        $words = explode(" ", $txtSearch); //make search terms an array of terms
                        $resultSearch = highlightWords($resultSearch[0], $words);

                ?>
                <div class="hr-line-dashed"></div>
                <div class="search-result">
                    <h3><a href="?p=detail&id=<?php echo $arr['sid'];?>"><?php echo $arr['judul']?></a></h3>
                    <?php 
                        if (strlen($resultSearch)) {
                            echo $resultSearch;
                        } else {
                            echo trim_text($content, 300);
                        }
                    ?>
                </div>
                <?php } ?>

                <!-- <div class="hr-line-dashed"></div>
                <div class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-white">1</button>
                        <button class="btn btn-white  active">2</button>
                        <button class="btn btn-white">3</button>
                        <button class="btn btn-white">4</button>
                        <button class="btn btn-white">5</button>
                        <button class="btn btn-white">6</button>
                        <button class="btn btn-white">7</button>
                        <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
