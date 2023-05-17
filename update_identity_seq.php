<?php


//  유저의 특정 콘텐츠 기록을 수정하는 요청 처리


  try {


                
                require("connect_db.php");

                $user_code = $_SESSION['user_code'];
                $identity_code_array = $_POST['identity_code_array'];

              for ($i = 0; $i < count($identity_code_array); $i++) {
                    $identity_code = $identity_code_array[$i];

                    $query = "UPDATE user_identity SET sequence_val = $i+1  WHERE identity_code = $identity_code";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                }


                echo 'check';


                
                



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>