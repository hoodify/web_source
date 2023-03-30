

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리



    try {

                require("connect_db.php");
                $identity_code = $_POST['identity_code'];



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



                 $mergeArray = array(0=>$row_activity, 1=>$row_item, 2=>$row_skill, 3=>$row_caution);

                 $resultJSON = json_encode($mergeArray);

                  echo $resultJSON;






    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
