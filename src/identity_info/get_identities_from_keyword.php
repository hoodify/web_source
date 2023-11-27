<?php


/*////////////////////////////////////////////////////

parameter : keyword_text

유저의 모든 비활성 정체성 받기 (창고에 있는 정체성)

////////////////////////////////////////////////////*/

  try {

        // DB 접속 
        require("../../connect_db.php");
        
        // 넘겨받는 parameter, 키워드 문자값
        $keyword_text = $_POST['keyword_text'];

        
        // 해당 키워드와 이어진 정체성 받기
        $query = "SELECT * FROM identity INNER JOIN identity_keyword ON identity.identity_code = identity_keyword.identity_code INNER JOIN keyword ON identity_keyword.keyword_code = keyword.keyword_code WHERE keyword_name ='$keyword_text'";
        $stmt = $conn->prepare($query);
        
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