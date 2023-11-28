<?php


/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성을 유저의 리스트에 추가함

////////////////////////////////////////////////////*/

  try {


      // DB 접속        
      require("../../connect_db.php");

      // 세션에 유저 정보가 있는지 확인
      if(isset($_SESSION['user_code'])){


        // 현재 세션의 유저 정보 받기
        $user_code = $_SESSION['user_code'];

        // 넘겨받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];

        
        // 추가되는 identity에 할당될 순서(sequence_val)와 활성화여부 값(active_val)
        $sequence_val;
        $active_val;


        // 해당 유저의 활성화된 정체성 개수
        $max_sequence_query = "SELECT MAX(sequence_val) AS max_value FROM user_identity WHERE user_code = $user_code AND active = 1";
        $result = $conn->query($max_sequence_query)->fetch();
        $max_value = $result['max_value'];


        // 유저의 리스트가 차있지 않을 때 sequence_val과 active 값 부여
        if($max_value<7){
          $sequence_val = $max_value+1;
          $active_val = 1;
        }

        // 유저의 리스트가 다 차있다면 해당 정체성을 창고로 보냄. 그에 해당하는 sequence_val과 active 값 부여
        else{
          $sequence_val = 99;
          $active_val = 0;
        }


        // 해당 정체성을 유저의 보유 정체성에 추가
        $query = "INSERT INTO user_identity (identity_code, user_code, active, sequence_val) VALUES (:identity_code, :user_code, :active_val, :sequence_val)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':identity_code', $identity_code);
        $stmt->bindParam(':user_code', $user_code);
        $stmt->bindParam(':active_val', $active_val);
        $stmt->bindParam(':sequence_val', $sequence_val);

        
        if($stmt->execute()){
              echo "success";
          }
          else{
              echo "failure";
          }

      }
      
      else{
        echo "no user";
      }

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>