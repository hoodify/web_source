

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리



    try {

                require("../connect_db.php");

                 //$identity = $_SESSION['user_code'];
                

                 // 해당 유저의 활성화된 identity 리스트 inner join 각 identity code에 해당하는 activity들
                 $query = "SELECT * FROM activity INNER JOIN user_identity ON activity.identity_code = user_identity.identity_code INNER JOIN identity ON user_identity.identity_code = identity.identity_code
                          WHERE user_identity.user_code = $user_code AND user_identity.active = 1 ORDER BY RAND() LIMIT 6";

              



               
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
