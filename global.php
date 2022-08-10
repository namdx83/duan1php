<?php 
session_start();
$ROOT = '/duannew/duan1-nhom7';
$ROOT_ADMIN = '/duan1/duan1-nhom7/cpanel';
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $ROOT . '/assets/images';
function upload_file($file,$path_dir){
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $path_file_dir = $path_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $path_file_dir);
    return $file_name;
}
?>