<?
	function lock_write($file){
		if(!file_exists($file)) return false;
		$handle = fopen($file, '+w');
		if(flock($handle, LOCK_EX)){
			fwrite($handle, '$string');
			flock($handle, LOCK_UN);
		}else{
			echo 'file is locking';
		}
		fclose($handle);
	}
?>
