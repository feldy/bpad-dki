<?php 
    include("../config/configuration.php");
	// session_start();

	if (isset($_GET['typeahead'])) {
		$src = $_GET['typeahead'];
		$data = array();
		$sql = mysqli_query($conn, "SELECT category FROM tbl_artikel WHERE is_publish = 1 and category like '%$src%'  group by category order by judul asc");

		while ($arr=mysqli_fetch_assoc($sql)) {
        	$data[] = $arr;
        }
		echo json_encode($data);
	}
?>