

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리



    try {

                require("../connect_db.php");


                  $identity_code = $_POST['identity_code'];
                  $latitude = $_POST['latitude'];
                  $longitude = $_POST['longitude'];

                  $user_code = $_SESSION['user_code'];


                  $check_query = "SELECT * FROM user_location WHERE user_code = $user_code";
                  $check_stmt = $conn->prepare($check_query);
                  $check_stmt->execute();

                  if($check_stmt->rowCount() > 0)
                  {

                    $update_query = "UPDATE user_location SET main_identity_code =$identity_code, latitude = $latitude, longitude = $longitude WHERE user_code = '$user_code'";
                    $update_stmt = $conn->prepare($update_query);
                    $update_stmt->execute();
                    
                  }
                  else{



                    $insert_query = "INSERT INTO user_location (user_code, main_identity_code, latitude, longitude) VALUES ('$user_code', '$identity_code', '$latitude', '$longitude')";
                    $insert_stmt = $conn->prepare($insert_query);
                    $insert_stmt->execute();

                  }

                 

                  
                  $query = "SELECT *, CASE WHEN user_location.user_code = $user_code THEN 'current' ELSE 'other' END AS currentuser FROM user_location INNER JOIN identity ON user_location.main_identity_code = identity.identity_code INNER JOIN user ON user_location.user_code = user.user_code WHERE user_location.main_identity_code = $identity_code";

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
