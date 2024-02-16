<?php

/*////////////////////////////////////////////////////

parameter : activity_code Array

넘겨받는 activity코드 순서대로 sequence_val 업데이트하기

////////////////////////////////////////////////////*/


  try {

        // DB 연결
        require("../../connect_db.php");


        // 현재 세션의 유저 정보 받기
        $user_code = $_SESSION['user_code'];

        // 넘겨받는 identity_code 어레이
        $activity_code_array = $_POST['activity_code_array'];


        // 어레이의 index 순으로 sequence_val 업데이트
        for ($i = 0; $i < count($activity_code_array); $i++) {

              $activity_code = $activity_code_array[$i];

              $query = "UPDATE user_activity_relation SET sequence_val = $i+1  WHERE activity_code = $activity_code AND user_code = $user_code";
              $stmt = $conn->prepare($query);
              $stmt->execute();

          }


        echo 'check';

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>