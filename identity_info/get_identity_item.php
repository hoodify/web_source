<?php

/*////////////////////////////////////////////////////

parameter : identity_code

넘겨받는 정체성의 모든 item 리스트 받기

////////////////////////////////////////////////////*/


    try {

        // DB 접속 
        require("../connect_db.php");

        // 넘겨받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];

        // 해당 정체성의 모든 item 불러오기
        $query = "SELECT * FROM item INNER JOIN identity ON item.identity_code = identity.identity_code WHERE item.identity_code = '$identity_code' ";

        

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
