

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리


    session_start();

    try {

                  $dbName = "hoodify";
                  $tblName = "testTBL";
                  $identity_code = $_POST['identity_code'];
                //  $IdInt = (int)$identity_code;



                  $conn = new PDO("mysql:host=127.0.0.1;dbname=${dbName}", "root", "050638");
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $query = "SELECT * FROM skill  WHERE identity_code = '$identity_code' ";

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
