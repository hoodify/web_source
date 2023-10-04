

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리


    try {

                  require("connect_db.php");
                  $identity_code = $_POST['identity_code'];

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
