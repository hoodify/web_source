<?php
 
$path = $_SERVER['DOCUMENT_ROOT']."/hoodify/img/user_img/profile_img/";
 
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
$data   = array(); 
$data['success'] = false;



if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];

     
     
    if(strlen($name))
    {       
        list($txt, $ext) = explode(".", $name);
        if(in_array($ext,$valid_formats))
        {
            if($size < ( 1024*1024*5 )) // Image size max 1 MB
            {
                $actual_image_name = time()."-image.".$ext;
                $tmp = $_FILES['file']['tmp_name'];
                if(move_uploaded_file($tmp, $path.$actual_image_name))
                {       

                    $img_path = "/hoodify/img/user_img/profile_img/".$actual_image_name;
                    $type = $_FILES['file']['type'];

                    $data['success'] = true;
                    $data['url']  = "/hoodify/img/user_img/profile_img/".$actual_image_name;   

                
                    try{

                        require("../../connect_db.php");
                        $user_code = $_SESSION['user_code'];

                    

                        $query = "UPDATE user SET profile_img = '$img_path' WHERE user_code =  $user_code";
                        $stmt = $conn->prepare($query);
                        $stmt->execute();

                    

                    }

                    catch (PDOException $e) {
                        $data['error'] = $e;
                 }


                }

                else
                {
                    $data['success'] = false;
                    $data['error'] = 'error';
                }
                     
            }
            else
                $data['error'] = "Image file size max 5 MB";
        }
        else
            $data['error'] = "Invalid file format..";
    }
    else
        $data['error'] = "Please select image..!";
}
 
//echo json_encode($row['file_path']);
echo $img_path;
 
?>