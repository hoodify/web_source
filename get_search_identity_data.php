

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

                  $query_activity = "SELECT * FROM activity  WHERE identity_code = '$identity_code' ";
                  $stmt_activity = $conn->prepare($query_activity);
                  $stmt_activity->execute();
                  $row_activity = $stmt_activity->fetchAll(PDO::FETCH_ASSOC);

                  $query_item = "SELECT * FROM item  WHERE identity_code = '$identity_code' ";
                  $stmt_item = $conn->prepare($query_item);
                  $stmt_item->execute();
                  $row_item = $stmt_item->fetchAll(PDO::FETCH_ASSOC);

                  $query_skill= "SELECT * FROM skill  WHERE identity_code = '$identity_code' ";
                  $stmt_skill = $conn->prepare($query_skill);
                  $stmt_skill->execute();
                  $row_skill = $stmt_skill->fetchAll(PDO::FETCH_ASSOC);

                  $query_caution = "SELECT * FROM caution  WHERE identity_code = '$identity_code' ";
                  $stmt_caution = $conn->prepare($query_caution);
                  $stmt_caution->execute();
                  $row_caution = $stmt_caution->fetchAll(PDO::FETCH_ASSOC);




                  $jsonResult_activity = json_encode($row_activity);
                  $jsonResult_item = json_encode($row_item);
                  $jsonResult_skill = json_encode($row_skill);
                  $jsonResult_caution = json_encode($row_caution);
                 
                  
                  $json_sum = $jsonResult_activity + $jsonResult_item + $jsonResult_skill + $jsonResult_caution;

                  echo $jjson_sum;






    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
