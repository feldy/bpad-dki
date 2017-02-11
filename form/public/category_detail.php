<?php
    $page = $_GET['category'];
    if (isset($page)) {
?>
<div class="ibox-content forum-container">
    <div class="forum-title">
        <h3>Dosir <?php echo $page;?></h3>
    </div>
    <?php 
        $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel where category = '$page' order by tanggal desc");
        while($arr = mysqli_fetch_array($sql)) {
    ?>
    <div class="forum-item">
        <div class="row">
            <div class="col-md-4">
                <img alt="image" class="img-responsive" src="images/picture_not_available.png">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <a href="?p=detail&id=<?php echo $arr['sid'];?>" class="forum-item-title"><?php echo $arr['judul']?></a>
                    <div class=""><?php echo trim_text(htmlspecialchars_decode($arr['isi']), 400);?></div>
                </div>
                <div class="row">
                    <small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo get_tanggal($arr['tanggal'])?></small> -
                    <small class="text-warning"><a href="?p=category-detail&category=<?php echo $arr['category']?>" class="text-warning"><i class="fa fa-tag"></i> <?php echo $arr['category']?></a></small> 
                </div>
            </div>
            <div class="col-md-1">
                <div class="col-md-1 forum-info">
                    <span class="views-number">
                        <?php echo number_format($arr['viewed']);?>
                    </span>
                    <div>
                        <small>Views</small>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<?php } else {include("form/templates/404.php");} ?>