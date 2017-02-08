
<h4><i class="fa fa-link"></i> Dosir Dispusip</h4>
<ul class="list-group clear-list m-t">
	<?php  
	    $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel group by category order by viewed desc, tanggal desc, judul desc LIMIT 15");
	    while($arr = mysqli_fetch_array($sql)) {
	?>
     <li class="list-group-item">
        <div class="dropdown-messages-box">
            <div class="media-body">
                <i class="fa fa-angle-double-right"></i>
                <strong> <a href="?p=dosir-detail&dosir=<?php echo $arr['category'];?>">Dosir <?php echo $arr['category']; ?> </a></strong><br>
                &emsp;<small class="text-muted"><i class="fa fa-clock-o"></i> Published on <?php echo get_tanggal($arr['tanggal'])?></small>
            </div>
        </div>
    <?php } ?>
    </li>
</ul>