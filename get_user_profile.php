

<?php

require("connect_db.php");
          
  if(!isset($_SESSION['user_code'])){
    echo json_encode("nothing");
  }
  else{
    try {
              
                $user_code = $_SESSION['user_code'];

            
                $query = "SELECT * FROM user WHERE user_code = '$user_code'";

                $stmt = $conn->prepare($query);

                if($stmt->execute()){

                  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  $jsonResult = json_encode($row);
                  echo $jsonResult;
                }
                else{
                  json_encode("fail");
                }



          }

    catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
    }

}


?>
