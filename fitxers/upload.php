<!-- Francesc Roca Rodriguez -->

<?php
if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $newFileName = $fileName;
    $allowedfileExtensions = array('txt', 'pdf', 'jpg');
    if (in_array($fileExtension, $allowedfileExtensions)) {
        $uploadFileDir = 'src/';
        $dest_path = $uploadFileDir . $newFileName;
        if(move_uploaded_file($fileTmpPath, $dest_path)){
          $message ='File is successfully uploaded.';
        }
        else{
         $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        }
    }
    header('Location: zix.php');
}else{
  echo "El fitxer que has intentat pujar no és correcte o és massa gran!";
  echo "<a href='zix.php'>Tornar a ZIX</a>";
}
?>