<?php


//  유저의 특정 콘텐츠 기록을 수정하는 요청 처리



  try {


                require("connect_db.php");

                $user_code = $_SESSION['user_code'];

                $profile_message = $_POST['profile_message'];


            
                $query = "UPDATE user SET introduction = '$profile_message' WHERE user_code = $user_code";
               
                $stmt = $conn->prepare($query);
                
                if($stmt->execute()){
                    echo "success";
                }
                else{
                    echo "fail";
                }
                



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>