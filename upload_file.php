<?php
 
$path = $_SERVER['DOCUMENT_ROOT']."/hoodify/img/user_img/";
 
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
$data   = array(); 
$data['success'] = false;



if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $user_contents_code = $_POST['user_contents_code'];

     
     
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

                    $img_path = "/hoodify/img/user_img/".$actual_image_name;
                    $type = $_FILES['file']['type'];

                    $data['success'] = true;
                    $data['url']  = "/hoodify/img/user_img/".$actual_image_name;   

                    
 

                    try{

                    require("connect_db.php");
                    $user_code = $_SESSION['user_code'];

                    $query = "INSERT INTO img_file (file_size, file_type, file_path) VALUES ('$size', '$type', '$img_path')";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $last_id = $conn->lastInsertId();

                    
                    $category = $_POST['category'];
                    
                    if($category == 'activity'){
                    $query2 = "INSERT INTO img_activity (user_activity_code, img_file_code, user_code) VALUES ('$user_contents_code', '$last_id', '$user_code')";
                    }
                    else if($category == 'item'){
                    $query2 = "INSERT INTO img_item (user_item_code, img_file_code, user_code) VALUES ('$user_contents_code', '$last_id', '$user_code')";
                    }
                    else if($category == 'skill'){
                    $query2 = "INSERT INTO img_skill (user_skill_code, img_file_code, user_code) VALUES ('$user_contents_code', '$last_id', '$user_code')";
                   
                    }
                    $stmt2 = $conn->prepare($query2);
                    $stmt2->execute();      
                    

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
                $data['error'] = "Image file size max 1 MB";
        }
        else
            $data['error'] = "Invalid file format..";
    }
    else
        $data['error'] = "Please select image..!";
}
 
echo json_encode($data);
 
?>