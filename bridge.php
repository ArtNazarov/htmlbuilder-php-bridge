<?php

$apikey = "myapi";

if ( $_SERVER['REQUEST_METHOD'] === 'GET' ) {
  echo("method shoud be POST");
  exit(0);
};

if ( $_POST["API"] !== $apikey ) {
  echo("no api key!");
  exit(0);
};


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    
    $destination = $_SERVER['DOCUMENT_ROOT'] . '/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $destination);

    // Extract the contents of the uploaded ZIP file
    $zip = new ZipArchive;
    if ($zip->open($destination) === TRUE) {
      $zip->extractTo($_SERVER['DOCUMENT_ROOT']);
      $zip->close();
      echo 'File uploaded and extracted successfully';
    } else {
      echo 'Failed to extract file';
    }
  } else {
    echo 'Failed to upload file';
  };
  unlink($destination); // delete archive
}
?>
