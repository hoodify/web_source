<?php

/*////////////////////////////////////////////////////


////////////////////////////////////////////////////*/


  try {

        // DB 접속 
        require("../../connect_db.php");
        
        $identity_code = $_POST['identity_code'];

        
        $query = "SELECT * FROM message_card INNER JOIN identity ON message_card.identity_code = identity.identity_code INNER JOIN user ON message_card.from_user = user.user_code WHERE message_card.identity_code = :identity_code";
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':identity_code',$identity_code);
        
        if($stmt->execute()){

          $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $jsonResult = json_encode($row);
          echo $jsonResult;

        }
        else{
            $jsonResult = json_encode("fail");
            echo $jsonResult;
        }

                
  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>