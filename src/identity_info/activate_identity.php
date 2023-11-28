<?php


/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성을 활성화함 (창고에서 main 리스트로 옮김)

이때 이 정체성의 순서(sequence_val)을 업데이트 함


////////////////////////////////////////////////////*/



  try {

        // DB 접속
        require("../../connect_db.php");


        //  받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];

        // 현재 세션의 유저 정보 받기
        $user_code = $_SESSION['user_code'];
        

        // 현재 유저의 리스트에 있는 정체성 개수
        $max_sequence_query = "SELECT MAX(sequence_val) AS max_value FROM user_identity WHERE user_code = $user_code AND active = 1";
        $result = $conn->query($max_sequence_query)->fetch();



        $max_value = $result['max_value'];

        // 유저의 활성화된 정체성 개수 얻기
        $active_count_query = "SELECT * FROM user_identity  WHERE user_code = '$user_code' AND active = 1 ";
        $stmt3 = $conn->prepare($active_count_query);
        $stmt3->execute();

        // 이미 제한 개수가 차 있다면 return
        if($stmt3->rowCount() == 7){
          echo "full";
        }


        // 제한 개수만큼 차있지 않다면 sequence_val 업데이트
        else{

          $sequence_val = $max_value+1;
          $query = "UPDATE user_identity SET active = 1, sequence_val = $sequence_val WHERE user_code = $user_code AND identity_code = :identity_code";
          $stmt = $conn->prepare($query);
          $stmt->bindParam(':identity_code', $identity_code);
          
          if($stmt->execute()){
              echo "success";
          }
          else{
              echo "fail";
          }
        

        }

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }

?>