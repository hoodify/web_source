<?php


/*////////////////////////////////////////////////////

parameter : identity_code   정체성 코드
            last_id         마지막 게시물 id
            direction       다음 페이지 또는 이전 페이지 (방향)

해당 정체성을 가진 다른 사람들의 기록 가져오기

////////////////////////////////////////////////////*/


  try {
          
          // DB 연결
          require("../../connect_db.php");

          // 넘겨받는 parameter들
          $identity_code = $_POST['identity_code'];
          $last_id = $_POST['last_id'];
          $direction = $_POST['direction'];
      
        
          // 이전 페이지일 경우
          if($direction == 'backward'){

            $query = "SELECT * FROM (SELECT user_activity.user_activity_code, user_activity.identity_code, user_activity.activity_code, user_activity.title, user_activity.record, user_activity.date, activity.activity_name, activity.activity_img, user.nickname, identity.identity_name FROM user_activity INNER JOIN user ON user_activity.user_code = user.user_code INNER JOIN activity ON user_activity.activity_code = activity.activity_code INNER JOIN identity ON user_activity.identity_code = identity.identity_code WHERE user_activity.identity_code = :identity_code AND user_activity.user_activity_code > :last_id AND user_activity.public = 1 ORDER BY user_activity.user_activity_code ASC LIMIT 11) AS test ORDER BY user_activity_code DESC LIMIT 6";
          
          }
          
          // 다음 페이지일 경우
          else{
            $query = "SELECT * FROM user_activity INNER JOIN user ON user_activity.user_code = user.user_code INNER JOIN activity ON user_activity.activity_code = activity.activity_code INNER JOIN identity ON user_activity.identity_code = identity.identity_code WHERE user_activity.identity_code = :identity_code AND user_activity.user_activity_code < :last_id AND user_activity.public = 1 ORDER BY user_activity.user_activity_code DESC LIMIT 6";
          }


          $stmt = $conn->prepare($query);
          $stmt -> bindParam(':identity_code',$identity_code);
          $stmt -> bindParam(':last_id',$last_id);
          
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