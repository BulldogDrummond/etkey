<?php

$keyPrefix="000000100";
$keySuffix="480";
$keyBase="299330745953";

$valFile = "etkey-next.dat";

$fh = fopen($valFile, 'r');
$keyData = fread($fh, 4);
fclose($fh);

$keySeq = $keyData;
$nextSeq = $keySeq + 1;

$fh = fopen($valFile, 'w');
fwrite($fh, $nextSeq);
fclose($fh);

$keyOut = $keyPrefix . $keyBase . $keySeq . $keySuffix;

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=etkey');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: 28');
ob_clean();
echo $keyOut;
flush();

?>
