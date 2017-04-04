<?php  

    $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel where is_publish = 1 ORDER BY tanggal desc LIMIT 5");
    while($arr = mysqli_fetch_array($sql)) {
?>
<div class="feed-element">
    <h1><?php echo htmlspecialchars_decode($arr['judul']);?></h1>
    <a href="#" class="pull-left">
        <img alt="image" class="img-circle" src="images/avatar-bpad.jpg">
    </a>
    <div class="media-body ">
        <i class="fa fa-user"></i>
        <strong>Dispusip DKI Jakarta</strong><br>
        <small class="text-muted"> <i class="fa fa-clock-o"></i> Published on <?php echo get_tanggal($arr['tanggal'])?></small><br />
        <small class="pull-left text-warning">Admin</small>
    </div>
</div>
<div class="ibox-content">
    <?php echo htmlspecialchars_decode($arr['isi']);?>   
    <br />
    <p>
    	Sumber: <?php echo $arr['sumber']?>
    </p>
</div>
<?php } ?>
