<?php
	error_reporting(E_ALL); 
	// $conn = mysqli_connect("mysql.idhostinger.com","u346528017_la","admin12345");
	// mysqli_select_db($conn, 'u346528017_la') or die(mysqli_error($conn));

	$conn = mysqli_connect("localhost","root","admin");
	mysqli_select_db($conn, 'dosir_bpad') or die(mysqli_error($conn));

	function gen_uuid() {
	    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
	        // 32 bits for "time_low"
	        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

	        // 16 bits for "time_mid"
	        mt_rand( 0, 0xffff ),

	        // 16 bits for "time_hi_and_version",
	        // four most significant bits holds version number 4
	        mt_rand( 0, 0x0fff ) | 0x4000,

	        // 16 bits, 8 bits for "clk_seq_hi_res",
	        // 8 bits for "clk_seq_low",
	        // two most significant bits holds zero and one for variant DCE1.1
	        mt_rand( 0, 0x3fff ) | 0x8000,

	        // 48 bits for "node"
	        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
	    );
	}

    function get_tanggal($tanggal) {
        $day = date('d', strtotime($tanggal));
        $year = date('Y', strtotime($tanggal));
        $month = date('M', strtotime($tanggal));
        $monthList = array(
            "Jan" => "Jan",
            "Feb" => "Feb",
            "Mar" => "Mar",
            "Apr" => "Apr",
            "May" => "Mei",
            "Jun" => "Jun",
            "Jul" => "Jul",
            "Aug" => "Ags",
            "Sep" => "Sep",
            "Oct" => "Okt",
            "Nov" => "Nov",
            "Dec" => "Des"
        );
        return $day." ".$monthList[$month]." ".$year;
    }

    
    /**
     * trims text to a space then adds ellipses if desired
     * @param string $input text to trim
     * @param int $length in characters to trim to
     * @param bool $ellipses if ellipses (...) are to be added
     * @param bool $strip_html if html tags are to be stripped
     * @return string 
     */
    function trim_text($input, $length, $ellipses = true, $strip_html = true) {
        //strip tags, if desired
        if ($strip_html) {
            $input = strip_tags($input);
        }
      
        //no need to trim, already shorter than trim length
        if (strlen($input) <= $length) {
            return $input;
        }
      
        //find last space within length
        $last_space = strrpos(substr($input, 0, $length), ' ');
        $trimmed_text = substr($input, 0, $last_space);
      
        //add ellipses (...)
        if ($ellipses) {
            $trimmed_text .= '...';
        }
      
        return $trimmed_text;
    }
?>