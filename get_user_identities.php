

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


                $min_sequence_query = "SELECT MIN(sequence_val) AS min_value FROM user_identity WHERE user_code = $user_code AND active = 1";
                $result = $conn->query($min_sequence_query)->fetch();
                $min_value = $result['min_value'];

                $max_sequence_query = "SELECT MAX(sequence_val) AS max_value FROM user_identity WHERE user_code = $user_code AND active = 1";
                $result = $conn->query($max_sequence_query)->fetch();
                $max_value = $result['max_value'];




                if($min_value == 2){


                  $arrange_sequence_sql = "UPDATE user_identity SET sequence_val = sequence_val - 1 WHERE user_code = $user_code AND active = 1";
                  $stmt2 = $conn->prepare($arrange_sequence_sql);
                  $stmt2->execute();  

                }

                $active_count_query = "SELECT * FROM user_identity  WHERE user_code = '$user_code' AND active = 1 ";
                $stmt3 = $conn->prepare($active_count_query);
                $stmt3->execute();

                if($stmt3->rowCount() == 2 AND $max_value == 3){

                  $arrange_sequence_sql2 = "UPDATE user_identity SET sequence_val = 2 WHERE user_code = $user_code AND active = 1 AND sequence_val = 3";
                  $stmt4 = $conn->prepare($arrange_sequence_sql2);
                  $stmt4->execute();  


                }



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
