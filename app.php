<?php

 if(isset($_GET['app_name']) ){
     $filename =$_GET['app_name'].'.apk';
     $ctype="application/octet-stream";
     if(ini_get('zlib.output_compression'))
         ini_set('zlib.output_compression', 'Off');
     header("Pragma: public");
     header("Expires: 0");
     header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
     header("Cache-Control: private",false);
     header("Content-Type: $ctype");
     header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
     header("Content-Transfer-Encoding: binary");
     header("Content-Length: ".filesize($filename));
     readfile("$filename");
     exit();
 }

?>