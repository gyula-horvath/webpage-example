<?php
    if(!empty($_FILES['files']['name'][0])){
        
        //$files = $_FILES['files'];

        $n = count($_FILES['files']['name']);
        $files = [];
        for ($i = 0; $n > $i; $i++) {
            $files[$i]['name'] = $_FILES['files']['name'][$i];
            $files[$i]['type'] = $_FILES['files']['type'][$i];
            $files[$i]['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $files[$i]['error'] = $_FILES['files']['error'][$i];
            $files[$i]['size'] = $_FILES['files']['size'][$i];
        }

        $uploaded = array();
        $failed = array();
        $position = 0;

        $allowed = array('jpg', 'png');

        foreach($files as $file) {

            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_size = $file['size'];
            $file_error = $file['error'];

            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            if(in_array($file_ext, $allowed)){

                if($file_error===0){
                    if($file_size<=3145728){
                        $file_name_new = uniqid('', true) . '.' .  $file_ext;
                        $file_destination = '../../gallery-images/' . $file_name_new;

                        if(move_uploaded_file($file_tmp, $file_destination)) {
                            echo $file_destination;
                            echo '<br>',$file_size, 'byte';
                            $message = urlencode("Fájl feltöltve");
                            header('Location: ' . '../upload.php?message=' . $message, true);
                        } else {
                            echo "[$file_name] nem töltődött fel.";
                        }
                    } else {
                        echo "[{$file_name}] nagyobb, mint 3 MB.";
                    }
                } else {
                    if($file_error===1){
                        echo "A fájl túl nagy. Kérjük, csak maximum 3 megabájt nagyságú képet töltsön fel.<br>";
                    } else {
                        echo "[{$file_name}] hibára lépett a következő kóddal: {$file_error}.", '<br>' ;
                    }
                }
            } else {
                echo "[{$file_name}]: '{$file_ext}' fájl típus nem engedélyezett.";
            }
        }
    }
?>