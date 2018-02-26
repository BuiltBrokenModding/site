<?php //For client editor.

include 'keys.php';

if($SITE_CONFIG_KEY != $_POST['key'])
    exit;

$file = fopen($_POST['location'], "w") or die("CANNOT OPEN FILE");
fwrite($file, $_POST['data']);
fclose($file);
?>
