<?php

/*////////////////////////////////////////////////////


////////////////////////////////////////////////////*/


  try {

        // DB 접속 
        require("../../connect_db.php");
        
        $user_list = $_POST['user_list']; // 투표로 선택한 친구 uuid array
        $identity_code = $_POST['identity_code']; // 투표한 키워드 identity_code

        $user_code = $_SESSION['user_code']; // 투표하는 유저의 id


          for ($i = 0; $i < count($user_list); $i++) {

            $to_user = $user_list[$i];

            $uid_sql = "SELECT * FROM user WHERE kakao_uuid = $to_user";
         //   $uid_stmt = $conn->prepare($uid_sql);
           // $uid_stmt->bindParam(':kakao_uuid', $to_user);

           $sth = $conn->prepare("SELECT * FROM user WHERE kakao_uuid = :to_user");
           $sth->bindParam(':to_user', $to_user);
           $sth->execute();
           


        //   $result = $conn->query($uid_sql)->fetch();
         

          // $result = $sth->fetch(PDO::FETCH_OBJ);
          // echo $result['user_value'];
      //    $result = $conn->query($uid_sql)->fetch();
           // $to_user_code = $result['user_code'];

           $row = $sth->fetch(PDO::FETCH_ASSOC);

            $to_user_code = $row['user_code'];
           
          // $jsonResult = json_encode($row);
          // echo $jsonResult;

 //           echo $result;
           
//           $jsonResult = json_encode($to_user_code);
  //         echo $jsonResult;


            $add_message_sql = "INSERT INTO message_card (identity_code, from_user, to_user) VALUES (:identity_code, :from_user, :to_user)";


            $add_message_stmt = $conn->prepare($add_message_sql);
            $add_message_stmt->bindParam(':identity_code', $identity_code);
            $add_message_stmt->bindParam(':from_user', $user_code);
            $add_message_stmt->bindParam(':to_user', $to_user_code);

            $add_message_stmt->execute();

          }

        
       
                
  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>