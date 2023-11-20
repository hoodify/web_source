

<?php


/*////////////////////////////////////////////////////

parameter : category_text

넘겨받는 카테고리와 관련된 모든 키워드 받기

////////////////////////////////////////////////////*/


  try {

          // DB 접속 
          require("../connect_db.php");
          
          // 넘겨받는 parameter, category_text
          $category_text = $_POST['category_text'];


          // 해당 카테고리와 연결된 모든 키워드 받기
          $query = "SELECT keyword.keyword_name FROM category 
                    INNER JOIN identity_category ON category.category_code = identity_category.category_code
                    INNER JOIN identity ON identity_category.identity_code = identity.identity_code 
                    INNER JOIN identity_keyword ON identity_keyword.identity_code = identity.identity_code 
                    INNER JOIN keyword ON keyword.keyword_code = identity_keyword.keyword_code WHERE category.category_name ='$category_text' ORDER BY RAND() LIMIT 7";


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