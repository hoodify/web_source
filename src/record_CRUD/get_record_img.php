<?php


/*////////////////////////////////////////////////////

parameter : user_contents_code   게시글 코드
            category             게시글 카테고리 (activity/item/skill)

다른 사람들의 게시물의 이미지 불러오기

////////////////////////////////////////////////////*/


    try {

          //DB 연결
          require("../../connect_db.php");

          //넘겨받는 parameter
          $user_contents_code = $_POST['user_contents_code'];
          $category = $_POST['category'];


          // activity 게시글일 경우
          if($category == 'activity'){
            $query = "SELECT img_file.file_path FROM img_activity 
                      INNER JOIN img_file ON img_activity.img_file_code = img_file.file_code  
                      WHERE img_activity.user_activity_code = '$user_contents_code'";
          }

          // item 게시글일 경우
          else if($category == 'item'){
            $query = "SELECT img_file.file_path FROM img_item
            INNER JOIN img_file ON img_item.img_file_code = img_file.file_code  
            WHERE img_item.user_item_code = '$user_contents_code'";
          }

          // skill 게시글일 경우
          else if($category == 'skill'){
            $query = "SELECT img_file.file_path FROM img_skill
            INNER JOIN img_file ON img_skill.img_file_code = img_file.file_code  
            WHERE img_skill.user_skill_code = '$user_contents_code'";

          }

          $stmt = $conn->prepare($query);
          $stmt->execute();


          if($stmt->execute()){

            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $jsonResult = json_encode($row);
            echo $jsonResult;

          }
          else{
            echo json_encode("fail");
          }




    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
