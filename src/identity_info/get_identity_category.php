<?php

/*////////////////////////////////////////////////////

parameter : category_text

넘겨받는 category에 해당하는 모든 identity 받기

////////////////////////////////////////////////////*/


  try {

        // DB 접속 
        require("../../connect_db.php");
        
        // 넘겨받는 parameter, category_text
        $category_text = $_POST['category_text'];

        
        // 해당 category에 연결된 모든 정체성 리스트 받기
        $query = "SELECT * FROM identity INNER JOIN identity_category ON identity.identity_code = identity_category.identity_code INNER JOIN category ON identity_category.category_code = category.category_code WHERE category_name ='$category_text'";
        
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