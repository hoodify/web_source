<?php

/*////////////////////////////////////////////////////

////////////////////////////////////////////////////*/

  try {

        // DB 접속 
        require("../../connect_db.php");

        // 넘겨받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];



        // 해당 정체성과 관련된 모든 키워드 받기
        $support_query = "SELECT * FROM support WHERE identity_code = :identity_code";
                
        $support_stmt = $conn->prepare($support_query);
        $support_stmt->bindParam(':identity_code',$identity_code);
        $support_stmt->execute();
        $support_row = $support_stmt->fetchAll(PDO::FETCH_ASSOC);
        

        
        $jsonResult = json_encode($support_row);
        echo $jsonResult;



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
