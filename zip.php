<?php

$dest_zip_file_name = 'output/sample.zip';
$file_name = 'src/sample.txt';
$password = 'sample1234';

$zip = new ZipArchive();

$res = $zip->open(
    $dest_zip_file_name,
    ZipArchive::CREATE
); //Add your file name

if ($res !== true) {
    echo 'res open fails';
    exit(1);
}


$zip->addFile($file_name);

$zip->setEncryptionName(
    $file_name,
    ZipArchive::EM_AES_256,
    $password
); //Add file name and password dynamically
$zip->close();
echo 'ok';
