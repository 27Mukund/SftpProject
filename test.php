<?php
require_once('vendor/autoload.php');
use phpseclib3\Net\SFTP;
$sftp = new SFTP('192.168.43.222:22');
$sftp->login('user', '1234');
//upload a file
$sftp->put('remoteuploadedfile.txt', 'secondtext.txt', SFTP::SOURCE_LOCAL_FILE);
echo 'uploaded';

// $sftp->get('sampledownload.txt', 'localfile.txt');
// echo 'downloaded';

?>