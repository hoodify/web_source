<?php

/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성의 모든 키워드 받기

////////////////////////////////////////////////////*/


  try {

        // DB 접속 
        require("../../connect_db.php");

        // 넘겨받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];

      
        // 해당 정체성과 관련된 모든 키워드 받기
        $query = "SELECT * FROM keyword INNER JOIN identity_keyword ON keyword.keyword_code = identity_keyword.keyword_code WHERE identity_keyword.identity_code = :identity_code";
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':identity_code',$identity_code);
        
        
        if($stmt->execute()){

          $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $jsonResult = json_encode($row);
          echo $jsonResult;

        }
        else{
            echo "fail";
        }
              

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>