<?php

/*////////////////////////////////////////////////////

> 친구 목록 불러오는 코드

////////////////////////////////////////////////////*/

  try {

        // DB 접속 
        require("../../connect_db.php");


        $user_code = $_SESSION['user_code'];      


        // 현재 유저의 친구 목록 불러오기
        // user_a_code 의 정보와 user_b_code의 정보 합치기



        // !!!!!!!!!!!!!!!!!!!!!!!!!! 조회 실패에 대한 코드 작성 필요  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

        $query = "SELECT *
                    FROM friends INNER JOIN user ON friends.user_b_code = user.user_code /* user_a의 친구, user_b에 대한 정보 붙이기 */
                    WHERE user_a_code = :user_code

                UNION ALL

                SELECT *
                    FROM friends INNER JOIN user ON friends.user_a_code = user.user_code /* user_b의 친구, user_a에 대한 정보 붙이기 */
                    WHERE user_b_code = :user_code";
        



        $stmt = $conn->prepare($query);
        $stmt->bindParam(':user_code',$user_code);


        if($stmt->execute()){

          $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $jsonResult = json_encode($row);
          echo $jsonResult;

        }
        else{
            $jsonResult = json_encode("fail");
            echo $jsonResult;
        }


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
