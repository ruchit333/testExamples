<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$folderName = "testFile";
//mkdir('D:\wamp\www\test\\'.$fileName,777);
$fileName = 'test.php';
$content_to_write = "<?php include ('editorTesting.php'); ?>";
$file = fopen($folderName . '/' . $fileName,"w");
fwrite($file, $content_to_write);
fclose($file);
?>

