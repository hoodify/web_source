

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리



    try {

                require("../../connect_db.php");

                  $user_code = $_SESSION['user_code'];
                  $date_value = $_POST['date_value'];



              
                    $activity_query = "SELECT identity.identity_name,activity.activity_name, activity.activity_desc, activity.activity_img, COUNT(*) AS cnt FROM user_activity INNER JOIN activity ON user_activity.activity_code = activity.activity_code INNER JOIN identity ON activity.identity_code = identity.identity_code
                                      WHERE user_code = '$user_code'  AND  MONTH(date) = $date_value GROUP BY user_activity.activity_code ORDER BY cnt DESC";

                    $activity_stmt = $conn->prepare($activity_query);
                    $activity_stmt->execute();
                    
                    $row = $activity_stmt->fetch(PDO::FETCH_ASSOC);

        
           
                 $jsonResult = json_encode($row);

                 
                 echo $jsonResult;



    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
