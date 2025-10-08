<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
   

</head>
<body>
    
     <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" name="submit">
</form>

    <h1> hello</h1>
    <?php
    if (isset($_POST['submit'])) {
    $file = $_FILES['myfile'];
    $file_name = $file['name'];          // get file name
    }
    $file_type = explode(separator: '.', string: $file_name);
    $img_extension = end(array: $file_type);    // get the image extension
    $new_image_name = uniqid() . "." . $img_extension;  // create a new image name
    $tmp_name = $file['tmp_name'];       // get the temporary name of the image

    $upload_path = "uploads/" . $new_image_name; // set the upload path

        $allow_extention = ['png', 'jpg',];

  if($file_size < 5000000) {
        if (in_array(needle: $file_extention, haystack: $allow_extention)) {
            $file_uplode = "image/" . $new_file_name;
            if(move_uploaded_file(from: $file_temp,to: $file_uplode)){
                echo"file uplode successfull";
            }else{
                echo "file uplode file";
            }
        }else{
            echo"only png,jpeg,jpg file allow";
        }
    }else{
        echo"Only 5mb file allow";
    }

      
?>
</body>
</html>