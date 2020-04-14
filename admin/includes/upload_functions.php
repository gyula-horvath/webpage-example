<?php
// Compress image
function compressImage($source, $destination, $quality) {

    $info = getimagesize($source);
  
    if ($info['mime'] == 'image/jpeg') 
      $image = imagecreatefromjpeg($source);
  
    elseif ($info['mime'] == 'image/gif') 
      $image = imagecreatefromgif($source);
  
    elseif ($info['mime'] == 'image/png') 
      $image = imagecreatefrompng($source);
  
    imagejpeg($image, $destination, $quality);
  
}

if(isset($_POST['upload'])){
    $n = count($_FILES['files']['name']);
    $files = [];
    for ($i = 0; $i < $n; $i++) {
        $files[$i]['name'] = $_FILES['files']['name'][$i];
        $files[$i]['type'] = $_FILES['files']['type'][$i];
        $files[$i]['tmp_name'] = $_FILES['files']['tmp_name'][$i];
        $files[$i]['error'] = $_FILES['files']['error'][$i];
        $files[$i]['size'] = $_FILES['files']['size'][$i];
    }
    foreach($files as $file) {
        // Getting file name
        $filename = $file['name'];
        // Valid extension
        $valid_ext = array('png','jpeg','jpg');

        // Location
        $location = "../../gallery-images/".$filename;

        // file extension
        $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);

        // Check extension
        if(in_array($file_extension,$valid_ext)){

            // Compress Image
            compressImage($file['tmp_name'],$location,85);
            $message = urlencode("Fájl feltöltve");
            header('Location: ' . '../upload.php?message=' . $message, true);

        }else{
            echo "Invalid file type.";
        }
    }


}

?>