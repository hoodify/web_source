<?php
 

/*////////////////////////////////////////////////////

parameter : user_contents_code   
            category

FILE : 이미지 파일

게시글의 이미지 업데이트하기

////////////////////////////////////////////////////*/

$path = $_SERVER['DOCUMENT_ROOT']."/hoodify/img/user_img/";
 
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
            // 사이즈 제한 5 MB
            if($size < ( 1024*1024*5 )) 
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

                        // DB 연결
                        require("../../connect_db.php");
                        
                        // 세션에서 유저 정보 받기
                        $user_code = $_SESSION['user_code'];


                        // 넘겨받는 parameter
                        $category = $_POST['category'];
                        $user_contents_code = $_POST['user_contents_code'];


                        // 이미지 저장
                        $query = "INSERT INTO img_file (file_size, file_type, file_path) VALUES ('$size', '$type', '$img_path')";
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        $last_id = $conn->lastInsertId();


                        if($category == 'activity'){
                            $check_query = "SELECT COUNT(*) FROM img_activity WHERE user_activity_code = :user_contents_code AND user_code =  $user_code";
                            $query2 = "UPDATE img_activity SET img_file_code = $last_id WHERE user_activity_code = $user_contents_code AND user_code =  $user_code";
                            $query3 = "INSERT INTO img_activity (user_activity_code, img_file_code, user_code) VALUES ('$user_contents_code', '$last_id', '$user_code')";
                            $url_query = "SELECT * FROM img_file INNER JOIN img_activity ON img_file.file_code = img_activity.img_file_code WHERE img_activity.user_activity_code = :user_contents_code";
                        }

                        else if($category == 'item'){
                            $check_query = "SELECT COUNT(*) FROM img_item WHERE user_item_code = :user_contents_code AND user_code =  $user_code";
                            $query2 = "UPDATE img_item SET img_file_code = $last_id WHERE user_item_code = $user_contents_code AND user_code =  $user_code";
                            $query3 = "INSERT INTO img_item (user_item_code, img_file_code, user_code) VALUES ('$user_contents_code', '$last_id', '$user_code')";
                            $url_query = "SELECT * FROM img_file INNER JOIN img_item ON img_file.file_code = img_item.img_file_code WHERE img_item.user_item_code = :user_contents_code";
                        }

                        else if($category == 'skill'){
                            $check_query = "SELECT COUNT(*) FROM img_skill WHERE user_skill_code = :user_contents_code AND user_code =  $user_code";
                            $query2 = "UPDATE img_skill SET img_file_code = $last_id WHERE user_skill_code = $user_contents_code AND user_code =  $user_code";
                            $query3 = "INSERT INTO img_skill (user_skill_code, img_file_code, user_code) VALUES ('$user_contents_code', '$last_id', '$user_code')";
                            $url_query = "SELECT * FROM img_file INNER JOIN img_skill ON img_file.file_code = img_skill.img_file_code WHERE img_skill.user_skill_code = :user_contents_code";
                        }


                        $get_sequence = "SELECT sequence_val AS sequence_val FROM user_identity WHERE user_code = $user_code AND identity_code = :identity_code";
                        $seq_stmt = $conn->prepare($get_sequence);
                        $seq_stmt->bindParam(':identity_code',$identity_code);
                        $seq_stmt->execute();
                        $sequence_row = $seq_stmt -> fetch();
                        $sequence_val = $sequence_row["sequence_val"];


                        $check_stmt = $conn->prepare($check_query);
                        $check_stmt->bindParam(':user_contents_code',$user_contents_code);
                        $check_stmt->execute();
                        $count = $check_stmt->fetchColumn();


                       // $check_stmt = $conn->query($check_query);
                       // $count = $check_stmt->fetchColumn();



                        // 이미 해당 게시글에 이미지가 있으면 정보 UPDATE 없으면 INSERT

                        if($count>0){
                            $stmt2 = $conn->prepare($query2);
                            $stmt2->execute();  
                        
                        }
                        else{
                            $stmt3 = $conn->prepare($query3);
                            $stmt3->execute();    
                        }

                        
                        $url_stmt = $conn->query($url_query);
                        $url_stmt->bindParam(':user_contents_code',$user_contents_code);
                        $url_stmt->execute();
                        $row = $url_stmt->fetch();
                    

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
 
//echo json_encode($row['file_path']);
echo $row['file_path'];
 
?>