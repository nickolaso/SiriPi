<?php
include 'wa_wrapper/WolframAlphaEngine.php';
$engine = new WolframAlphaEngine( 'AJ3W5H-QPLP8JKER2' );

$resp = $engine->getResults('pi');

$pod = $resp->getPods();

$pod = $pod[1];

foreach($pod->getSubpods() as $subpod){
  if($subpod->plaintext){
    $plaintext = $subpod->plaintext;
    break;
  }
}

$result = substr($plaintext, 0,strlen($plaintext)-3);

echo $result;
?>