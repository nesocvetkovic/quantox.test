<?php
require '1.php';

$xml = new DOMDocument();
$students = $xml->createElement("CSMB");
foreach ($returnData as $key => $value) {
  $xmlNode = $xml->createElement($key,$value);
  $students->appendChild($xmlNode);
}
$xml->appendChild($students);
$header = "Content-Type:text/xml";
header($header);
print $xml->saveXML();
 ?>
