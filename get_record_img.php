

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리


    try {

                  require("connect_db.php");


                 // $user_code = $_SESSION['user_code'];
                  $user_contents_code = $_POST['user_contents_code'];


                  $category = $_POST['category'];

                  if($category == 'activity'){
                   $query = "SELECT img_file.file_path FROM img_activity 
                              INNER JOIN img_file ON img_activity.img_file_code = img_file.file_code  
                              WHERE img_activity.user_activity_code = '$user_contents_code'";
                  }
                  else if($category == 'item'){
                    $query = "SELECT img_file.file_path FROM img_item
                    INNER JOIN img_file ON img_item.img_file_code = img_file.file_code  
                    WHERE img_item.user_item_code = '$user_contents_code'";

                  }
                  else if($category == 'skill'){
                    $query = "SELECT img_file.file_path FROM img_skill
                    INNER JOIN img_file ON img_skill.img_file_code = img_file.file_code  
                    WHERE img_skill.user_skill_code = '$user_contents_code'";

                  }



                  $stmt = $conn->prepare($query);
                  $stmt->execute();

                  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  $jsonResult = json_encode($row);
                  echo $jsonResult;

                 


    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
