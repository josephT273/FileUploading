<?php

if (isset($_POST['button'])) {
  $file = $_FILES['images'];

  $file_name = $file['name'];
  $file_size = $file['size'];
  $temp_file = $file['tmp_name'];
  $file_type = $file['type'];

  //1kb = 1024bit
  //1mb = 1024kb
  //10mb = 1024 * 1024 * 10

  $max_file_size = 1024 * 1024 * 10;
  if ($file_size > $max_file_size) {
    echo "The File Is To Large Can't Upload To Our System";
  }else {
    $full_name_string = "0123456789abcdefghijklmnopqrstuvwxyz";

    $shuflString = substr(str_shuffle($full_name_string), 0, 10);
    $file_ext_explode = explode(".", $file_name);

    $file_ext = strtolower(end($file_ext_explode));
    $newFileNameWithExt = "IMG-".strtoupper($shuflString)."-".date("YMD").".".$file_ext;

    if (move_uploaded_file($temp_file, "upload/".$newFileNameWithExt)) {
      header("Location: index.php?upload=Success");
      exit();
    }
  }
}

?>
