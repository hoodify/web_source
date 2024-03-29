<?php

/*////////////////////////////////////////////////////

유저의 모든 정체성 반환

////////////////////////////////////////////////////*/


  // DB 접속 
  require("../../connect_db.php");


  // 세션에 유저 정보가 있는지 확인
  if(!isset($_SESSION['user_code'])){

    echo json_encode("nothing");

  }

  else{

    try {
                
            // 현재 세션의 유저 정보 받기
            $user_code = $_SESSION['user_code'];


            // 유저가 보유한 정체성 중 리스트에 있는 (활성) 정체성 받기
            $query = "SELECT * FROM user_identity INNER JOIN identity ON user_identity.identity_code = identity.identity_code WHERE user_identity.user_code = '$user_code' AND user_identity.active = 1 ORDER BY sequence_val";


            $stmt = $conn->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $jsonResult = json_encode($row);
            echo $jsonResult;

          }

    catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
    }

}


?>
