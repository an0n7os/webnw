<!php

$myfile = fopen("location,txt", "w");
$txt = "lat: " . $_GET["lat"] ;
fwrite($myfile, $txt);
fclose($myfile);

?>
