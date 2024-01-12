<?php

/*////////////////////////////////////////////////////

////////////////////////////////////////////////////*/

  try {

        // DB 접속 
        require("../../connect_db.php");

        // 넘겨받는 parameter, 정체성 코드
        $identity_code_array = $_POST['identity_code_array'];

        $result_array = [];

        for ($i = 0; $i < count($identity_code_array); $i++) {

          $identity_code = $identity_code_array[$i];


          $query = "SELECT * FROM identity WHERE identity_code = :identity_code";

          $stmt = $conn->prepare($query);
          $stmt->bindParam(':identity_code',$identity_code);
          $stmt->execute();
          $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


          array_push($result_array, $row);


        }


        
        $jsonResult = json_encode($result_array);
        echo $jsonResult;



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
