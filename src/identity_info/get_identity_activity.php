<?php

/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성의 모든 activity 리스트 받기

////////////////////////////////////////////////////*/

  try {

        // DB 접속 
        require("../../connect_db.php");

        // 넘겨받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];


        // 해당 정체성의 모든 activity 불러오기
        $query = "SELECT * FROM activity INNER JOIN identity ON activity.identity_code = identity.identity_code WHERE activity.identity_code = '$identity_code' ORDER BY activity.activity_level ASC";


        $stmt = $conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $jsonResult = json_encode($row);
        echo $jsonResult;


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
