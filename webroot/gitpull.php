<?PHP
function isCli() {
     if(php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
          return true;
     } else {
          return false;
     }
}

if(!isCli()) {
		$output = null;
        exec('php pull.php', $output);
        var_dump($output);
} else {
		$output = null;
        exec('cd /source/phonetroller && git reset --hard && git pull', $output);
        //exec('cp -R /data/hypetype/* /s3');
        var_dump($output);
}
?>