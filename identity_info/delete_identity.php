<?php

/*////////////////////////////////////////////////////

parameter : identity_code

유저의 해당 정체성과 관련된 모든 데이터를 삭제

////////////////////////////////////////////////////*/



  try {

      // DB 접속 
      require("../connect_db.php");

      // 현재 세션의 유저 정보 받기
      $user_code = $_SESSION['user_code'];

      // 넘겨받는 parameter, 정체성 코드
      $identity_code = $_POST['identity_code'];




      // activity img 삭제
      $query1 = "DELETE img_activity FROM img_activity INNER JOIN user_activity ON img_activity.user_activity_code = user_activity.user_activity_code WHERE user_activity.identity_code = $identity_code AND user_activity.user_code = $user_code";

      // activity 기록 삭제
      $query2 = "DELETE FROM user_activity WHERE identity_code = $identity_code AND user_code = $user_code";

      // item img 삭제
      $query3 = "DELETE img_item FROM img_item INNER JOIN user_item ON img_item.user_item_code = user_item.user_item_code WHERE user_item.identity_code = $identity_code AND user_item.user_code = $user_code";
      
      // item 기록 삭제
      $query4 = "DELETE FROM user_item WHERE identity_code = $identity_code AND user_code = $user_code";

      // 지리 정보 삭제
      $query5 = "DELETE FROM user_location WHERE main_identity_code = $identity_code AND user_code = $user_code";

      // identity 데이터 삭제
      $query6 = "DELETE FROM user_identity WHERE identity_code = $identity_code AND user_code = $user_code";
    

      $stmt1 = $conn->prepare($query1);
      $stmt2 = $conn->prepare($query2);
      $stmt3 = $conn->prepare($query3);
      $stmt4 = $conn->prepare($query4);
      $stmt5 = $conn->prepare($query5);
      $stmt6 = $conn->prepare($query6);


      if($stmt1->execute() AND $stmt2->execute() AND $stmt3->execute() AND $stmt4->execute() AND $stmt5->execute() AND $stmt6->execute()){
      
          echo "success";

      }
      else{
          echo "fail";
      }
                
              
  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>