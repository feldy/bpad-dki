<?php
	$page = $_GET['dosir'];
	if (isset($page)) {
?>
<h1>Dosir Tentang Arsip <?php echo $page;?></h1>
<ul class="dosir-list" style="padding-left: 10px">
	<?php 
        $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel where is_publish = 1 and category = '$page' order by tanggal desc LIMIT 5");
        while($arr = mysqli_fetch_array($sql)) {
        	echo '<li><i class="fa fa-angle-right"></i>'.get_tanggal($arr['tanggal']).' <a href="?p=detail&id='.$arr['sid'].'">'.$arr['judul'].'</a></li>';
        }
    ?>
</ul>

<?php } else {include("form/templates/404.php");} ?>