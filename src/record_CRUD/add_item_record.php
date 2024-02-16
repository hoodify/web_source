<?php

/*////////////////////////////////////////////////////

parameter : identity_code 정체성 코드 
            item_code 활동 코드
            record_title  기록 제목
            record_cont   기록 내용
            public_state  공개 여부


유저의 item 포스트 추가하기

////////////////////////////////////////////////////*/

  try {


        // DB 연결
        require("../../connect_db.php");

        // 현재 세션의 유저 정보 받기
        $user_code = $_SESSION['user_code'];

        // 넘겨받는 parameter들
        $identity_code = $_POST['curr_identity_code'];
        $item_code = $_POST['curr_item_code'];
        $record_title = $_POST['record_title'];
        $record_cont = $_POST['record_cont'];
        $public_state = $_POST['public_state'];

        // parameter 값 INSERT
        $query = "INSERT INTO user_item (identity_code, item_code, user_code, title, record, public) VALUES (:identity_code, :item_code, :user_code, :record_title, :record_cont, :public_state)";


        $stmt = $conn->prepare($query);

          $stmt->execute(array(
          ':identity_code' => $identity_code,
          ':item_code' => $item_code,
          ':user_code' => $user_code,
          ':record_title' => $record_title,
          ':record_cont' =>  $record_cont,
          ':public_state' => $public_state
        ));

        echo 'complete';

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
