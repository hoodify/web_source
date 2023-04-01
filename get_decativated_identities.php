

<?php

// 유저가 보유한 정체성 리스트 요청 처리
// 세션에 유저 정보가 없으면 'nothing' 반환
// 프론트에서 'nothing' 값을 받으면 일반 페이지 보임

require("connect_db.php");

  if(!isset($_SESSION['user_code'])){
    echo json_encode("nothing");
  }
  else{
    try {
      
              
                $user_code = $_SESSION['user_code'];

             
                $query = "SELECT * FROM user_identity INNER JOIN identity ON user_identity.identity_code = identity.identity_code WHERE user_identity.user_code = '$user_code' AND user_identity.active = 0";

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
