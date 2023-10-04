

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리



    try {

                require("connect_db.php");

                  $user_code = $_SESSION['user_code'];
                  $date_value = $_POST['date_value'];




                  /*

                  $identity_code_array = $_POST['identity_code_array'];

                    for ($i = 0; $i < count($identity_code_array); $i++) {
                          $identity_code = $identity_code_array[$i];

                          $query = "UPDATE user_identity SET sequence_val = $i+1  WHERE identity_code = $identity_code";
                          $stmt = $conn->prepare($query);
                          $stmt->execute();
                      }



                  */



                  $query = "SELECT * FROM user_identity INNER JOIN identity ON user_identity.identity_code = identity.identity_code 
                            WHERE user_identity.user_code = '$user_code' ORDER BY sequence_val LIMIT 5";

                  $stmt = $conn->prepare($query);
                  $stmt->execute();

                  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  $test_result = [];


                  for ($i = 0; $i < count($row); $i++) {
                    $total_count = 0;
                    

                    $identity_code = $row[$i]['identity_code'];


                    $each_array = array(
                      "identity_code" => 0,
                      "identity_img" => "",
                      "identity_title" => "",
                      "count"=> 0
                    );


                    $each_array['identity_img'] = $row[$i]['identity_img'];
                    $each_array['identity_title'] = $row[$i]['identity_name'];
          

                    $activity_query = "SELECT COUNT(*) FROM user_activity WHERE user_code = '$user_code' AND identity_code = $identity_code 
                                        AND  MONTH(date) = $date_value";

                    $activity_stmt = $conn->prepare($activity_query);
                    $activity_stmt->execute();
                    $count_activity = $activity_stmt -> fetchColumn();
                    $total_count = $total_count+$count_activity;

                  
                    $item_query = "SELECT COUNT(*) FROM user_item WHERE user_code = '$user_code' AND identity_code = $identity_code
                                    AND  MONTH(date) = $date_value";

                    $item_stmt = $conn->prepare($item_query);
                    $item_stmt->execute();
                    $count_item = $item_stmt -> fetchColumn();
                    $total_count = $total_count+$count_item;


                    $skill_query = "SELECT COUNT(*) FROM user_skill WHERE user_code = '$user_code' AND identity_code = $identity_code
                                    AND  MONTH(date) = $date_value";
                    $skill_stmt = $conn->prepare($skill_query);
                    $skill_stmt->execute();
                    $count_skill = $skill_stmt -> fetchColumn();
                    $total_count = $total_count+$count_skill;


                    $caution_query = "SELECT COUNT(*) FROM user_caution WHERE user_code = '$user_code' AND identity_code = $identity_code
                                      AND  MONTH(date) = $date_value";

                    $caution_stmt = $conn->prepare($caution_query);
                    $caution_stmt->execute();
                    $count_caution = $caution_stmt -> fetchColumn();
                    $total_count = $total_count+$count_caution;



                    $each_array['identity_code'] = $identity_code;
                    $each_array['count'] = $total_count;



                    array_push($test_result, $each_array);
                    usort($test_result, 'DescSort');

                  }

                  

  
                 // $jsonResult = json_encode($row);
                 // echo $jsonResult;
                 $jsonResult = json_encode($test_result);

                 
                 echo $jsonResult;



    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


    function DescSort($item1,$item2)
    {
        if ($item1['count'] == $item2['count']) return 0;
        return ($item1['count'] < $item2['count']) ? 1 : -1;
    }

?>
