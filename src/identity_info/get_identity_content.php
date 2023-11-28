<?php


/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성에 대한 정보 반환

////////////////////////////////////////////////////*/

    try {

          // DB 접속 
          require("../../connect_db.php");

          // 넘겨받는 parameter, 정체성 코드
          $identity_code = $_POST['identity_code'];

          // 해당 정체성에 대한 정보 반환
          $query = "SELECT * FROM identity  WHERE identity_code = :identity_code ";


          $stmt = $conn->prepare($query);
          $stmt->bindParam(':identity_code',$identity_code);


          $stmt->execute();
          $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

          $jsonResult = json_encode($row);
          echo $jsonResult;

    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
