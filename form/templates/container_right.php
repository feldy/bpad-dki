<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><i class="fa fa-search"></i> Sidoel</h5>
            </div>
            <div class="ibox-content">
                <a href="?p=home"><img alt="Brand" class="img-responsive" width="" src="images/siDOEL.png"></a>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><i class="fa fa-search"></i> Pencarian</h5>
            </div>
            <div class="ibox-content">
                <div class="search-form">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" placeholder="Pencarian" name="txt_search" value="<?php echo $txtSearch;?>" class="input-sm form-control"> 
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-sm btn-primary" name="searching"> Cari!</button> </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><i class="fa fa-newspaper-o"></i> Berita Terbaru</h5>
            </div>
            <div class="ibox-content">
                <div class="feed-activity-list">
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel WHERE is_publish = 1 order by tanggal desc LIMIT 5");
                    while($arr = mysqli_fetch_array($sql)) {
                ?>
                    <div class="feed-element">
                        <div>
                            <i class="fa fa-caret-square-o-right"></i>
                            <!-- <small class="pull-right text-navy">Label Category</small> -->
                            <strong><a href="?p=detail&id=<?php echo $arr['sid'];?>"><?php echo $arr['judul']?></a></strong>
                            <div><?php echo trim_text(htmlspecialchars_decode($arr['isi']), 150);?></div>
                            <small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo get_tanggal($arr['tanggal'])?></small> -
                            <small class="text-warning"><a href="?p=category-detail&category=<?php echo $arr['category']?>" class="text-warning"><i class="fa fa-tag"></i> <?php echo $arr['category']?></a></small>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><i class="fa fa-line-chart"></i> Berita Terpopuler</h5>
            </div>
            <div class="ibox-content">
                <div class="feed-activity-list">
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel WHERE is_publish = 1 order by viewed desc LIMIT 5");
                    while($arr = mysqli_fetch_array($sql)) {
                ?>
                    <div class="feed-element">
                        <div>
                            <i class="fa fa-caret-square-o-right"></i>
                            <!-- <small class="pull-right text-navy">Label Category</small> -->
                            <strong><a href="?p=detail&id=<?php echo $arr['sid'];?>"><?php echo $arr['judul']?></a></strong>
                            <div><?php echo trim_text(htmlspecialchars_decode($arr['isi']), 150);?></div>
                            <small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo get_tanggal($arr['tanggal'])?></small> -
                            <small class="text-warning"><a href="?p=category-detail&category=<?php echo $arr['category']?>" class="text-warning"><i class="fa fa-tag"></i> <?php echo $arr['category']?></a></small>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>