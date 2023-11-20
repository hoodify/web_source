<?php

/*////////////////////////////////////////////////////

parameter : record_code

유저의 activity 포스트 삭제하기

////////////////////////////////////////////////////*/


  try {

        // DB 연결
        require("../connect_db.php");

        // 현재 세션의 유저 정보 받기
        $user_code = $_SESSION['user_code'];

        // 넘겨받는 게시물 코드
        $record_code = $_POST['record_code'];

        // 해당 게시물의 이미지 삭제
        $query2 = "DELETE FROM img_activity WHERE user_activity_code = $record_code AND user_code = $user_code";
        $stmt2 = $conn->prepare($query2);
        
        // 해당 게시물 삭제
        $query = "DELETE FROM user_activity WHERE user_activity_code = $record_code AND user_code = $user_code";
        $stmt = $conn->prepare($query);
        
                
        if($stmt2->execute() AND $stmt->execute()){

            echo "success";
        }
        else{
            echo "failure";
        }
                

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>