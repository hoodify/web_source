<?php


// 선택된 identity를 active 상태로 업데이트하는 코드

  try {

                require("../connect_db.php");
                
                if(empty($_POST['selected_identities'])){

                   echo "nothing";
                }

                else{

                
                
                
                $selected_identities = $_POST['selected_identities']; // <= array형태로 받아서 루프로 
               
                $user_code = $_SESSION['user_code'];
               


                $reset_query = "UPDATE user_identity SET active = 0 WHERE user_code = $user_code";     
                $reset_stmt = $conn->prepare($reset_query);
                $reset_stmt->execute();
                           


                $dataCount = count($selected_identities); // <- $selected_identities의 크기

                // 각각의 identity code에 해당하는 코드 active로 업데이트하기
                for ($i = 0; $i < $dataCount; $i++) {

                 $identity_code = $selected_identities[$i];

                 $update_query = "UPDATE user_identity SET active = 1 WHERE identity_code = $identity_code AND user_code = $user_code";                   
                 $update_stmt = $conn->prepare($update_query);
                 $update_stmt->execute();
              

                }

                echo $dataCount;
              
              }
              

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>