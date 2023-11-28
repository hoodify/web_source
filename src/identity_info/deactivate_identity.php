<?php

/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성을 비활성화함 (창고로)

////////////////////////////////////////////////////*/


  try {

    // DB 접속      
    require("../../connect_db.php");

    // 현재 세션의 유저 정보 받기
    $user_code = $_SESSION['user_code'];

    // 넘겨받는 parameter, 정체성 코드
    $identity_code = $_POST['identity_code'];


    // 비활성화할 정체성의 순서값 구하기
    $get_sequence = "SELECT sequence_val AS sequence_val FROM user_identity WHERE user_code = $user_code AND identity_code = :identity_code";
    $seq_stmt = $conn->prepare($get_sequence);
    $seq_stmt->bindParam(':identity_code',$identity_code);
    $seq_stmt->execute();
    $sequence_row = $seq_stmt -> fetch();
    $sequence_val = $sequence_row["sequence_val"];

   
    // $result = $conn->query($get_sequence)->fetch();
   // $sequence_val = $result['sequence_val'];





    // 위의 순서값을 기준으로 리스트의 나머지 정체성의 순서값 업데이트
    $updt_query = "UPDATE user_identity SET sequence_val = sequence_val-1  WHERE sequence_val > :sequence_val AND active = 1";
    $updt_stmt = $conn->prepare($updt_query);
    $updt_stmt->bindParam(':sequence_val',$sequence_val);
    $updt_stmt->execute();
    

    // 비활성화할 정체성의 순서값, 활성화 값 업데이트
    $query = "UPDATE user_identity SET active = 0, sequence_val = 99 WHERE user_code = $user_code AND identity_code = :identity_code";
    $stmt = $conn->prepare($query);
    $stmt -> bindParam(':identity_code', $identity_code);

    if($stmt->execute()){
        echo "success";
    }
    else{
        echo "fail";
    }
              

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>