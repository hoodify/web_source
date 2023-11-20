<?php


/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성을 main으로 둔 모든 유저의 활동 정보 반환


////////////////////////////////////////////////////*/

  try {

        // DB 접속
        require("../connect_db.php");

        // 받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];

        // 해당 정체성의 '총 유저 수' 반환 sql
        $user_num_query = "SELECT identity.identity_name, COUNT(*) AS total_user_num FROM user_identity INNER JOIN identity ON user_identity.identity_code = identity.identity_code WHERE user_identity.sequence_val = 1 AND user_identity.identity_code = $identity_code";
        $stmt_user_num = $conn->prepare($user_num_query);
        $stmt_user_num->execute();
        $row_user_num = $stmt_user_num->fetchAll(PDO::FETCH_ASSOC);

        
        // 해당 정체성의 유저들의 '활동 수 (activity 별)' 반환 sql
        $check_query = "SELECT identity.identity_name, activity.activity_code, activity.activity_name, activity.activity_desc, COUNT(*) AS cnt FROM user_activity INNER JOIN activity ON user_activity.activity_code = activity.activity_code INNER JOIN identity ON user_activity.identity_code = identity.identity_code WHERE user_activity.identity_code =  $identity_code AND DAY(date) = DAY(NOW()) AND MONTH(date) = MONTH(NOW()) GROUP BY user_activity.activity_code"; 
        $check_stmt = $conn->prepare($check_query);
        $check_stmt->execute();
        $row = $check_stmt->fetchAll(PDO::FETCH_ASSOC);


        // 두 sql에 대한 값 array에 취합
        $mergeArray = array(0=>$row_user_num, 1=>$row);
        $jsonResult = json_encode($mergeArray);

          
        echo $jsonResult;



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
