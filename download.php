<?php
	if(isset($_GET["dzial"]) && isset($_GET["nazwa"])) {
		if(is_dir('media/downloads/'.$_GET['dzial'])) {
			$name = 'media/downloads/'.$_GET["dzial"].'/'.$_GET["nazwa"].'.pdf';
			if(file_exists($name)) {
		        header("Content-type: application/octet-stream");
    		    header("Content-Disposition: attachment; filename=".$_GET['nazwa'].".pdf");
        		header("Pragma: no-cache");
	        	header("Expires: 0");
	    	    readfile($name);
		    }
	    }
	}
?>
