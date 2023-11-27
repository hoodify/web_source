<?php



  try {

                require("../../connect_db.php");
                
                $user_code = $_SESSION['user_code'];
                
                // 해당 유저의 daily_check 속성 값 확인
                
                $check_query = "SELECT daily_check FROM user WHERE user_code ='$user_code'";
                $check_stmt = $conn->query($check_query)->fetch();;    
                $daily_check = $check_stmt['daily_check'];
              



              
                // => daily_check 값을 제대로 fetch하는지 확인해야 함.




                // 오늘 첫 확인일 때 (daily_check값이 0일 때)
                if($daily_check == 1){

                    // 유저가 보유하고 있는 정체성 정보 반환
                    $query = "SELECT * FROM user_identity INNER JOIN identity ON user_identity.identity_code = identity.identity_code WHERE user_identity.user_code ='$user_code'";
                    $stmt = $conn->prepare($query);    
                    $stmt->execute();
                    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $jsonResult = json_encode($row, JSON_UNESCAPED_UNICODE);
                    echo $jsonResult;
                
                    // 해당 유저의 daily_check 속성 값 UPDATE
                    $update_query = "UPDATE user SET daily_check = 0 WHERE user_code = $user_code";                   
                    $update_stmt = $conn->prepare($update_query);
                    $update_stmt->execute();
                   
        
                }

                // 오늘이 첫 확인이 아닐 때 (daily_check값이 1일 때)
                else{

                    $result = 'not first visit';
                    $jsonResult = json_encode($result, JSON_UNESCAPED_UNICODE);
                    echo $jsonResult;
                }

                
                



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>