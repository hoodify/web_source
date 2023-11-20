<?php

/*////////////////////////////////////////////////////

parameter : identity_code 정체성 코드 
            skill_code 활동 코드
            record_title  기록 제목
            record_cont   기록 내용
            public_state  공개 여부


유저의 skill 포스트 추가하기

////////////////////////////////////////////////////*/

  try {

          // DB 연결
          require("../connect_db.php");


          // 현재 세션의 유저 정보 받기
          $user_code = $_SESSION['user_code'];

          // 넘겨받는 parameter들
          $identity_code = $_POST['curr_identity_code'];
          $skill_code = $_POST['curr_skill_code'];
          $record_title = $_POST['record_title'];
          $record_cont = $_POST['record_cont'];
          $public_state = $_POST['public_state'];

          // parameter 값 INSERT
          $query = "INSERT INTO user_skill (identity_code, skill_code, user_code, title, record, public) VALUES ('$identity_code', '$skill_code', '$user_code', '$record_title', '$record_cont', $public_state)";

          $stmt = $conn->prepare($query);

          if($stmt->execute()){

            // INSERT한 기록 id값 반환
            $last_id = $conn->lastInsertId();
            echo $last_id;
          }
          else{
              echo "failure";
          }


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
